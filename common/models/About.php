<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%about}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property string $content
 * @property integer $order
 * @property integer $lgn_id
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%about}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content'], 'string'],
            [['order', 'lgn_id', 'type_id'], 'integer'],
            [['name', 'desc'], 'string', 'max' => 128],
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
            'desc' => '描述',
            'content' => '内容',
            'order' => '排序',
            'lgn_id' => '语言',
            'type_id' => '类型'
        ];
    }

    public function type() {
        return [
            1 => '公司介绍',
            2 => '企业文化',
            3 => '我们的优势',
            4 => '市场与营销',
            5 => '产品与解决方案',
            6 => '企业品牌',
            7 => '社会责任',
            8 => '地理位置',
            9 => '招聘信息',
            10 => '大事记'
        ];
    }

    static public function findByType($type) {
        return self::find()->where(['type_id'=>$type])->asArray()->one();
    }

}
