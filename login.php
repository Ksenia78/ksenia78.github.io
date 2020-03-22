<?php
session_start();
if(isset($_SESSION['user']['id'])){
    header('location: ../index.php');
}
include ('layouts/header.php');
?>
    <br>


    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">

                    <?
                    if($_SESSION['error_']){
                        foreach ($_SESSION['error_'] as $key => $value){
                            echo '<div class="alert alert-danger">';
                            echo $_SESSION['error_'][$key];
                            echo '</div>';
                            unset($_SESSION['error_'][$key]);

                        }
                    }elseif ($_SESSION['success']['reg']){
                        echo '<div class="alert alert-success">';
                        echo $_SESSION['success']['reg'];
                        echo '</div>';
                        unset($_SESSION['success']['reg']);
                    }
                    ?>
                    <div class="card-header">Register</div>
                    <div class="card-body">

                        <form class="form-horizontal" method="post" action="process/loginprocess.php">


                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                    </div>
                                </div>
                            </div>

                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                            </div>
                            <div class="login-register">
                                <a href="register.php">Register</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
include ('layouts/footer.php');
