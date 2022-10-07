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

                    <div class="card">
                         <div class="card-header">
                              Sender
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
                    </div>
               </div>


               <?php require_once("./dashboard-footer.php") ?>