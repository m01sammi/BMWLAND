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

<section id="sort">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="searching">
                    <div class="tittle">
                    <h2>ОРИГИНАЛЬНЫЕ Б/У ЗАПЧАСТИ</h2>
                    <h1>ДЛЯ BMW</h1>
                    <p>В Могилеве</p>
                    </div>
                    <div class="catalogsearch">
                    <p>Воспользуйтесь быстрым поиском!</p>
                    <div class="buttons">
                        <select>
                            <option>Кузов</option>
                            <?php foreach($arr as $item):?>
                            <option><a href="./list.php?seria=<?=$item?>"><?=$item?></a></option>
                        <?php endforeach;?>
                    
                        </select>
                    
                        <select>
                            <option>Год</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>

                        </select>
                    
                        <select>
                            <option>Запчасть</option>
                            <option>Амортизатор капота</option>
                            <option>Амортизатор крышки багажника</option>
                            <option>Амортизатор подвески</option>
                            <option>Балка подвески задняя</option>
                            <option>Балка подвески передняя (подрамник)</option>
                            <option>Бардачок (вещевой ящик)</option>
                            <option>Бачок омывателя</option>
                            <option>Бачок расширительный</option>
                            <option>Блок АБС, насос (ABS, ESP, ASR)</option>
                            <option>Блок коммуникационный</option>
                        </select>
                    </div>
                    </div>
                    <div class="button_catalogsearch">
                        <a href="./list.php">ПОИСК В КАТАЛОГЕ</a>
                    </div>
                </div>
            </div> 
        </div>
        <div class="car">
            <img src="./accests/bmw.png" alt="">
        </div>
    </div>
</section>

<div class="function">
    <div class="container">  
        <div class="row"> 
            <div class="col-12 col-md-3">
                <div class="block_function">
                    <img src="./accests/delivery.png" alt="">
                    <p>Доставка по Могилеву и всей Беларуси службой доставки</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="block_function">
                    <img src="./accests/warehouse.png" alt="">
                <p>Собственный склад с постоянным налицием популярных запчастей</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="block_function">
                    <img src="./accests/helpsearching.png" alt="">
                <p>Выезд и диагностика поломки по Могилеву - стоимость от 10 руб.</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="block_function">
                    <img src="./accests/safety.png" alt="">
                    <p>100% гарантия, что все запчасти абсолютно в рабочем состоянии</p>
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="new">
    <div class="container">
        <div class="row">
            <h3>ПОСЛЕДНЕЕ ПОСТУПЛЕНИЕ</h3>
        </div>
    </div>
</div>

<div class="new_offers">
    <div class="container">
        <div class="row">
            
                <div class="col-lg-2 col-sm-6">
                
                    <div class="offers">
                        <img src="./accests/1449945742697-400x400.png" alt="">
                        <h3>Блок комфорта</h3>
                        <div class="model_price">
                            <p class="model">Блок комфорта, GM3</p>
                        </div>
                        <p class="fits">Подойдет для: 5 Е39 1995-2003, 7 Е38 1994-2001</p>
                        <p class="price">Цену уточняйте</p>
                        <a href="#" class="claim">
                            <img src="./accests/buy-w.png" alt="">
                            <p>ПОДРОБНЕЕ</p>
                        </a>
                        <div class="click">
                            <img src="./accests/telegram.png" alt="">
                            <p><a href="#">Купить в один клик</a></p>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-2 col-sm-6">
                
                    <div class="offers">
                    <img src="./accests/1449945742697-400x400.png" alt="">
                    <h3>Блок комфорта</h3>
                    <div class="model_price">
                        <p class="model">Блок комфорта, GM3</p>
                    </div>
                    <p class="fits">Подойдет для: 5 Е39 1995-2003, 7 Е38 1994-2001</p>
                    <p class="price">Цену уточняйте</p>
                    <a href="#" class="claim">
            
                        <img src="./accests/buy-w.png" alt="">
                        <p>ПОДРОБНЕЕ</p>
                    </a>
                    <div class="click">
                        <img src="./accests/telegram.png" alt="">
                        <p><a href="#">Купить в один клик</a></p>
                    </div>
                </div>
                </div>
                
                <div class="col-lg-2 col-sm-6">
                
                    <div class="offers">
                    <img src="./accests/1449945742697-400x400.png" alt="">
                    <h3>Блок комфорта</h3>
                    <div class="model_price">
                        <p class="model">Блок комфорта, GM3</p>
                    </div>
                    <p class="fits">Подойдет для: 5 Е39 1995-2003, 7 Е38 1994-2001</p>
                    <p class="price">Цену уточняйте</p>
                    <a href="#" class="claim">
            
                        <img src="./accests/buy-w.png" alt="">
                        <p>ПОДРОБНЕЕ</p>
                    </a>
                    <div class="click">
                        <img src="./accests/telegram.png" alt="">
                        <p><a href="#">Купить в один клик</a></p>
                    </div>
                </div>
                </div>
                

                
                <div class="col-lg-2 col-sm-6">
                
                    <div class="offers">
                    <img src="./accests/1449945742697-400x400.png" alt="">
                    <h3>Блок комфорта</h3>
                    <div class="model_price">
                        <p class="model">Блок комфорта, GM3</p>
                    </div>
                    <p class="fits">Подойдет для: 5 Е39 1995-2003, 7 Е38 1994-2001</p>
                    <p class="price">Цену уточняйте</p>
                    <a href="#" class="claim">
            
                        <img src="./accests/buy-w.png" alt="">
                        <p>ПОДРОБНЕЕ</p>
                    </a>
                    <div class="click">
                        <img src="./accests/telegram.png" alt="">
                        <p><a href="#">Купить в один клик</a></p>
                    </div>
                </div>
                </div>
                

                
                <div class="col-lg-2 col-sm-6">
                
                    <div class="offers">
                    <img src="./accests/1449945742697-400x400.png" alt="">
                    <h3>Блок комфорта</h3>
                    <div class="model_price">
                        <p class="model">Блок комфорта, GM3</p>
                    </div>
                    <p class="fits">Подойдет для: 5 Е39 1995-2003, 7 Е38 1994-2001</p>
                    <p class="price">Цену уточняйте</p>
                    <a href="#" class="claim">
            
                        <img src="./accests/buy-w.png" alt="">
                        <p>ПОДРОБНЕЕ</p>
                    </a>
                    <div class="click">
                        <img src="./accests/telegram.png" alt="">
                        <p><a href="#">Купить в один клик</a></p>
                    </div>
                </div>
                </div>
                
                
                <div class="col-lg-2 col-sm-6">
                
                    <div class="offers">
                    <img src="./accests/1449945742697-400x400.png" alt="">
                    <h3>Блок комфорта</h3>
                    <div class="model_price">
                        <p class="model">Блок комфорта, GM3</p>
                    </div>
                    <p class="fits">Подойдет для: 5 Е39 1995-2003, 7 Е38 1994-2001</p>
                    <p class="price">Цену уточняйте</p>
                    <a href="#" class="claim">
            
                        <img src="./accests/buy-w.png" alt="">
                        <p>ПОДРОБНЕЕ</p>
                    </a>
                    <div class="click">
                        <img src="./accests/telegram.png" alt="">
                        <p><a href="#">Купить в один клик</a></p>
                    </div>
                </div>
                </div>
            
            </div>
        </div>

</div>

<div class="about">
    <div class="container">
        <div class="row">
            <h3>О КОМПАНИИ</h3>
        </div>
    </div>
</div>

<div class="history">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6"><p>Мы занимаемся продажей оригинальных б/у запчастей для BMW всех моделей в Могилеве и по всей Беларуси.
                Мы на рынке уже 6 лет. Занимаемся разбором машинокомплектов. Имеем обширный склад запчастей, 
                а так же работаем по заказу.</p>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
                "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую 
                коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не 
                только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. 
                Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х 
                годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых 
                используется Lorem Ipsum.</p>
            </div>
            <div class="col-12 col-md-6"><p>Мы занимаемся продажей оригинальных б/у запчастей для BMW всех моделей в Могилеве и по всей Беларуси.
                Мы на рынке уже 6 лет. Занимаемся разбором машинокомплектов. Имеем обширный склад запчастей, 
                а так же работаем по заказу.</p>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
                "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую 
                коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не 
                только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. 
                Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х 
                годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых 
                используется Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            
                <div class="col-md-4">
                    <h4>ПОПУЛЯРНЫЕ КАТЕГОРИИ</h4>
                    <ul TYPE="square">
                    <li><a href="">Амортизатор капота</a></li>
                    <li><a href="">Амортизатор крышки багажника</a></li>
                    <li><a href="">Амортизатор подвески</a></li>
                    <li><a href="">Балка подвески задняя</a></li>
                    <li><a href="">Балка подвески передняя (подрамник)</a></li>
                    <li><a href="">Бардачок (вещевой ящик)</a></li>
                    <li><a href="">Бачок омывателя</a></li>
                    <li><a href="">Бачок расширительный</a></li>
                    <li><a href="">Блок АБС, насос (ABS, ESP, ASR)</a></li>
                    <li><a href="">Блок коммуникационный</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>ПОПУЛЯРНЫЕ МОДЕЛИ</h4>
                    <ul TYPE="square">
                        <?php foreach($arr as $item):?>
                            <li><a href="./list.php?seria=<?=$item?>"><?=$item?></a></li>
                        <?php endforeach;?> 

            
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>ИНФОРМАЦИЯ</h4>
                    <ul TYPE="square">
                    <li><a href="">Доставка</a></li>
                    <li><a href="">Оплата</a></li>
                    <li><a href="">О компании</a></li>
                    <li><a href="">Гарантия</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="logo">
                        <div class="logo1">
                            <a href="#"><img src="./accests/logo_bmw-logo-black-640x550.png" alt=""></a>
                        </div>
                        <div class="logo2">    
                            <a href="#"><h1>BMWLAND</h1>
                            <p>Запчасти для BMW в Могилеве</p></a>
                        </div>
                    </div>
                    <div class="phone">
                        <img src="./accests/phone.png" alt="">
                        <p><a href="#">+375 (29) 654-33-78</a></p>
                    </div>
                    <div class="phone">
                        <img src="./accests/phone.png" alt="">
                        <p><a href="#">+375 (29) 104-88-04</a></p>
                    </div>
                    <div class="phone">
                        <img src="./accests/phone.png" alt="">
                        <p><a href="#">+375 (29) 242-21-05</a></p>
                    </div>
                    <div class="location">
                        <img src="./accests/pin.png" alt="">
                        <p><a href="#">Беларусь, г. Могилев, Гомельское шоссе 53 В ,Авторынок , место 112,113 </a></p>
                    </div>
                </div>
          
        </div> 
    </div>
</div>
<div class="attention">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="attention_text">   
                    <h3>ВНИМАНИЕ !!!</h3>
                    <p>Этот сайт не является интернет-магазином. Вся приведенная на сайте информация, включая информацию о ценах, носит исключительно рекламно-информационный характер и не является публичной офертой. Изображение товаров (размеры, цвет и др.) на сайте могут отличаться от товаров в продаже. Сайт разработан для информирования клиентов об ассортименте товаров в нашем магазине. Полную информацию о товаре можно получить у продавцов-консультантов в наших магазинах. Весь товар можно приобрести ТОЛЬКО в наших магазинах!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
