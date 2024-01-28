<?php
session_start();
const DB_HOST = 'localhost';
const DB_NAME = 'users';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'mysql';



function redirect(string $url){
    print_r($url);
    $newUrl = "http://localhost/BMWLAND".$url;
    header("Location: $newUrl");
    die();
}

function hasValidationError(string $param):bool{
 return isset($_SESSION['validation'][$param]);
}

function clearValidation(){
    $_SESSION['validation']=[];
}

function setMessange(string $key,string $message){
    $_SESSION['message'][$key]=$message;
    print_r($_SESSION);
}
function hasMessange(string $key){
    return isset($_SESSION['message'][$key]);
}
function getMessange(string $key){
    $message= $_SESSION['message'][$key]??'';
    unset($_SESSION['message'][$key]);
    return $message;
}


function getConnectionBD():PDO{
try {
    return new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=UTF8", DB_USERNAME, DB_PASSWORD);

    
} catch (\Exception $ex) { 
    die('Ошибка с подключением '.$ex->getMessage());
}

}

function currentUser(){
    
    $pdo =getConnectionBD();
    if(!isset($_SESSION['user'])){
        return false;
    }
    $userId=$_SESSION['user']['id']??null;
    $smth=$pdo->prepare("SELECT * FROM users WHERE id = :id");
    $smth->execute(['id'=>$userId]);
    return $smth->fetch(PDO::FETCH_ASSOC);

}
function logout(){
    unset($_SESSION['user']);
    redirect('./index.php');
}
function checkAuth(){
    if(!isset($_SESSION['user']['id'])){
        redirect('/index.php');
    }
}