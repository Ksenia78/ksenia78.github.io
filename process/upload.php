<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../index.php');
}
$id = $_SESSION['user']['id'];
require ('../connection.php');

for($i=0; $i<count($_FILES['img']["name"]); $i++){
    $imgname = uniqid().$_FILES['img']["name"][$i];
    move_uploaded_file($_FILES['img']["tmp_name"][$i],'../upload/'.$imgname);
    $sql = "INSERT INTO `images`(`user_id`,`name`)VALUES('$id','$imgname')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('location: ../index.php');
    }

}
