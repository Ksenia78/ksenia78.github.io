<?php
session_start();
require ('connection.php');
include('layouts/header.php');
$user_id = $_SESSION['user']['id'];
$sql = "SELECT * FROM `images` ORDER BY `id`";
$query = mysqli_query($conn,$sql);
$countPost = mysqli_num_rows($query);
$page = 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];}
if($page > 1){
    $page = ($page- 1) *5;}

if(isset($_GET['delete'])){
    $delet_id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM `images` WHERE `user_id`='$user_id' AND `id`='$delet_id'");
}
?>


    <div class="container">

        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Thumbnail Gallery</h1>
        <?
        if(isset($_GET['id'])){
            $imgid = $_GET['id'];
            $sql = "SELECT * FROM `images` WHERE  `user_id`='$user_id'  AND `id` = '$imgid'";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($query);
            $imgname = $row['name'];
            echo 'просмотров -'.$row['views'];
            echo '<br><a href="?delete='.$imgid.'"><p class="text-left text-danger">Удалит</p></a>';
            echo '<img src="upload/'.$imgname.'" class="img-fluid">';
            mysqli_query($conn,"UPDATE `images` SET `views`=`views`+1 WHERE `id`='$imgid' ");

        }else{
        ?>
    <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-left">
            <?
            $sql = "SELECT * FROM `images` WHERE `user_id`='$user_id'  ORDER BY `id` DESC limit 5 offset $page";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {

                    ?>

                    <div class="col-lg-3 col-md-4 col-6">
                        просмотров - <?= $row['views'] ?>
                        <?
                        $imgid =$row['id'];
                        echo '<br><a href="?delete='.$imgid.'"><p class="text-left text-danger">Удалит</p></a>';

                        ?>
                        <a href="?id=<?= $row['id'] ?>" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" style="height: 300px; width: 400px;"
                                 src="upload/<?= $row['name'] ?>" alt="">
                        </a>

                    </div>

                    <?php
                }

            }

            }

            ?>

        </div>


        <?
        if(!isset($_GET['id'])) {
            echo '<nav aria-label="Page navigation example">';
            echo '<ul class="pagination">';

            $sql = "SELECT * FROM `images` WHERE `user_id`='$user_id'  ORDER BY `id`";
            $query = mysqli_query($conn, $sql);
            $countPost = mysqli_num_rows($query);
            $page = $countPost / 5;
            $page = ceil($page);
            $pagenow = $_GET['page'];
            if ($pagenow > 1) {
                $prev = $pagenow - 1;
                echo '<li class="page-item"><a class="page-link" href="?page=' . $prev . '">Previous</a></li>';

            }
            for ($i = 1; $i <= $page; $i++) {
                if ($pagenow == $i) {
                    $active = 'active';
                } else {
                    $active = '';
                }
                echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
            }
            $next = $pagenow+1;
            echo ' <li class="page-item"><a class="page-link" href="?page='.$next.'">Next</a></li>';
            echo '</ul>';
            echo '</nav>';
        }

        ?>






        <br>
    </div>
<?php
include ('layouts/footer.php');