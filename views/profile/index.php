<?
  
  $this->registerCssFile('web/css/profilePage.css', ['depends' => ['app\assets\AppAsset']]);
  use yii\widgets\ActiveForm;?>
      <div class="profileImage">
          <div class="bg">
                <div class="circle-border"></div>
                <? if ($user['URL']) { ?>
                    <img src="web/upload/<?=$user['URL']?>" class="circle_image">
                <?} else {?>
                    <img src="img/noPhoto.png">
                <?}?>
          </div>
          <p><?=$user['name']?> <?=$user['family']?></p>
      </div>

      <div class="yourRace">
          <span class="zag">Ваши рейсы</span>
          <? $fl_num = 0;
          if ($flight) {?>
          <? foreach($flight as $fl){?>
              <? if (time() < strtotime($fl['end'])) { ?>
                  <? $fl_num++;?>

          <div class="flight_box">
             <div class="flight">
              <div class="train_type">
                  <div class="train_img">
                      <img src="img/<?= $fl['id_train']['id_type']['pictures'] ?>" alt="train_pic">
                  </div>
                  <div class="train_txt">
                      <p><?= $fl['id_train']['id_type']['type'] ?></p>
                  </div>
              </div>
              <div class="pop_flight">
                  <div class="flight_info">
                      <p>Поезд <span class="black_txt">№<?= $fl['id_train']['nomber']?></span></p>
                      <span class="flight_time">
                          <p>Отправление</p>
                          <span class="red_txt"><?=date('d.m', strtotime($fl['start']));?> <?Init($fl['start']);?> <?=substr($fl['time_start'],0,-3);?> - <?=substr($fl['time_end'],0,-3);?> <?Init($fl['end']);?> <?=date('d.m', strtotime($fl['end']));?></span>
                          <p> Прибытие</p>
                      </span>
                      
                      <span class="flight_options_box">
                          <?= Icons($fl['id_train']['wifi'], $fl['id_train']['conditioner'], $fl['id_train']['animal']);?>
                      </span>
                      
                      <p>Цена от <span class="black_txt"><?=$fl['price']?> руб.</span></p>
                  </div> 
              </div>
             </div>
              <div class="pop_comment">
                  <? foreach ($comments[$fl['id_flight']] as $comment) {?>
                  
                  <div class="one_comment">
                      <? if ($comment['id_user']['URL']) { ?>
                          <img src="web/upload/<?= $comment['id_user']['URL'] ?>" class="circle_image">
                      <?} else {?>
                          <img src="img/noPhoto.png">
                      <?}?>
                      <p><?= $comment['id_user']['family'] ?> <?= $comment['id_user']['name'] ?></p>
                      <span class="comment_txt"><?=$comment['text']?></span>
                  </div>
                  <?}?>
                  <?$form = ActiveForm::begin(['id' => 'comment-form'.$fl['id_flight'],'options' => ['class' => 'new_comment']] )?>
                      <?=$form->field($comment_model, 'comment')->input('text', ['placeholder' => "Оставить комментарий...", 'id' => 'comments-comment'.$fl['id_flight']])->label(false);?>
                      <?=$form->field($comment_model, 'flight')->hiddenInput(['value' => $fl['id_flight'], 'id' => 'comments-flight'.$fl['id_flight']])->label(false);?>
                      <button type="submit" name="send" id="comment_btn<?=$fl['id_flight']?>">Отправить</button>
                  <?ActiveForm::end()?>
              </div>
          </div>
          <?} } 
        if($fl_num == 0) echo '<p class="error_txt">Нет рейсов</p>';
        }
        if($flight == null) echo '<p class="error_txt">Нет рейсов</p>';?>
        

      </div>

      <div class="historyRace">
          <span class="zag">История рейсов</span>
          <? $fl_num = 0; 
          if ($flight) {?>
          <? foreach($flight as $fl){?>

              <? if (time() > strtotime($fl['end'])) { ?>
                  <? $fl_num++;?>

          <div class="flight_box">
              <div class="flight">
               <div class="train_type">
                  <div class="train_img">
                      <img src="img/<?= $fl['id_train']['id_type']['pictures'] ?>" alt="train_pic">
                  </div>
                  <div class="train_txt">
                      <p><?= $fl['id_train']['id_type']['type'] ?></p>
                  </div>
               </div>
               <div class="pop_flight">
                  <div class="flight_info">
                      <p>Поезд <span class="black_txt">№<?= $fl['id_train']['nomber']?></span></p>
                      <span class="flight_time">
                          <p>Отправление</p>
                          <span class="red_txt"><?=date('d.m', strtotime($fl['start']));?> <?Init($fl['start']);?> <?=substr($fl['time_start'],0,-3);?> - <?=substr($fl['time_end'],0,-3);?> <?Init($fl['end']);?> <?=date('d.m', strtotime($fl['end']));?></span>
                          <p> Прибытие</p>
                      </span>
                      
                      <span class="flight_options_box">
                          <?= Icons($fl['id_train']['wifi'], $fl['id_train']['conditioner'], $fl['id_train']['animal']);?>
                      </span>
                      
                      <p>Цена от <span class="black_txt"><?=$fl['price']?> руб.</span></p>
                  </div> 
               </div>
              </div>
              <div class="pop_comment">
                  <? foreach ($comments[$fl['id_flight']] as $comment) {?>
                  <div class="one_comment">
                      <? if ($comment['id_user']['URL']) { ?>
                          <img src="web/upload/<?= $comment['id_user']['URL'] ?>" class="circle_image">
                      <?} else {?>
                          <img src="img/noPhoto.png">
                      <?}?>
                      <p><?= $comment['id_user']['family'] ?> <?= $comment['id_user']['name'] ?></p>
                      <span class="comment_txt"><?=$comment['text']?></span>
                  </div>
                  <?}?>
                  <?$form = ActiveForm::begin(['id' => 'comment-form'.$fl['id_flight'],'options' => ['class' => 'new_comment']] )?>
                      <?=$form->field($comment_model, 'comment')->input('text', ['placeholder' => "Оставить комментарий...", 'id' => 'comments-comment'.$fl['id_flight']])->label(false);?>
                      <?=$form->field($comment_model, 'flight')->hiddenInput(['value' => $fl['id_flight'], 'id' => 'comments-flight'.$fl['id_flight']])->label(false);?>
                      <button type="submit" name="send" id="comment_btn<?=$fl['id_flight']?>">Отправить</button>
                  <?ActiveForm::end()?>
              </div>
           </div>
          <?} } 
          if($fl_num == 0) echo '<p class="error_txt">Нет рейсов</p>';
        }
        if($flight == null) echo '<p class="error_txt">Нет рейсов</p>';?>

          
      </div>