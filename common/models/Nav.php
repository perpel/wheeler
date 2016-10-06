<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "whr_nav".
 *
 * @property integer $id
 * @property string $name
 * @property string $parent_id
 * @property integer $lgn_id
 * @property string $url
 * @property string $des
 */
class Nav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'whr_nav';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'lgn_id'], 'required'],
            [['lgn_id', 'order'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['parent_id'], 'string', 'max' => 32],
            [['url', 'des'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '导航名称',
            'parent_id' => '父元素',
            'lgn_id' => '语言',
            'url' => '链接',
            'des' => '描述',
            'order' => '排序'
        ];
    }

    static public function dropDownList() {
        $list = self::find()->asArray()->all();
        $cpt = ['0'=>'无'];
        return ArrayHelper::merge($cpt, ArrayHelper::map($list, 'id', 'name'));
    }

    static public function findNameByID($pk) {
        $name = self::find()->select('name')->where(['id'=>$pk])->asArray()->one();
        return $name['name'];
    }

    static public function menus() {
        $cache = Yii::$app->cache;
        $lgn = Yii::$app->language;
        $key = 'nav_' . $lgn;
        if (!($nav = $cache->get($key))) {
            $id = $lgn=='zh-CN'?1:2;
            $nav = self::rootNavs($id);
            $cache->set($key, $nav);
        }
        $nav[] = Yii::t('app', 'menuLgn');
        return $nav;
    }

    static public function rootNavs($lgn) {
        $nav = array();
        $nav[$lgn] = array();
        $root = self::find()
        ->where(['parent_id'=>0,'lgn_id'=>$lgn])
        ->OrderBy(['order'=>SORT_DESC])
        ->asArray()->all();
        foreach ($root as $k => $v) {
           $nav[$lgn][$k]['label'] = $v['name'];
           $url = explode("/", $v['url']);
           if (count($url) != 2) {
                $nav[$lgn][$k]['url'] = $v['url'];
           } else {
                $nav[$lgn][$k]['url'] = [$v['url']];
           }
           self::items($nav[$lgn][$k], $v['id'], $lgn);
        }
        return $nav[$lgn];
    }

    static public function items(&$par, $id, $lgn) {
        $list = self::find()
        ->where(['parent_id'=>$id,'lgn_id'=>$lgn])
        ->OrderBy(['order'=>SORT_DESC])
        ->asArray()->all();
        foreach ($list as $k => $v) {
            $par['items'][$k]['label'] = $v['name'];
            $url = explode("/", $v['url']);
            if (count($url) != 2) {
                $par['items'][$k]['url'] = $v['url'];
            } else {
                $par['items'][$k]['url'] = [$v['url']];
            }
            self::items($par['items'][$k], $v['id'], $lgn);
        }
    }
}
