<?php

namespace yeesoft\eav\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%eav_attribute_type}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $store_type
 *
 * @property EavAttribute[] $eavAttributes
 */
class EavAttributeType extends \yii\db\ActiveRecord
{
    const STORE_TYPE_RAW = 'raw';
    const STORE_TYPE_OPTION = 'option';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%eav_attribute_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_type'], 'string'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yee', 'ID'),
            'name' => Yii::t('yee', 'Name'),
            'store_type' => Yii::t('yee/eav', 'Store Type'),
        ];
    }

    public static function getAttributeTypes()
    {
        $result = static::find()->all();
        return ArrayHelper::map($result, 'id', 'name');
    }

    public static function getStoreTypes()
    {
        return [
            self::STORE_TYPE_RAW => Yii::t('yee/eav', 'Raw'),
            self::STORE_TYPE_OPTION => Yii::t('yee/eav', 'Option'),
        ];
    }
}