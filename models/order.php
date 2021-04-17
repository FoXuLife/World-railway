<?php
namespace app\models;
use yii\base\Model;


class order extends Model {
    
    public $id_place;
    public $id_car;
    public $id_flight;

    public $surname;
    public $name;
    public $name_father;
    public $id_user;
    public $type_doc;
    public $num_doc;
    public $num_call;
    public $count_doc;
    public $radioButtonList;
    public $email;
    public $material_type;

    public function rules()
    {
        return[
            [['surname','name','name_father','email','type_doc','num_doc','num_call','count_doc','radioButtonList'],'required','message'=>'Это поле должно быть заполнено'],
            ['num_call', 'number', 'message'=>'11 символов дибил'],
            ['email','email','message'=>'Не правильно введен Email'],
        ];
    }
    public function order() {
        $order = new reserved();
        $order->id_flight = $this->id_flight;
        $order->id_car = $this->id_car;
        $order->id_place = $this->id_place;
        $order->email = $this->email;
        $order->id_user = $this->id_user;
        $order->surname = $this->surname;
        $order->name = $this->name;
        $order->name_father = $this->name_father;
        $order->type_doc = $this->type_doc;
        $order->num_doc = $this->num_doc;
        $order->num_call = $this->num_call;
        $order->count_doc = $this->count_doc;
        $order->sex = $this->radioButtonList;
        return $order->save();
    }
}
?>