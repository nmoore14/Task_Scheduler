<?php
/*
* Created by: Nick Moore
* Description: My portfolio Site
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Nick Moore | TS Register</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

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
                    <form class="form-group loginForm" action="#" method="post">
                        <input class="form-control userFirst" type="text" name="firstname" placeholder="First Name" required />
                        <input class="form-control userLast" type="text" name="lastname" placeholder="Last Name" required  />
                        <input class="form-control userEmail" type="email" name="email" placeholder="Email" required  />
                        <input class="form-control userCell" type="tel" name="phone" placeholder="Cell Phone" required  />
                        <input class="form-control usernameSel" type="text" name="username" placeholder="Username" required />
                        <input class="form-control userPW" type="password" name="password" placeholder="Password" autocomplete="off" required />
                        <input class="form-control pwConfirm" type="password" name="passwordConfirm" placeholder="Re-Enter Password" autocomplete="off" required />
                        <input class="form-control submitBtn" id="submitBtn" type="submit" value="Submit" />
                        <input class="form-control resetBtn" id="resetBtn" type="reset" value="Clear" />
                    </form>
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
