<?php
/*
* Created by: Nick Moore
* Description: Login page for the NESCC Task Scheduler site
*/
?>

<?php
    session_start();
    $_SESSION['carrier'] = $carrierSel;
    $_SESSION['delivMethod'] = $_POST['radio'];
    $deli = $_POST['radio'];
    $newEmail = $_SESSION['newEmail'];
    $newPhone = $_SESSION['newCell'];

    $userSelect = $_POST['userSelect'];

    $carrier = array('tmobile' => '@tomomail.net',
                    'verizon' => '@vtext.com',
                    'at&t' => '@txt.att.net',
                    'sprint' => '@messaging.sprintpcs.com');

    $carrierSel = $carrier[$userSelect];
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Nick Moore | Confirm User</title>

        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/4da6eb03df.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Dosis:200,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <div class="container-fluid confirmBody">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 confirmHeader">
              <h1 class="titleHead">Activate Your Account</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
              <!-- Empty for styling -->
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <form class="form-group activateUser" method="post" action="mail/mail.php">
                    <div class="custom-controls-stacked">
                        <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" type="radio" value="cellPhone" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Cell Phone</span>
                            <select class="custom-select" id="selectCarrier" name="userSelect">
                                <?php
                                    foreach ($carrier as $key => $value) {
                                        echo("<option>" . $key ."</option>");
                                    }
                                ?>
                            </select>
                        </label>
                        <label class="custom-control custom-radio">
                            <input id="radio2" name="radio" type="radio" value="email" class="custom-control-input" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Email</span>
                        </label>
                    </div>
                    <input type="submit" value="Send Activation" id="activateBtn"/>
                </form>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <?php
                  var_dump($carrierSel);
                  var_dump($deli);
                  var_dump($newEmail);
                  var_dump($newPhone);
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
