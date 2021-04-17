<?php
$place = $_POST['order'];
$race = $_SESSION['race'];
if ($_SESSION['check'] != 1) {
    foreach ($race as $rac) {
        if ($rac['id_flight'] == $place['id_flight']) {
            $_SESSION['race_order'] = $rac;
            $_SESSION['check'] = 1;
        }
    }
}
$nomber = $_SESSION['race_order']['id_train'];
$nomber = $nomber['nomber'];


use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->registerCssFile('web/css/orderPage.css', ['depends' => ['app\assets\AppAsset']]);
?>
        <section>
            <h2>Данные о пассажире</h2>
            <div class ="row">
                <div class="details">
                    <p class="zag_p">Введите данные о пассажире</p>
                    <?$form = ActiveForm::begin(['id' => 'order_form', 'action' => 'payment', 'options' => ['class' => 'form-group']] )?>
                    <div class="row sex">
                        <span>Пол: </span>
                    <?=$form->field($model, 'radioButtonList')->radioList([
                        '1' => 'Мужчина',
                        '2' => 'Женщина',
                    ],['value' => 1])->label(false);?>
                    </div>
                    
                    <div class="all_input column">
                        <div class="row heig">
                            <?=$form->field($model, 'surname')->textInput()->label('Фамилия');?>
                            <?=$form->field($model, 'name')->textInput()->label('Имя');?>
                            <?=$form->field($model, 'name_father')->textInput()->label('Отчество');?>
                        </div>
                        <div class="row heig">
                            <?=$form->field($model, 'type_doc')->textInput()->label('Тип документа');?>
                            <?=$form->field($model, 'num_doc')->textInput()->label('Номер документа');?>
                            <?=$form->field($model, 'count_doc')->textInput()->label('Страна выдачи');?>
                        </div>
                        <div class="row heig">
                            <?=$form->field($model, 'email')->textInput()->label('Электронная почта');?>
                            <?=$form->field($model, 'num_call')->textInput()->label('Номер телефона');?>
                        </div>
                    </div>
                    
                    <?=$form->field($model, 'id_place')->hiddenInput(['value' => $place['id_place']])->label(false);?>
                    <?=$form->field($model, 'id_car')->hiddenInput(['value' => $place['id_car']])->label(false);?>
                    <?=$form->field($model, 'id_flight')->hiddenInput(['value' => $place['id_flight']])->label(false);?>
                    
                </div>
                <div class="column">
                    <div class="service column">
                        <p>Ваши рейсы</p>
                        
                        <?if ($_SESSION['race_order']['id_flight'] == $place['id_flight']) {
                            echo '<span>№ '.$nomber.'</span>';
                        }?>
                        
                        <span><?=$_SESSION['race_order']['from']?> -> <?=$_SESSION['race_order']['to']?></span>
                    </div>
                    <div class="service_price row">
                        <p>Сумма к оплате:</p>
                        <span><?=$_SESSION['race_order']['price']?> руб.</span>
                    </div>
                </div>
            </div>
            <div class="payment_method">
                <p class="zag_p">Выберите способ оплаты</p>
            </div>
            <div class="row input_s">
                <div class="total row">
                    <p class="zag_p">Общая сумма к оплате</p>
                    <div class="total_summ"><span><?=$_SESSION['race_order']['price']?> руб.</span></div>
                </div>
                <button type="submit" id="go_to_pay">Оплатить</button>
                <?ActiveForm::end();?>
            </div>
        </section>
