<?php


require_once __DIR__.'/../helpers.php';


$_SESSION['validation']=[];
$_SESSION['user'];


if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'] ;
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
    
    
    
    if(empty($name)){
        $_SESSION['validation']['name']='Введите имя';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['validation']['email']='Указана неправильная почта';
    }
    if(empty($password)){
        $_SESSION['validation']['password']='пароль пустой';
    }
    if($password !== $password_confirm){
        $_SESSION['validation']['password']='Пароли не совпадают';

    }
    print_r( $_POST);
    
   
    if(!empty($_SESSION['validation'])){

        return  redirect('/registration.php'); 
    }
    $pdo = getConnectionBD();

  
    $pdo = getConnectionBD();

  
   $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
   $smth = $pdo->prepare($query);
    $params = [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    ];


    if ($smth->execute($params)) {
        $_SESSION['user']=$name;
        return redirect('/');
    } else {
        echo 'Ошибка при выполнении запроса: ' . print_r($smth->errorInfo(), true);
    }
    



}
