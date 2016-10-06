<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $url
 * @property integer $type_id
 * @property integer $order
 * @property string $content
 * @property integer $lgn_id
 */
class Product extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['type_id', 'order', 'lgn_id', 'recom_id'], 'integer'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 128],
            [['desc', 'url'], 'string', 'max' => 255],
            ['img', 'string'],
            ['img', 'default', 'value'=>'default.jpg'],
            [['file'], 'file'],
            ['order', 'default', 'value'=>1]
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
            'img' => '图片',
            'desc' => '描述',
            'url' => '链接',
            'type_id' => '所属分类',
            'order' => '排序',
            'content' => '内容',
            'lgn_id' => '语言',
            'file' => '上传',
            'recom_id' => '首页推荐'
        ];
    }

    static public function findProductByCategory($id) {
       return self::find()->where(['type_id'=>$id])->orderby('order DESC')->asArray()->all();
    }

    static public function detail($id) {
        return self::find($id)->asArray()->one();
    }


    static public function indexItems($tmp_id, $lgn_id, $limit = 5) {
        $arr = self::find()->where(['recom_id'=>$tmp_id, 'lgn_id'=>$lgn_id])->limit($limit)->asArray()->all();
        $items = array();
        foreach ($arr as $k => $v) {
            $items[$k]['label'] = $v['name'];
            $items[$k]['href'] = $v['url'];
            $items[$k]['id'] = $v['id'];
            $items[$k]['parent_id'] = $v['type_id'];
        }
        return $items;
    }

    static public function indexItemsP($tmp_id, $lgn_id, $limit = 5) {
        $arr = self::find()->where(['recom_id'=>$tmp_id, 'lgn_id'=>$lgn_id])->limit($limit)->asArray()->one();
        return $arr['desc'];
    }

    public function dropDecomList() {
        $list = \common\models\Index::find()->asArray()->all();
        $cpt = ['0'=>'无'];
        return ArrayHelper::merge($cpt, ArrayHelper::map($list, 'id', 'name'));
    }

    
}
