<?php
session_start();
if(isset($_SESSION['user']['id'])){
    header('location: ../index.php');
}
require ('../connection.php');
if(count($_POST)>0){
    foreach ($_POST as $key => $value){
        $$key = $value;
        if($_POST[$key]==''){
            $_SESSION['error_'][$key] = "Пожалуйста заполняйте $key поля";
            header('location: ../register.php');
            $valid = false;
        }else{
            $valid = true;
        }
    }
    if($password!=$confirmpassword){
        $_SESSION['error_'][$key] = "Введенные пароли не совпадают";
        header('location: ../register.php');
    }
    $check_email = mysqli_query($conn,"SELECT `id` FROM `users` WHERE `email`='$email'");
    if(mysqli_num_rows($check_email)>0){
        $_SESSION['error_'][$key] = "Этот email уже зарегистрирован";
        header('location: ../register.php');
    }

    if($valid){
        $password = crypt($password,'');
        $sql = "INSERT INTO `users`(`name`,`last_name`,`email`,`password`,`img`) VALUES ('$name','$lastname','$email','$password','')";
        $query = mysqli_query($conn,$sql);
        if($query){
            $_SESSION['success']['reg'] = "Вы успешно зарегистрировались";
            header('location: ../login.php');
        }
    }
}