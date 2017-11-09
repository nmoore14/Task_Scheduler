<?php
/*
* Created by: Nick Moore
* Description: Login page for the NESCC Task Scheduler site
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Nick Moore | Task Scheduler</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/4da6eb03df.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Dosis:200,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <div class="container-fluid mainBody">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <h1 class="titleHead">Task Scheduler</h1>
              </div>
            </div>
          <div class="row">
              <div class="col-12 col-md-3 col-lg-3 empty1">
                <!-- Empty for styling -->
              </div>
              <div class="col-12 col-md-6 col-lg-6 buttonArea">
                <a class="btn btn-primary" href="login.php" role="button" id="loginBtn">Login</a>
                <a class="btn btn-primary" href="newUser.php" role="button" id="newUserBtn">Create Account</a>
              </div>
              <div class="col-12 col-md-3 col-lg-3 empty2">
                  <!-- Empty for styling -->
              </div>
          </div>
          <div class="row infoPane">
            <div class="col-12 col-md-8 col-lg-8 infoLeft">
                <h1 class="display-2">Organization</h1>
                <p class="orgDesc">
                    Have a hectic schedule? Let the Task Scheduler help bring your schedule to the forefront and make sense of the mess.
                </p>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <!-- Empty for styling -->
            </div>
          </div>
          <div class="row infoPane">
              <div class="col-12 col-md-4 col-lg-4">
                <!-- Empty for styling -->
              </div>
            <div class="col-12 col-md-8 col-lg-8 infoRight">
                <h1 class="display-2">Ease of Use</h1>
                <p class="orgDesc">
                    Ease of Use + Heavy lifting of your data. Sit back and let the app do it for you.
                </p>
            </div>
          </div>
        </div>

        <div class="navbar navbar-default navbar-fixed-bottom footer">
            <div class="container">
                <p class="navbar-text pull-left">© 2017 - Site Built By Nick Moore.
                </p>
                <a href="https://github.com/nmoore14" class="navbar-btn btn pull-right">
                <span class="glyphicon glyphicon-star"></span><i class="fa fa-github"></i> Check out my GitHub</a>
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
