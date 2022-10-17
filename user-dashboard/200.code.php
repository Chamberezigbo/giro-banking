          <?php
          require_once("db.php");
          error_reporting(0);
          session_start();


          if (!$_SESSION['auth']) {
               header('location:../index.php');
          } else {
               $currentTime = time();
               if ($currentTime > $_SESSION['expire']) {
                    session_unset();
                    session_destroy();
                    header('location:../index.php');
               } else {
          ?>

                    <!DOCTYPE html>
                    <html>

                    <head>
                         <meta charset="utf-8">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="IE=edge">

                         <title>Giro Banking</title>

                         <!-- Bootstrap CSS CDN -->
                         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
                         <!-- Our Custom CSS -->
                         <link rel="stylesheet" href="../css/mycss.css?v=<?php echo time(); ?>">

                         <!-- Font Awesome JS -->
                         <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
                         <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

                    </head>

                    <body>

                         <div class="container">
                              <!-- alert for error -->
                              <?php if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
                                   <div class="alert alert-warning alert-dismissible fade show w-25 ml-auto" role="alert" id="alertActivation">
                                        <strong>
                                             <?php echo $_SESSION['errorMassage']; ?>
                                             <?php $_SESSION['error'] = 0   ?>
                                        </strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                        </button>
                                   </div>

                              <?php } ?>

                              <div class="alert">
                                   <div class="card-header text-center text-light">
                                        <i class="fa fa-check-circle fa-2x text-success" aria-hidden="true"></i><br>
                                        Thank you for your payment of <br> $<?= $_SESSION['debit'] ?>
                                   </div>
                                   <div class="card ml-auto mr-auto" style="width: 19rem; margin-top:-5%">
                                        <div class=" card-body">
                                             <p class="card-text" style="font-size: 13px;">Account Name: <span class="ml-auto"><?= $_SESSION['surname'] . " " . $_SESSION['otherName'] ?></span></p>
                                             <p class="card-text" style="font-size: 13px;">Account Number: <span class="ml-auto"><?= $_SESSION['accountNumber'] ?></span></p>
                                             <p class="card-text" style="font-size: 13px;">Account Type: <span class="ml-auto"><?= $_SESSION['accountType'] ?></span></p>
                                             <hr>
                                             <h5>Receiver</h5>
                                             <p class="card-text" style="font-size: 13px;">Name: <span class="ml-auto"><?= $_SESSION['receiveName'] ?></span></p>
                                             <p class="card-text" style="font-size: 13px;">Account Number: <span class="ml-auto"><?= $_SESSION['receiverNumber'] ?></span></p>
                                             <p class="card-text" style="font-size: 13px;">Amount: <span class="ml-auto"><?= $_SESSION['debit'] ?></span></p>
                                             <p class="card-text" style="font-size: 13px;">Remarks: <span class="ml-auto"><?= $_SESSION['narration'] ?></span></p>
                                             <div class="ml-auto">
                                                  <a href="index.php" style="background-color: darkblue; color:white" class="btn btn-block">Home</a>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <!-- <div class="card alert">
                                   <div class="card-header text-center">
                                        Thank you for your payment of <?= $_SESSION['debit'] ?>
                                   </div>
                                   <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Account Number <?= $_SESSION['surname'] . " " . $_SESSION['otherName'] ?></li>
                                        <li class="list-group-item">Account Number <?= $_SESSION['accountNumber'] ?></li>
                                        <li class="list-group-item">Account Type <?= $_SESSION['accountType'] ?></li>
                                   </ul>
                                   <div class="card-header">
                                        Receiver
                                   </div>
                                   <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Name <?= $_SESSION['receiveName'] ?></li>
                                        <li class="list-group-item">Account Number <?= $_SESSION['receiverNumber'] ?></li>
                                        <li class="list-group-item">Amount <?= $_SESSION['debit'] ?></li>
                                        <li class="list-group-item">Remarks <?= $_SESSION['narration'] ?></li>
                                   </ul>
                                   <a href="index.php" class="btn btn-primary">Home</a>
                              </div> -->
                         </div>

               <?php
               }
          }
               ?>

               <?php require_once("./dashboard-footer.php") ?>