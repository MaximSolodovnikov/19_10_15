<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
            <meta name="keywords" content="" />
            <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/style.css" />
            <title>Login Admin panel</title>
    </head>
    <body>
        <div class="login_admin">
            <div class="error"></div><br />
            <form method="POST" action="">
                <label>Логин:</label><div class="error"></div><br />
                <input type="text" name="username" placeholder="Введите логин" value=""><br /><br />
                <label>Пароль:</label><div class="error"></div><br />
                <input type="password" name="pswd" placeholder="Введите пароль" value=""><br /><br />
                <input type="submit" class="btn btn-info" name="enter" value="Вход">
            </form>
        </div>
    </body>
</html>