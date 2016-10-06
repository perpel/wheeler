<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\Product;

/**
 * This is the model class for table "{{%product_category}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property integer $parent_id
 * @property integer $order
 * @property string $type
 * @property integer $lgn_id
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_id', 'order', 'lgn_id'], 'integer'],
            ['order', 'default', 'value' => 1],
            [['name'], 'string', 'max' => 128],
            [['url'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 64],
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
            'url' => 'Url',
            'parent_id' => '上级元素',
            'order' => '排序',
            'type' => '类型',
            'lgn_id' => '语言',
        ];
    }

    public function type() {
        return [
            'machine' => '车床',
            'automation' => '自动化'
        ];
    }

    static public function categoryList() {
        $list = self::find()->where('parent_id != 0')->asArray()->all();
        return ArrayHelper::map($list, 'id', 'name');
    }


    public function dropDownList() {
        $list = self::find()->asArray()->all();
        $cpt = ['0'=>'无'];
        return ArrayHelper::merge($cpt, ArrayHelper::map($list, 'id', 'name'));
    }

    public function productList($id) {
        return Product::findProductByCategory($id);
    }

    // public function findNameByID($pk) {
    //     $name = self::find()->select('name')->where(['id'=>$pk])->asArray()->one();
    //     return $name['name'];
    // }

    public function menus($type) {
        $cache = Yii::$app->cache;
        $lgn = Yii::$app->language;
        $key = 'product_category_' . $type . $lgn;
        //$cache->delete($key);
        if (!($nav = $cache->get($key))) {
            $id = $lgn=='zh-CN'?1:2;
            $nav = $this->rootNavs($id, $type);
            $cache->set($key, $nav);
        }
        return $nav;
    }

    public function flushCache($type) {
        Yii::$app->cache->delete($key = 'product_category_' . $type . 'zh-CN');
        Yii::$app->cache->delete($key = 'product_category_' . $type . 'en');
    }

    public function rootNavs($lgn, $type) {
        $nav = array();
        $root = self::find()->where(['parent_id'=>0,'lgn_id'=>$lgn, 'type'=>$type])->asArray()->all();
        foreach ($root as $k => $v) {
           $nav[$lgn][$k]['title'] = $v['name'];
           $nav[$lgn][$k]['elementID'] = $v['id'];
           $childNodes = self::find()->where(['parent_id'=>$v['id'], 'lgn_id'=>$lgn, 'type'=>$type])->orderby('parent_id')->asArray()->all();
           foreach ($childNodes as $_k => $_v) {
                $nav[$lgn][$k]['data'][$_k]['label'] = $_v['name'];
                $nav[$lgn][$k]['data'][$_k]['active'] = 'active';
                $nav[$lgn][$k]['data'][$_k]['url'] = [$_v['url'], 'id'=>$_v['id']];

                $_node = self::find()->where(['parent_id'=>$_v['id'], 'lgn_id'=>$lgn, 'type'=>$type])->orderby('parent_id')->asArray()->all();
                foreach ($_node as $key => $value) {
                    $nav[$lgn][$k]['data'][$_k]['items'][$key]['label'] = $value['name'];
                    $nav[$lgn][$k]['data'][$_k]['items'][$key]['active'] = '';
                    $nav[$lgn][$k]['data'][$_k]['items'][$key]['url'] = [$value['url'], 'id'=>$value['id']];
                }
           }
        }
        return $nav[$lgn];
    }

    public $rootIn = 1;

    public function getRootById($id) {
        $arr = self::find()->where(['id'=>$id])->asArray()->one();
        if ($arr['parent_id'] == 0) {
            $this->rootIn = $arr['id'];
        } else {
            $this->getRootById($arr['parent_id']);
        }
    }

    public function productDetail($id) {
        return Product::detail($id);
    }

    public function defaultCategory() {
        $lgn = Yii::$app->language=='zh-CN'?1:2;
        $arr = self::find()->where("lgn_id=$lgn AND parent_id != 0")->select('id')->orderby('order')->asArray()->one();
        return $arr['id'];
    }

    


}
