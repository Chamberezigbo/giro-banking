<?php require_once("dashbord-header.php") ?>

<style>
     body {
          overflow-x: hidden;
     }
</style>


<div class="container">
     <h6>
          Account Statement
     </h6>
     <hr>

     <div class="container">
          <div class="table-responsive">
               <table class="table table-sm table-hover">
                    <thead>
                         <tr>
                              <th>S/N</th>
                              <th scope="col">Fullname</th>
                              <th scope="col">Account Number</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Country</th>
                              <th scope="col">Profile</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $sql = "Select * from `users`";
                         $result = mysqli_query($conn, $sql);
                         if ($result) {
                              $id = 1;
                              while ($row = mysqli_fetch_assoc($result)) {
                                   $recordId = $row['id'];
                                   $fullname = $row['surname'] . ' ' . $row['otherName'];
                                   $gender = $row['gender'];
                                   $country = $row['country'];
                                   $accountNumber = $row['accountNumber'];
                         ?>
                                   <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $fullname ?></td>
                                        <td><?= $accountNumber ?></td>
                                        <td><?= $gender ?></td>
                                        <td><?= $country ?></td>
                                        <td> <a href='view_profile.php?id=<?= $recordId ?> '>View Profile</a></td>
                                   </tr>
                         <?php $id++;
                              }
                         } ?>
                    </tbody>
               </table>

          </div>

     </div>
</div>


<?php require_once("dashboard-footer.php") ?>