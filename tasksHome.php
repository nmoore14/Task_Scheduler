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
        <script src="https://use.fontawesome.com/4da6eb03df.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Dosis:200,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/tasks.css" />
    </head>
    <body>
        <?php include('nav.php'); ?>
        <!-- The user content area -->
        <div class="container-fluid userContent">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2">
                    <!-- Empty for styling -->
                </div>
                <div class="col-12 col-md-8 col-lg-8 userHeader">
                    <h2 class="display-2"><?php echo $firstName; ?></h2>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <!-- Empty for styling -->
                </div>
            </div>
        </div>

        <div class="container userTaskSect">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12" id="featuredItem">
                    <div class="card text-center">
                      <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                          <li class="nav-item">
                            <a class="nav-link active" href="#currentTask" id="currentLink">Current Tasks</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#completedTasks" id="completeLink">Completed Tasks</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#allTasks" id="allLink">All Tasks</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#newTask" id="newLink">Create a Task</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body" id="currentTask">
                        <h4 class="card-title">Current Tasks</h4>
                        <p class="card-text">Fresh items that have blown our customers minds.</p>
                      </div>
                      <div class="card-body" id="completedTasks">
                        <h4 class="card-title">Competed Tasks</h4>
                        <p class="card-text">Items straight off the truck.</p>
                      </div>
                      <div class="card-body" id="allTasks">
                        <h4 class="card-title">All Tasks</h4>
                        <p class="card-text">Here's what we like...today.</p>
                      </div>
                    </div>
                    <div class="card-body" id="newTask">
                      <h4 class="card-title">New Task</h4>
                      <p class="card-text">Here's what we like...today.</p>
                    </div>
                  </div>
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
        <script src="js/index.js"></script>
    </body>
</html>
