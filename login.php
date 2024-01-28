</html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BMWLAND</title>
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="./style/bootstrap-grid.min.css">
</head>
<?php
require_once('./src/helpers.php');?>

<body>
  <div class="cell">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Войти</header>
      <form action="./src/actions/login.php" method='post'>
        <label for="name">
            Логин: 
            <input type="text" id="name" name="name" placeholder="Введите логин" >
    

        </label>
        <label for="password_confirm">
            Пароль :
            <input type="password" id="password" name="password" placeholder="Пароль" >
          
        </label>
        <?php if (hasMessange('error')) : ?>
            <div class="notice_error">
              <span style="color: red;"><?php echo getMessange('error') ?></span>
                
            </div>
        <?php endif; ?>
        <input type="submit" class="button" value="Войти">
      </form>
      <div class="signup">
        <span class="signup">Нет аккаунта?
         <a for="check" href="./registration.php">Регистрация</a>
        </span>
      </div>
    </div>
    
  </div>
</body>
</html>