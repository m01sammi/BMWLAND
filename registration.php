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
require_once('./src/helpers.php')
?>
<body>
  <div class="cell">
    <input type="checkbox" id="check">
    <div class="registration form">
        <header>Регистрация</header>
        <form action="./src/actions/register.php" method='post'>
          <input type="text" id="name" name="name" placeholder="Введите логин" <?php isset($_SESSION['validation']['name']) ? 'aria-invalid="true"' : '' ?>>
          <?php if (hasValidationError('name')) : ?>

          <?php echo $_SESSION['validation']['name'] ?>
          <?php endif ?>
          <input type="email" id="email" name="email" placeholder="Введите почту" <?php isset($_SESSION['validation']['email']) ? 'aria-invalid="true"' : '' ?>>
          <?php if(hasValidationError('email')): ?>
       
          <?php echo $_SESSION['validation']['email'] ?>
          <?php endif ?>
          <input type="password" id="password" name="password" placeholder="Введите пороль">
          <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пороль" <?php isset($_SESSION['validation']['password']) ? 'aria-invalid="true"' : '' ?>>
          <?php if(hasValidationError('password')): ?>
       
        <?php echo $_SESSION['validation']['password'] ?>
        <?php endif ?>
          <input type="submit" class="button" value="Регистрация">
          
        </form>
        <div class="signup">
          <span class="signup">У вас уже есть аккаунт?
           <a for="check" href="./login.php">Войти</a>
          </span>
        </div>
      </div>
    
  </div>
</body>
</html>
<?php clearValidation() ?>