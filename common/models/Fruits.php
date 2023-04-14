<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fruits".
 *
 * @property int $id
 * @property int $fruit_id
 * @property string|null $name
 * @property string|null $family
 * @property string|null $order
 * @property string|null $genus
 * @property float|null $nut_calories
 * @property float|null $nut_fat
 * @property float|null $nut_sugar
 * @property float|null $nut_carbohydrates
 * @property float|null $nut_protein
 * @property int $added_fav
 */
class Fruits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fruits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fruit_id'], 'required'],
            [['fruit_id'], 'integer'],
            [['nut_calories', 'nut_fat', 'nut_sugar', 'nut_carbohydrates', 'nut_protein'], 'number'],
            [['name', 'family', 'order', 'genus','added_fav'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fruit_id' => Yii::t('app', 'Fruit ID'),
            'name' => Yii::t('app', 'Name'),
            'family' => Yii::t('app', 'Family'),
            'order' => Yii::t('app', 'Order'),
            'genus' => Yii::t('app', 'Genus'),
            'nut_calories' => Yii::t('app', 'Calories'),
            'nut_fat' => Yii::t('app', 'Fat'),
            'nut_sugar' => Yii::t('app', 'Sugar'),
            'nut_carbohydrates' => Yii::t('app', 'Carbohydrates'),
            'nut_protein' => Yii::t('app', 'Protein'),
			 'added_fav' => Yii::t('app', 'Favourite'),
        ];
    }
}
