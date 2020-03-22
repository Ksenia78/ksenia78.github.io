<?php
session_start();
if(isset($_SESSION['user']['id'])){
    header('location: ../index.php');
}
require ('../connection.php');
if(count($_POST)>0){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email==''){
        $_SESSION["error_"]['email'] = 'Заполните поле емейл';
        header('location: ../login.php');
    }elseif ($password==''){
        $_SESSION['error_']['password'] = "Заполните поле пароль";
        header('location: ../login.php');
    }else{
        $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            if(password_verify($password,$row['password'])){

                $_SESSION['user']['id'] = $row['id'];
                $_SESSION['user']['name'] = $row['name'];
                $_SESSION['user']['last_name'] = $row['last_name'];
                $_SESSION['user']['email'] = $row['email'];
                $_SESSION['user']['img'] = $row['img'];
                header('location: ../index.php');
            }else{

                $_SESSION['error_']['password_v'] ='неверный email или пароль';
                header('location: ../login.php');

            }
        }else{
            $_SESSION['error_']['email_v'] ='неверный email или пароль';
            header('location: ../login.php');


        }
    }

}