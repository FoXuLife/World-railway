<?
    session_start();
    $_SESSION['race'] = $race;
    $_SESSION['check'] = 0;

?>
        <div class="search">
            <h1>Поиск ЖД билетов</h1>
            <form method="GET" id="search">
                <!-- <label for="from" id="lab_from">Откуда</label> -->
                <input type="text" name="from" placeholder="Откуда" id="from">

                <img src="img/arrows.svg" alt="arrows">

                <!-- <label for="to" id="lab_to">Куда</label> -->
                <input type="text" name="to" placeholder="Куда" id="to">

                <!-- <label for="when_start" id="lab_when_start">Дата туда</label> -->
                <input type="date" name="when_start" id="when_start">

                <!-- <label for="when_back" id="lab_when_back">Дата обратно</label> -->
                <input type="date" name="when_back" id="when_back"  disabled>

                <input type="submit" value="Найти">
            </form>
        </div>

        <div class="pop">
            <h2>Результаты поиска</h2>
        <?if ($race == null) {
            echo '<h2>По данному запросу билетов не найденно</h2>';
        } else {
        foreach ($race as $rac) {?>
            <div class="flight_box">
                <div class="train_type">
                    <div class="train_img">
                        <img src="img/<?=$rac->id_train['id_type']['pictures']?>" alt="train_pic">
                    </div>
                    <div class="train_txt">
                        <p><?=$rac->id_train['id_type']['type']?></p>
                    </div>
                </div>
                <form method="get" action="ticket">
                <button class="button_flight">
                <div class="pop_flight">
                    <div class="flight_info">
                        <p>Поезд <span class="black_txt"><?=$rac->id_train['nomber']?></span></p>
                        <span class="flight_time">
                            <p>Отправление</p>
                            <span class="red_txt"><?=date('d.m', strtotime($rac->start));?> <?Init($rac->start);?> <?=substr($rac->time_start,0,-3);?> - <?=substr($rac->time_end,0,-3);?> <?Init($rac->end);?> <?=date('d.m', strtotime($rac->end));?></span>
                            <p> Прибытие</p>
                        </span>
                        
                        <span class="flight_options_box">
                            <?Icons($rac->id_train['wifi'],$rac->id_train['conditioner'],$rac->id_train['animal']);?>
                        </span>
                        <p>Цена от <span class="black_txt"><?=$rac->price?> руб.</span></p>
                    </div>

                </div>
                <input type="hidden" value="<?=$rac['id_flight']?>" id="id_flight<?=$rac['id_flight']?>" name="id_flight">
                
                </button name="button">
                
                </form>
            </div>
            
        <?
        }
        } ?>

</div>