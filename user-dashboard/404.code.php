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

                              <div class="alert2 bg-light">
                                   <div class="card-header text-center">
                                        <i class="fas fa-window-close fa-2x text-danger"></i><br>
                                        <h2>Transaction Failed</h2>
                                        <p>
                                             Oops! You can not make transaction due to account issue. Contacting to your nearest branch for
                                             assistance or write to our head office at girobank@mail.com
                                        </p>
                                        <div class="ml-auto">
                                             <a href="index.php" style="background-color: darkblue; color:white" class="btn btn-block">Ok</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               <?php
               }
          }
               ?>

               <?php require_once("./dashboard-footer.php") ?>