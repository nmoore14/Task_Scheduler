<?php
    session_start();

    $userName = "";
    if(empty($_SESSION['user'])) {
        header("Location: login.php");
        exit;
    } else {
        $userName = $_SESSION['user'];
    }

    include_once('validateUser.php');
    $firstName = getUsersFirstName($userName);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Nick Moore | Task Scheduler</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,800" rel="stylesheet">
        <link rel="stylesheet" href="css/tasks.css" />
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


        <!-- End of file to help with load times -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="bootstrap/jquery.min.js"><\/script>')</script>
        <script src="bootstrap/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="bootstrap/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>