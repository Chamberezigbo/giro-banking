<?php require_once("./dashbord-header.php");?>

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
          <li class="list-group-item">Account Number   <?=$_SESSION['accountNumber'] ?></li>
          <li class="list-group-item">Account Type <?=$_SESSION['accountType']?></li>
          </ul>
          <div class="card-header">
               Receiver
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item">Name <?=$_SESSION['receiveName'] ?></li>
          <li class="list-group-item">Account Number <?=$_SESSION['receiverNumber']?></li>
          <li class="list-group-item">Amount <?=$_SESSION['debit']?></li>
          <li class="list-group-item">Remarks <?=$_SESSION['narration']?></li>
          </ul>
     </div>
</div>


<?php require_once("./dashboard-footer.php")?>