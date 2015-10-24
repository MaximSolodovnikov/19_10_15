<div class="left">
    <form class="form-horizontal" method="POST" action="">
          <div class="control-group">
            <label class="control-label" >Логин:</label>
            <div class="controls"><div class="error"><?=form_error('username');?></div>
              <input type="text" name="username" placeholder="Логин">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Пароль:</label>
            <div class="controls"><div class="error"><?=form_error('pswd');?></div>
                <input type="password" name="pswd" placeholder="Пароль">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Пароль(повтор):</label>
            <div class="controls"><div class="error"><?=form_error('pswd2');?></div>
              <input type="password" name="pswd2" placeholder="Пароль(повтор)">
            </div>
          </div>       
          <div class="control-group">
            <div class="controls">
               <label>Введите символы с картинки</label><div class="error"><?=form_error('captcha');?></div>
                <div class="captcha"><?=$captcha;?></div>&nbsp;&nbsp;<input class="input-small" type="text" name="captcha" ><br /><br />
                <input type="submit" class="btn btn-info" name="register" value="Зарегистрироваться">
            </div>
          </div>
        </form>
</div>    