<?php require_once("dashbord-header.php"); ?>

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

     <div class="card text-center">
          <div class="card-header">
               Wire Transfer
          </div>
          <div class="card-body">
               <form class="row g-3" action="send.inc.php" method="POST">
                    <div class="col-md-6">
                         <label for="inputEmail4" class="form-label">Amount</label>
                         <input type="Number" class="form-control" name="amount" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputPassword4" class="form-label">Account Number</label>
                         <input type="number" name="accountNumber" class="form-control" id="inputPassword4" placeholder="Enter Destination Account" required>
                    </div>
                    <div class="col-12 mt-2">
                         <label for="inputAddress" class="form-label">Account Name</label>
                         <input type="text" name="accountName" class="form-control" id="inputAddress" placeholder="Enter Destination" required>
                    </div>
                    <div class="col-md-6 mt-2">
                         <label for="inputCity" class="form-label">Narration</label>
                         <input type="text" class="form-control" name="narration" id="inputCity" required>
                    </div>
                    <div class="col-md-2 mt-2">
                         <label for="inputZip" class="form-label">Transfer Pin</label>
                         <input type="password" class="form-control" name="pin" id="inputZip" required>
                    </div>
                    <div class="col-12 mt-3">
                         <button type="submit" name="send" class="btn btn-primary">Send</button>
                    </div>
               </form>
          </div>
          <div class="card-footer text-muted">
               Send money to anyone around the world within 2mins
          </div>
     </div>

</div>



<? require_once('dashboard-footer.php'); ?>