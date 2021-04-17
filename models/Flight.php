<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flight".
 *
 * @property int $id_flight
 * @property int $id_train
 * @property int $price
 * @property string $start
 * @property string $time_start
 * @property string $time_end
 * @property string $end
 * @property int $start-end
 * @property int $from
 * @property int $to
 *
 * @property Comments[] $comments
 * @property Town $from0
 * @property Reserved[] $reserveds
 * @property Town $to0
 * @property Train $train
 */
class Flight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_train', 'price', 'start', 'time_start', 'time_end', 'end', 'start-end', 'from', 'to'], 'required'],
            [['id_train', 'price', 'start_end', 'from', 'to'], 'integer'],
            [['start', 'time_start', 'time_end', 'end'], 'safe'],
            [['id_train'], 'exist', 'skipOnError' => true, 'targetClass' => Train::className(), 'targetAttribute' => ['id_train' => 'id_train']],
            [['from'], 'exist', 'skipOnError' => true, 'targetClass' => Town::className(), 'targetAttribute' => ['from' => 'id_town']],
            [['to'], 'exist', 'skipOnError' => true, 'targetClass' => Town::className(), 'targetAttribute' => ['to' => 'id_town']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_flight' => 'Id Flight',
            'id_train' => 'Id Train',
            'price' => 'Price',
            'start' => 'Start',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'end' => 'End',
            'start_end' => 'Start End',
            'from' => 'From',
            'to' => 'To',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['id_flight' => 'id_flight']);
    }

    /**
     * Gets query for [[From0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFrom0()
    {
        return $this->hasOne(Town::className(), ['id_town' => 'from']);
    }

    /**
     * Gets query for [[Reserveds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReserveds()
    {
        return $this->hasMany(Reserved::className(), ['id_flight' => 'id_flight']);
    }

    /**
     * Gets query for [[To0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTo0()
    {
        return $this->hasOne(Town::className(), ['id_town' => 'to']);
    }

    /**
     * Gets query for [[Train]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrain()
    {
        return $this->hasOne(Train::className(), ['id_train' => 'id_train']);
    }
}
