<?php
/*
* Created by: Nick Moore
* Description: New User application for NESCC Task Scheduler site
*/
?>

<?php
    session_start();
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
    confirmPassword($newPassword, $passwordConfirm);

    if($checkFirstName && $checkLastName && $checkEmail && $checkPhone && $checkUsername && $passwordCheck) {
        addUser($newFirstName, $newLastName, $newEmail, $newPhone, $newUsername, $newPassword);
        $_SESSION['newEmail'] = $newEmail;
        $_SESSION['newCell'] = $newPhone;
        header('Location: confirmNewUser.php');
        exit;
    }

    // Error array
    $errorDisp = array( 'fnError' => array("First Name", "Your first name needs to be 3 characters or longer."),
                            'lnError' => array("Last Name", "Your last name needs to be 3 characters or longer"),
                            )
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Nick Moore | TS Register</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/4da6eb03df.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Dosis:200,400,600" rel="stylesheet" />
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <?php include('nav.php'); ?>
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
                        <input class="form-control userCell" type="tel" name="newPhone" placeholder="Cell Phone ###-###-####*" required  />
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
                        var_dump($passwordCheck);
                        echo "<hr />";
                        var_dump($newFirstName);
                        var_dump($newLastName);
                        var_dump($newEmail);
                        var_dump($newPhone);
                        var_dump($newUsername);
                        var_dump($newPassword);
                        var_dump($passwordConfirm);
                        echo"<hr />";
                        var_dump($connPass);
                        var_dump($e1);
                        var_dump($pass);
                        var_dump($e2);
                    ?>
                </div>
            </div>
            <div class="row reqContent">
                <div class="col-12 col-md-3 col-lg-3 empty1">
                    <!-- Empty for styling -->
                </div>
                <div class="col-12 col-md-6 col-lg-6 reqSect">
                    <ul class="list-group reqList">
                        <li class="list-group-item reqItem1">
                            First Name must be at least 3 characters.
                        </li>
                        <li class="list-group-item reqItem2">
                            Last Name must be at least 3 characters.
                        </li>
                        <li class="list-group-item reqItem3">
                            Email must be in the proper format.
                        </li>
                        <li class="list-group-item reqItem4">
                            Use the 10-digit with dashes (-) phone number format.
                        </li>
                        <li class="list-group-item reqItem5">
                            Username must be at least 6 characters.
                        </li>
                    </ul>
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
