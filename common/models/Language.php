<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "whr_language".
 *
 * @property integer $id
 * @property string $name
 * @property string $des
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'whr_language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 64],
            [['des'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    static public function dropDownList() {
        $list = self::find()->asArray()->all();
        return ArrayHelper::map($list, 'id', 'des');
    }

    static public function findNameByID($pk) {
        $arr = self::find()->select('des')->where(['id'=>$pk])->asArray()->one();
        return $arr['des'];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'des' => 'Des',
        ];
    }
}
