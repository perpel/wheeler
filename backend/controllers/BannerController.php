<?php

namespace backend\controllers;

use Yii;
use common\models\Banner;
use backend\models\SearchBanner;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\UploadForm;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * BannerController implements the CRUD actions for Banner model.
 */
class BannerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Banner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchBanner();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banner model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Banner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banner();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $uploadObj = new UploadForm();
            $uploadObj->file = UploadedFile::getInstance($model, 'src');
            if ($uploadObj->file && $uploadObj->validate()) {  
                $filename = $model->id . '.' . $uploadObj->file->extension;              
                $uploadObj->file->saveAs(Yii::getAlias('@uploads') . '/banner/' . $filename);
                $banner = Banner::findOne($model->id);
                $banner->src = $filename;
                $banner->save();
            }
            $this->flushBannerCache();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Banner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $uploadObj = new UploadForm();
            $uploadObj->file = UploadedFile::getInstance($model, 'src');
            if ($uploadObj->file && $uploadObj->validate()) {  
                $filename = $model->id . '.' . $uploadObj->file->extension;              
                $uploadObj->file->saveAs(Yii::getAlias('@uploads') . '/banner/' . $filename);
                $model->src = $filename;
            }
            if ($model->save()) {
                $this->flushBannerCache();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Banner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        $this->flushBannerCache();
        return $this->redirect(['index']);
    }

    protected function flushBannerCache() {
        Yii::$app->cache->delete('banner_zh-CN');
        Yii::$app->cache->delete('banner_en');
    }

    /**
     * Finds the Banner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Banner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banner::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
