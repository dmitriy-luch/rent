<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "inflation".
 *
 * @property integer $id
 * @property string $date
 * @property string $amount
 * @property integer $created_at
 * @property integer $updated_at
 */
class Inflation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inflation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount', 'date'], 'required'],
            [['amount'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
            [['date'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date' => Yii::t('app', 'Date'),
            'amount' => Yii::t('app', 'Amount'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    
    /**
    * @inheritdoc
    */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    
    public static function getSumInflation($startDate){
        $inflations = Inflation::find()->andWhere(['>', 'date', $startDate])->andWhere(['<', 'date', date('Y-m-d')])->all();
        $sum = 0;
        foreach($inflations as $inflation){
            //calculate inflation
        }
    }
}
