<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%banner}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $src
 * @property string $alt
 * @property integer $order
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%banner}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['order'], 'integer'],
            ['order', 'default', 'value'=>1],
            [['name', 'alt'], 'string', 'max' => 128],
            [['src'], 'string', 'max' => 255],
            [['lgn_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '轮播名称',
            'src' => '链接地址',
            'alt' => '备注',
            'order' => '排序',
            'lgn_id' => '语言'
        ];
    }

    public function zh_CN() {
        $banner = self::find()
        ->select('src, alt')
        ->where(['lgn_id'=>1])->orderby('order')->all();
        Yii::$app->cache->set('banner_' . Yii::$app->language, $banner);
        return $banner;
    }

    public function en() {
        $banner = self::find()
        ->select('src, alt')
        ->where(['lgn_id'=>2])->orderby('order')->all();
        Yii::$app->cache->set('banner_' . Yii::$app->language, $banner);
        return $banner;
    }

    public function bannerInfo() {
        $cache = Yii::$app->cache;
        $key = 'banner_' . Yii::$app->language;
        if ($banner = $cache->get($key)) {
            return $banner;
        }
        switch (Yii::$app->language) {
            case 'zh-CN':
                return $this->zh_CN();
                break;
            case 'en':
                return $this->en();
                break;
        }
    }

}
