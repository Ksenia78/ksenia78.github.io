<?php
$host = 'localhost';
$user= 'user'; //тут пользовател базу данных
$password = 'password bd'; //тут пароль пользователя базы данных
$database = 'database name';  //тут название базу данных
$conn = mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die('Mysql connection error');
}