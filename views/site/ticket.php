<?
session_start();
use yii\widgets\ActiveForm;

$this->registerJsFile('web/js/ticket.js');

$race = $_SESSION['race'];
$_SESSION['check'] = 0;
?>

        <h1>Выбор вагона</h1>
<? for ($i=1; $i<=10; $i++) {
    
    foreach ($race as $rac) {
        if ($rac['id_flight'] == $id) {
    ?>
        <div class="flight_box">
            <div class="train_type tran transition" id="t_block<?=$i?>"   onclick="active('block<?=$i?>');">
                <div class="train_img">
                    <img src="img/<?=$rac->id_train['id_type']['pictures']?>" alt="train_pic">
                </div>
                <div class="train_txt">
                    <p>Вагон <?=$i?></p>
                </div>
            </div>
            <div class="pop_flight column transition"  id="block<?=$i?>">
                <div class="flight_info  mr">
                    <p>Поезд <span class="black_txt">№ <?=$rac->id_train['nomber']?></span></p>
                    <span class="flight_time">
                        <p>Отправление</p>
                        <span class="green_txt mr-tp-lf"><?Init($rac->start);?> <?=substr($rac->time_start,0,-3);?> - <?=substr($rac->time_end,0,-3);?> <?Init($rac->end);?></span>
                        <p> Прибытие</p>
                    </span>
                    
                    <span class="flight_options_box">
                        <?Icons($rac->id_train['wifi'],$rac->id_train['conditioner'],$rac->id_train['animal']);?>
                    </span>
                    
                    <p>Цена от <span class="black_txt"><?=$rac->price?> руб.</span></p>
                </div>
                <div class="van_info">
                    <img src="img/Поезд.png" alt="">

                    <?$form = ActiveForm::begin(['id' => 'place_form'.$i, 'action' => 'order', 'options' => ['class' => 'form-group']] )?>
                        <div class="choose_place">
                            <p>Выбор места:</p>
                            <div class="place">
                                <?$k = checkPlace($i, $place);?>
                                <?=$form->field($model, 'id_place')->dropDownList($k, ['id' => 'order-id_place'.$i])->label('верхние - четные; нижние - не чётные');?>
                                <?=$form->field($model, 'id_car')->hiddenInput(['value' => $i, 'id' => 'order-id_car'.$i])->label('');?>
                                <?=$form->field($model, 'id_flight')->hiddenInput(['value' => $id, 'id' => 'order-id_flight'.$i])->label('');?>
                                <p>от <span class="green_txt"><?=$rac->price?> руб.</span></p>
                            </div> 
                        </div>
                        <div class="pay">
                            <p class="grey_txt">На следующем шаге нужно будет заполнить данные о пассажире и произвести оплату</p>
                            <button type="submit" id="go_to_pay<?=$i?>" class="submit_lbl pad">Далее</button>
                        </div>
                </div>
                    <?ActiveForm::end();?>
            </div>
        </div>
<?} } }?>
