<?php require_once("dashbord-header.php"); ?>

<div class="container">
     <!-- alert for error -->
     <?php if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
          <div class="alert alert-warning alert-dismissible fade show w-25 ml-auto" role="alert" id="alertActivation">
               <strong id="message">
                    <?php echo $_SESSION['errorMassage']; ?>
                    <?php $_SESSION['error'] = 0   ?>
               </strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
          </div>

     <?php } ?>

     <div class="text-center">
          <div class="d-grid gap-2 d-md-block">
               <button class="btn btn-transfer btn-lg mt-3 w-50" type="button" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-share"></i><br>
                    <span>Direct Transfer</span>
               </button>
               <button class="btn btn-transfer btn-lg mt-3 w-50" type="button" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-paper-plane"></i><br>
                    <span>International <br> Transfer</span>
               </button>
               <button class="btn btn-transfer btn-lg mt-3 w-50" type="button" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-share-square"></i><br>
                    <span>Beneficiary <br> Transfer</span>
               </button>
          </div>
     </div>
     <!-- Modal1-->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Transfer Section</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                    <div class="modal-body">
                         <form id="regForm" action="send.inc.php" method="POST" autocomplete="off" enctype="multipart/form-data">

                              <h5>Enter Transfer Details</h5>

                              <!-- One "tab" for each step in the form: -->
                              <div class="tab mt-5">To bank
                                   <p><input placeholder=" From: GBP 1,407,962.00" oninput="this.className = ''" value="GBP 1,407,962.00" disabled></p>
                                   <p><input placeholder="Account Number..." oninput="this.className = ''" type="number" name="accountNumber" id="accountNumber"></p>
                                   <p><input placeholder="Account Name..." oninput="this.className = ''" name="accountName" id="accountName"></p>
                                   <p><input placeholder="Amount..." oninput="this.className = ''" name="amount" id="amount" type="number"></p>
                              </div>

                              <div class="tab mt-5">Other details:
                                   <p><input placeholder="Swift Code" oninput="this.className = ''" name="swiftCode" id="swiftCode"></p>
                                   <p><input placeholder="BIC Code" oninput="this.className = ''" name="bicCode" id="bicCode"></p>
                                   <p><input placeholder="Narration" oninput="this.className = ''" name="narration" id="narration"></p>
                              </div>

                              <div class="tab mt-5">Confirm Details:
                                   <p style="font-size: 14px;">To Name: <span id="showAccountName"></span></p>
                                   <hr>
                                   <p style="font-size: 14px;">To Account Number: <span id="showAccountNumber"></span></p>
                                   <hr>
                                   <p style="font-size: 14px;">Amount: <span id="showAmount"></span></p>
                                   <hr>
                                   <p style="font-size: 14px;">Narration: <span id="showNarration"></span></p>
                                   <hr>
                                   <!-- validate pin -->
                                   <p><input placeholder="Enter Pin" type="number" oninput="this.className = ''" name="pin" id="confirmPin"></p>
                              </div>

                              <div class="tab mt-5">
                                   <h6>Note this transfer will take Five working days </h6>
                                   <hr>
                                   <p style="font-size: 12px;">
                                        Generally speaking international bank transfer will arrive within one to five working days <br>
                                        lets explore what this look like
                                   </p>
                              </div>

                              <div style="overflow:auto;">
                                   <div style="float:right;">
                                        <button type="submit" name="send" class="btn btn-outline-info btn-md" id="doneBtn" style="display:none">Done</button>
                                        <button type="button" class="btn btn-outline-info btn-md" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                   </div>
                                   <div style="float:left;">
                                        <button type="button" id="prevBtn" class="btn btn-outline-info btn-md" onclick="nextPrev(-1)">Previous</button>
                                   </div>
                              </div>

                              <!-- Circles which indicates the steps of the form: -->
                              <div style="text-align:center;margin-top:40px;">
                                   <span class="step"></span>
                                   <span class="step"></span>
                                   <span class="step"></span>
                              </div>

                         </form>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
               </div>
          </div>
     </div>
     <!-- <form class="row g-3" action="send.inc.php" method="POST">
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
     </form> -->

</div>



<? require_once('dashboard-footer.php'); ?>