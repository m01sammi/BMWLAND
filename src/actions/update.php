
<?php

require_once __DIR__.'/../helpers.php';


$_SESSION['validation']=[];

if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'] ;
    $telephon=$_POST['telephon'];
    $email=$_POST['email'];

    
    if(empty($name)){
        $_SESSION['validation']['name']='Введите имя';
    }
    if(empty($telephon)){
        $_SESSION['validation']['telephon']='Введите телефон';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['validation']['email']='Указана неправильная почта';
    }

    if(!empty($_SESSION['validation'])){

        return  redirect('/editPage.php'); 
    }

    $userId = currentUser();

    $pdo=getConnectionBD();

    $query = "UPDATE users SET name = :name, telephon = :telephon, email = :email WHERE id = :id";
    $params = [
        'name' => $name,
        'telephon' => $telephon,
        'email' => $email,
        'id' => $userId['id'],
    ];
    
    
        $smth = $pdo->prepare($query);
    
        try {
            $smth->execute($params);
    
        } catch (\Exception $e) {
            die('Ошибка при добавлении' . $e->getMessage());
        }
    
        return redirect('/home.php');
}

