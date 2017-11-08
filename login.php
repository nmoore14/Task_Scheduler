<?php
/*
* Created by: Nick Moore
* Description: Login page for the NESCC Task Scheduler site
*/
?>

<?php
    session_start();
    if($_GET['logout'] == 'yes') {
        session_unset();
        session_destroy();
    }

    if(!empty($_SESSION['user'])) {
        header('Location: tasksHome.php');
        exit;
    }

    include_once('validateUser.php');

    $loggedIn = true;
    if(isset($_POST['userName'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        //echo $userName . " " . $password;
        if(isValidUser($userName, $password)) {
            $_SESSION['user'] = $userName;
            header('Location: tasksHome.php');
            exit;
        } else {
            $loggedIn = false;
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Nick Moore | Task Scheduler</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/4da6eb03df.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,800" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <div class="container-fluid mainContent">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 empty1">
                    <!-- Empty for styling -->
                </div>
                <div class="col-12 col-md-6 col-lg-6 login">
                    <?php
                        if($loggedIn == false) {
                            echo "<h3>Sorry, Username or Password not correct</h3>";
                        }
                    ?>
                    <form class="form-group loginForm" action="login.php" method="post">
                        <div class="input-group unInput" style="margin-bottom: .25rem;">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input class="form-control userN" type="text" name="userName" placeholder="Username" />
                        </div>
                        <div class="input-group upInput" style="margin-bottom: .25rem;">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input class="form-control userPW" type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="input-group">
                            <input class="form-control submitBtn" id="submitBtn" type="submit" value="Enter" />
                        </div>
                    </form>
                    <h5 class="newRegi"><a href="newUser.php">Register</a></h5>
                </div>
                <div class="col-12 col-md-3 col-lg-3 empty2">
                <!-- Empty for styling -->
                </div>
            </div>
        </div>

        <!-- End of file to help with load times -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="bootstrap/jquery.min.js"><\/script>')</script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="bootstrap/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
