<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "configs".
 *
 * @property integer $id
 * @property string $title
 * @property string $skey
 * @property string $value
 * @property string $created_at
 * @property string $updated_at
 */
class Configs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'configs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'skey'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'skey' => Yii::t('app', 'Skey'),
            'value' => Yii::t('app', 'Value'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return ConfigsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConfigsQuery(get_called_class());
    }


    public function beforeSave($insert){
        if(parent::beforeSave(parent::EVENT_BEFORE_INSERT)){ if($this -> isNewRecord){ $this -> created_at = new Expression('now()'); } }
         $this -> updated_at = new Expression('now()');
        return true;
    }
    
}


