<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style/style.css">
<link rel="stylesheet" href="./style/bootstrap-grid.min.css">
    <title>BMWLAND</title>
</head>

<body>
<?php
session_start();
$arr=['3 Series','4 Series','5 Series','7 Series','8 Series','Z4','X5','X6','X7'];
?>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="topmenu">
                    <div class="left_topmenu">
                        <p><a href="#">О компании</a></p>
                        <p><a href="#">Условия оплаты и доставки</a></p>
                        <p><a href="#">Гарантия</a></p>
                        <p><a href="#">Вопрос-ответ</a></p>
                    </div>
                    <?php if(empty($_SESSION['user'])):?>
                    <div class="right_topmenu">
                        <p><a href="./login.php">Вход</a></p>
                        <p><a href="./registration.php">Регистрация</a></p>
                    </div>
                    <?php else:?>
                        <div class='right_topmenu' >
                        <p style='align-items: baseline;'><?=$_SESSION['user']?></p>
                        <p><a href='./src/actions/logout.php'>Выход</a></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
            <div class="container_logo">
                <div class="container_logo1">
                    <a href="./index.php"><img src="./accests/logo_bmw-logo-black-640x550.png" alt=""></a>
                </div>
                <div class="container_logo2">    
                    <a href="./index.php"><h1>BMWLAND</h1>
                    <p>Запчасти для BMW в Могилеве</p></a>
                </div>
            </div>
            </div>

            <div class="col-12 col-md-3 offset-md-1">
                <div class="main_phone">
                    <img src="./accests/phone.png" alt="">
                    <p><a href="#">+375 (29) 654-33-78</a></p>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <div class="order_button">
                    <a href="#" class="button">Заказать звонок</a>
                    <p>И мы перезвоним вам в течении 10 мин.</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="search_button">
                    <input class="search" type="search" placeholder="Поиск по сайту"><a href="#"><img src="./accests/search.png" alt=""></a>
                    <p>Например: стойка передняя е46</p>
                </div>
            </div>
            </div>
            
        </div>
    </div> 
</div>

<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_buttons">
                    <p><a href="./index.php">ГЛАВНАЯ</a></p>
            
                    <div class="dropdown">
                        <a class="dropbtn" href="./list.php"><p>КАТАЛОГ ЗАПЧАСТЕЙ</p></a>
                  
                    <div class="dropdown-content">
                      <a href="#">Амортизатор капота</a>
                      <a href="#">Амортизатор крышки багажника</a>
                      <a href="#">Амортизатор подвески</a>
                      <a href="#">Балка подвески задняя</a>
                      <a href="#">Балка подвески передняя (подрамник)</a>
                      <a href="#">Бардачок (вещевой ящик)</a>
                      <a href="#">Бачок омывателя</a>
                      <a href="#">Бачок расширительный</a>
                      <a href="#">Блок АБС, насос (ABS, ESP, ASR)</a>
                      <a href="#">Блок коммуникационный</a>
                    </div>
                    </div>
                  
                    <div class="dropdown">
                        <a class="dropbtn" href="./models.php"><p>ЗАПЧАСТИ ПО МОДЕЛЯМ</p></a>
                        <div class="dropdown-content">
                            <?php foreach($arr as $item):?>
                            <a href="./list.php?seria=<?=$item?>"><?=$item?></a>
                        <?php endforeach;?>
                        </div>
                    </div>
            
                    <p><a href="#">АКЦИИ</a></p>
                    <p><a href="#">НОВОСТИ</a></p>  
                    <div class="dropdown"><a class="dropbtn">
                    <p>НАШИ КОНТАКТЫ</p></a>
                    <div class="dropdown-content">
                    <a href="#">+375 (29) 654-33-78</a>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

<div class="models_calalog">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <p>КАТАЛОГ ПО МОДЕЛЯМ</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="models">
                    <a href="./list.php?seria=<?=$arr[0]?>"><img src="./accests/series3.png" alt=""></a>
                    <a href="#"><p>3 Series</p></a>
                </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="models">
                        <a href="./list.php?seria=<?=$arr[1]?>"><img src="./accests/series4.png" alt=""></a>
                        <a href="#"><p>4 Series</p></a>
                    </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="models">
                            <a href="./list.php?seria=<?=$arr[2]?>"><img src="./accests/series5.png" alt=""></a>
                            <a href="#"><p>5 Series</p></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="models">
                            <a href="./list.php?seria=<?=$arr[3]?>"><img src="./accests/series7.png" alt=""></a>
                            <a href="#"><p>7 Series</p></a>
                        </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="models">
                                <a href="./list.php?seria=<?=$arr[4]?>"><img src="./accests/series8.png" alt=""></a>
                                <a href="#"><p>8 Series</p></a>
                            </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="models">
                                    <a href="./list.php?seria=<?=$arr[5]?>"><img src="./accests/z4.png" alt=""></a>
                                    <a href="#"><p>z4</p></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="models">
                                    <a href="./list.php?seria=<?=$arr[6]?>"><img src="./accests/X5.png" alt=""></a>
                                    <a href="#"><p>X5</p></a>
                                </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="models">
                                        <a href="./list.php?seria=<?=$arr[7]?>"><img src="./accests/X6.png" alt=""></a>
                                        <a href="#"><p>X6</p></a>
                                    </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="models">
                                            <a href="./list.php?seria=<?=$arr[8]?>"><img src="./accests/X7.png" alt=""></a>
                                            <a href="#"><p>X7</p></a>
                                        </div>
                                    </div>
                    
                    
        </div>
    </div>
</div>





</body>
