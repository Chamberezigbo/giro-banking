<? require_once("dashbord-header.php") ?>
<div class="container">
     <h6>
          Account Statement
     </h6>
     <hr>

     <div class="table-responsive">
          <table class="table table-hover">
               <thead>
                    <tr>
                         <th scope="col">Date</th>
                         <th scope="col">Narration</th>
                         <th scope="col">Status</th>
                         <th scope="col">Credit</th>
                         <th scope="col">Debit</th>
                         <th scope="col">Balance</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    $email = $_SESSION['email'];
                    $sql = "Select * from `statement` WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                         while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $date = $row['date'];
                              $narration = $row['narration'];
                              $credit = $row['credit'];
                              $debit = $row['debit'];
                              $balance = $row['balance'];
                              $status = $row['status'];
                    ?>
                              <tr>
                                   <td scope="row"><?= $date ?></td>
                                   <td><?= $narration ?></td>
                                   <td><?= $status ?></td>
                                   <td><?= $credit ?></td>
                                   <td><?= $debit ?></td>
                                   <td><?= $balance ?></td>
                              </tr>
                    <?php }
                    } ?>
               </tbody>
          </table>

     </div>
</div>


<? require_once("dashboard-footer.php") ?>