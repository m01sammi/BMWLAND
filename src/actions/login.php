<?php


require_once __DIR__.'/../helpers.php';



if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'];
    $password=$_POST['password'];

   
    $pdo =getConnectionBD();
    $smth=$pdo->prepare("SELECT * FROM users WHERE name = :name ");
    $params = [
        'name' => $name,
    ];
    
    $user;
    
    try {
        $smth->execute($params);
        $user = $smth->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            setMessange('error',"Пользователь с $login не найден");
             redirect('/login.php');
        }
       
       
    } catch (\Exception $e) {
        die('Ошибка при выполнении запроса' . $e->getMessage());
    }
    if(!password_verify($password,$user['password'])){
        setMessange('error'," не Верный пороль");
        redirect('/login.php');
    }
    $_SESSION['user'] =$user['name'];
    redirect('/index.php');

    

}