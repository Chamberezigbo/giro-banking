<? require_once("dashbord-header.php") ?>

<div class="card debit-card">
     <div class="card-body">
          <div class="d-flex align-items-end flex-column">
               <h5 class="card-text ">....</h5>
          </div>
          <h5 class="card-title"><?= $_SESSION['accountType'] ?></h5>
          <h6 class="card-subtitle mb-2"><?= $_SESSION['currency'] . " " . number_format($_SESSION['balance']) ?></h6>
          <h6 class="card-text">Account Number <br>
               <span>
                    <?= $_SESSION['accountNumber'];  ?>
               </span>
          </h6>
          <a href="#" class="card-link">Credits</a>
          <a href="#" class="card-link">Debits</a>
     </div>
</div>



<div class="line"></div>

<div class="card">
     <ul class="list-group list-group-flush">
          <li class="list-group-item">
               <div class="d-flex justify-content-around">
                    <div class="text-center">
                         <a href="transfer.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-exchange-alt"></i>
                              </button> <br>
                              Wire <br> Transfer
                         </a>
                    </div>
                    <div class="text-center">
                         <button type="button" class="btn btn-primary ms-1">
                              <i class="fas fa-share-alt"></i>
                         </button> <br>
                         <a href="transfer.php">Local<br> Transfer</a>
                    </div>
                    <div class="text-center">
                         <a href="user-manual.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-credit-card"></i>
                              </button> <br>
                              Check <br>Deposit
                         </a>
                    </div>
               </div>
          </li>
          <li class=" list-group-item">
               <div class="d-flex justify-content-around">
                    <div class="text-center">
                         <a href="statement.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-street-view"></i>
                              </button> <br>
                              View <br> Statement
                         </a>
                    </div>
                    <div class="text-center">
                         <a href="statement.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-check-square"></i>
                              </button> <br>
                              Checking<br> Statement
                         </a>
                    </div>
                    <div class="text-center">
                         <a href="user-manual.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-vr-cardboard"></i>
                              </button> <br>
                              Credit <br>Card
                         </a>
                    </div>
               </div>
          </li>
          <li class="list-group-item">
               <div class="d-flex justify-content-around">
                    <div class="text-center">
                         <a href="user-manual.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-money-bill-alt"></i>
                              </button> <br>
                              Invest
                         </a>
                    </div>
                    <div class="text-center">
                         <a href="user-manual.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-box"></i>
                              </button> <br>
                              Logistics
                         </a>
                    </div>
                    <div class="text-center">
                         <a href="user-manual.php">
                              <button type="button" class="btn btn-primary ms-1">
                                   <i class="fas fa-lightbulb"></i>
                              </button> <br>
                              Get<br>Help
                         </a>
                    </div>
               </div>
          </li>
     </ul>
</div>


</div>

<? require_once("dashboard-footer.php") ?>