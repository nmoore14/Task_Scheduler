<?php
/*
* Created by: Nick Moore
* Description: New User application for NESCC Task Scheduler site
*/
?>

<?php

    include('validateUser.php');

    // Set the variables to pass to the validateUser form.
    $newFirstName = trim($_POST['newFirstName']);
    $newLastName = trim($_POST['newLastName']);
    $newEmail = trim($_POST['newEmail']);
    $newPhone = trim($_POST['newPhone']);
    $newEmail = trim($_POST['newEmail']);
    $newUsername = trim($_POST['newUsername']);
    $newPassword = trim($_POST['newPassword']);
    $passwordConfirm = trim($_POST['passwordConfirm']);

    newUserFirstName($newFirstName);
    newUserLastName($newLastName);
    newUserEmail($newEmail);
    newUserPhone($newPhone);
    newUser_Name($newUsername);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Nick Moore | TS Register</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/4da6eb03df.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,800" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <div class="container header">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand" href="#">Task Scheduler</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"  id="homeLink">
                                <a class="nav-link disabled" href="#">Edit</a>
                            </li>
                            <li class="nav-item" id="aboutLink">
                                <a class="nav-link disabled" href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid mainContent">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 empty1">
                    <!-- Empty for styling -->
                </div>
                <div class="col-12 col-md-6 col-lg-6 login">
                    <h3 class="header3">New User Application</h3>
                    <p><small>* Required</small></p>
                    <form class="form-group loginForm" action="newUser.php" method="post">
                        <input class="form-control userFirst" type="text" name="newFirstName" placeholder="First Name*" required />
                        <input class="form-control userLast" type="text" name="newLastName" placeholder="Last Name*" required  />
                        <input class="form-control userEmail" type="email" name="newEmail" placeholder="Email*" required  />
                        <input class="form-control userCell" type="tel" name="newPhone" placeholder="Cell Phone*" required  />
                        <input class="form-control usernameSel" type="text" name="newUsername" placeholder="Username*" required />
                        <input class="form-control userPW" type="password" name="newPassword" id="newPassword" placeholder="Password*" autocomplete="off" required />
                        <input class="form-control pwConfirm" type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Re-Enter Password*" autocomplete="off" required />
                        <input class="form-control submitBtn" id="submitBtn" type="submit" value="Submit" />
                        <input class="form-control resetBtn" id="resetBtn" type="reset" value="Clear" />
                    </form>
                </div>
                <div class="col-12 col-md-3 col-lg-3 empty2">
                    <?php
                        var_dump($checkFirstName);
                        var_dump($checkLastName);
                        var_dump($checkPhone);
                        var_dump($checkEmail);
                        var_dump($checkUsername);
                    ?>
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
