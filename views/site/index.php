<?php
use yii\helpers\Url;
$_SESSION['check'] = 0;
?>

    <div class="search">
        <h1>Поиск ЖД билетов</h1>
        <form method="GET" id="search" action="race">
                <!-- <label for="from" id="lab_from">Откуда</label> -->
                <input type="text" name="from" placeholder="Откуда" id="from">

                <img src="img/arrows.svg" alt="arrows">

                <!-- <label for="to" id="lab_to">Куда</label> -->
                <input type="text" name="to" placeholder="Куда" id="to">

                <!-- <label for="when_start" id="lab_when_start">Дата туда</label> -->
                <input type="date" name="when_start" id="when_start">

                <!-- <label for="when_back" id="lab_when_back">Дата обратно</label> -->
                <input type="date" name="when_back" id="when_back" disabled>

                <input type="submit" value="Найти">
        </form>
    </div>

    <container class="newsCont">
            <h2>Наши новости</h2>
            <div class="row">
                <div class="newsOne new" >
                    <div class="column">
                        <span>#поезда</span>
                        <p><a href="">Новые поезда уже рядом...</a></p>
                        <span><a href="">Читать далее -></a></span>
                    </div>
                </div>
                <div class="column">
                    <div class="row">
                        <div class="newsTwo new">
                            <div class="column blure">
                                <span>#поезда</span>
                                <p><a href="">Старые поезда!?<br>Мода...</b></r></a></p>
                                <span><a href="">Читать далее -></a></span>
                            </div>
                        </div>
                        <div class="newsThree new">
                            <div class="column">
                                <span>#смысл_жизни</span>
                                <p><a href="">Тонели как смысл жизни...<br>Так ли это?</b></r></a></p>
                                <span><a href="">Читать далее -></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="newsFour new">
                        <div class="column blure">
                            <span>#виды</span>
                            <p><a href="">Красивые виды из окон поезда...</b></r></a></p>
                            <span><a href="">Читать далее -></a></span>
                        </div>
                    </div>
                </div>
            </div>
    </container>

