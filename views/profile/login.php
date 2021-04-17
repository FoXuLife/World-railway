<?
$this->registerCssFile('web/css/login.css');
$this->registerCssFile('web/css/menu.css');
use yii\widgets\ActiveForm;
?>

        <div class="form_container">
            <div class="form_bg_img">
                <img src="img/form_bg.jpg" alt="">
            </div>
            <div class="login_form">
            <h2>Добро пожаловать в<br>
                <?$form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'form-group ']] )?>
                    <span class="green_txt_login">World</span> Railway</h2>

                    <?=$form->field($login_model, 'email')->input('email', ['placeholder' => "Email"])->label(false);?>

                    <?=$form->field($login_model, 'password')->passwordInput(['placeholder' => "Пароль"])->label(false);?>

                    <button type="submit" name="Join" id="login_btn" class="login_lbl ns">Войти</button>
                <?ActiveForm::end();?>
                    <a href="#" class="green_txt_login" id="forget_pass_txt">Забыли пароль?</a>

                    <p id="go_to_registry">Вы еще не с нами? 
                        <a href="signup" class="green_txt_login">Регистрация</a>
                    </p>

                    <div class="form_logo">
                        <img src="img/logo.png" >
                        <p><span class="green_txt_login">World</span> railway</p>
                    </div>
                
            </div>

        </div>