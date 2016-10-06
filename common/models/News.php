<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $content
 * @property string $url
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $order
 * @property integer $lgn_id
 * @property integer $isrecom
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

      public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content'], 'string'],
            [['created_at', 'updated_at', 'order', 'lgn_id', 'type_id', 'isrecom'], 'integer'],
            [['name', 'desc'], 'string', 'max' => 128],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '新闻名称',
            'desc' => '描述',
            'content' => '内容',
            'url' => '地址',
            'type_id' => '类型',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'order' => '排序',
            'lgn_id' => '语言',
            'isrecom' => '是否首页推荐',
        ];
    }

    public function recomList() {
        return ['否', '是'];
    }

    public function typeList() {
        return [
            1 => '公司动态',
            2 => '公司新闻',
            3 => '公司行业',
            4 => '内部动态',
        ];
    }

    public function newsDetail($id) {
        return self::find()->where(['id'=>$id])->asArray()->one();
    }

    public function newsList($type) {
        return self::find()->select('updated_at, name, desc, id')->where(['type_id'=>$type])->asArray()->all();
    }

    static public function indexItems($lgn_id, $limit = 5) {
        $arr = self::find()->where(['isrecom'=>1, 'lgn_id'=>$lgn_id])->limit($limit)->asArray()->all();
        $items = array();
        foreach ($arr as $k => $v) {
            $items[$k]['label'] = $v['name'];
            $items[$k]['href'] = 'news/index';
            $items[$k]['id'] = $v['id'];
            $items[$k]['parent_id'] = $v['type_id'];
        }
        return $items;
    }

}
