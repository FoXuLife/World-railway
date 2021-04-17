<?$this->registerCssFile('web/css/login.css');
$this->registerCssFile('web/css/menu.css');
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
        <div class="form_container">
            <div class="form_bg_img">
                <img src="img/form_bg.jpg" alt="">
            </div> 
             <div class='login_form'>
                <h2>Регистрация в
                    <span class="green_txt_login">World</span> Railway
                </h2>
                <?$form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'form-group', 'enctype' => 'multipart/form-data']])?>
                    <?=$form->field($model, 'family')->textInput(['autofocus' => true])->input('Family', ['placeholder' => "Фамилия", 'class' => 'family_input'])->label(false);?>

                    <?=$form->field($model, 'name')->textInput()->input('name', ['placeholder' => "Имя"])->label(false);?>

                    <?=$form->field($model, 'name_f')->textInput()->input('name_f', ['placeholder' => "Отчество"])->label(false);?>

                    <?=$form->field($model, 'email')->input('email', ['placeholder' => "Email"])->label(false);?>

                    <?=$form->field($model, 'password')->passwordInput(['placeholder' => "Пароль"])->label(false);?>

                    <?=$form->field($model, 'password_repeat')->passwordInput(['placeholder' => "Повторите пароль"])->label(false);?>

                    <?=$form->field($model, 'URL')->fileInput([])->label(false);?>

                    <button type="submit" name="registry" id="login_btn" class="login_lbl">Регистрация</button>

                <?ActiveForm::end();?>
            </div>      
        </div>
