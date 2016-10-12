<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%index}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property integer $limit
 * @property integer $lgn_id
 * @property integer $order
 */
class Index extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%index}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['limit', 'lgn_id', 'order'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['type'], 'string', 'max' => 32],
            [['url'], 'string', 'max' => 255],
            ['img', 'string'],
            ['file', 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'type' => '类型',
            'limit' => '显示条数',
            'lgn_id' => '语言',
            'order' => '排序',
            'url' => '链接',
            'img' => '图片',
            'file' => '图片上传'
        ];
    }

    public $template = [
        1=>'模板1',
        2=>'模板2',
        3=>'模板3',
        4=>'模板4',
    ];

    public function dropRecomList() {
        return ArrayHelper::map(self::find()->asArray()->all(), 'id', 'name');
    }


    public function section($type) {
        // $cache = Yii::$app->cache;
        // $lgn = Yii::$app->language;
        // $key = 'section_' . $lgn;
        // if (!($nav = $cache->get($key))) {
        //     $id = $lgn=='zh-CN'?1:2;
        //     $nav = self::rootNavs($id);
        //     $cache->set($key, $nav);
        // }
        // return $nav;

        $lgn = Yii::$app->language;
        $lgn_id = $lgn=='zh-CN'?1:2;
        $module = array();
        $arr = self::find()->where(['lgn_id'=>$lgn_id, 'type'=>$type])->orderby('order')->asArray()->all();
        foreach ($arr as $k => $v) {
            $module[$k] = $this->tmplateModule($v, $lgn_id, $type); 
        }
        return $module;
    }

    public function tmplateModule($row, $lgn, $type = 1) {
        switch ($type) {
            case 1:
                 return [
                    'title' => $row['name'],
                    'more' => Yii::t('app', 'more'),
                    'url' => $row['url'],
                    'items' => [
                        [
                            'src' => $row['img'],
                            'alt' => $row['name'],
                            'items' => $this->items($row['id'], $lgn, $row['limit'])
                        ]
                    ]
                ];
            case 2:
                return [
                    'title' => $row['name'],
                    'more' => Yii::t('app', 'more'),
                    'url' => $row['url'],
                    'items' => [
                        [
                            'src' => $row['img'],
                            'alt' => $row['name'],
                            'p' => $this->itemsP($row['id'], $lgn, $row['limit'])
                        ]
                    ]
                ];
            case 3:
                return [
                    'title' => $row['name'],
                    'more' => Yii::t('app', 'more'),
                    'url' => $row['url'],
                    'items' => [
                        [
                            'src' => $row['img'],
                            'alt' => $row['name'],
                            'items' => $this->itemsNews($lgn, $row['limit'])
                        ]
                    ]
                ]; 
            case 4:
                return [
                    'title' => $row['name'],
                    'more' => Yii::t('app', 'more'),
                    'url' => $row['url'],
                    'items' => [
                        [
                            'src' => $row['img'],
                            'alt' => $row['name'],
                            'items' => $this->itemsProgram($lgn, $row['limit'])
                        ]
                    ]
                ];     

        }
       
    }

    public function itemsP($tmp_id, $lgn_id, $limit) {
        return \common\models\Product::indexItemsP($tmp_id, $lgn_id, $limit);
    }

    public function items($tmp_id, $lgn_id, $limit) {
        return \common\models\ProductCategory::indexItems($tmp_id, $lgn_id, $limit);
    }

    public function itemsNews($lgn_id, $limit) {
        return \common\models\News::indexItems($lgn_id, $limit);
    }

    public function itemsProgram($lgn_id, $limit) {
        return \common\models\Program::indexItems($lgn_id, $limit);
    }


}
