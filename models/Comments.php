<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Comments extends ActiveRecord {

    public $comment;
    public $user;
    public $flight;

    public static function tableName() {
        return 'comments';
    }

    public function getComment() {
        $com_model = new Comments();

        $com_model->text = $this->comment;
        $com_model->id_user = $this->user;
        $com_model->id_flight = $this->flight;

        return $com_model->save();
    }
}