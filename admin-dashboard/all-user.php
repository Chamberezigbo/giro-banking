<?php require_once("dashbord-header.php") ?>


<div class="container">
     <h6>
          Account Statement
     </h6>
     <hr>

     <div class="table-responsive">
          <table class="table table-hover">
               <thead>
                    <tr>
                         <th scope="col">Surname</th>
                         <th scope="col">Otherness</th>
                         <th scope="col">Address</th>
                         <th scope="col">City</th>
                         <th scope="col">State</th>
                         <th scope="col">DOB</th>
                         <th scope="col">Gender</th>
                         <th scope="col">Phone</th>
                         <th scope="col">Email</th>
                         <th scope="col">Country</th>
                         <th scope="col">ID</th>
                         <th scope="col">ID Num</th>
                         <th scope="col">Balance</th>
                         <th scope="col">Username</th>
                         <th scope="col">Password</th>
                         <th scope="col">Code</th>
                         <th scope="col">AC Number</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    $sql = "Select * from `users`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                         while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $surname = $row['surname'];
                              $otherName = $row['otherName'];
                              $address = $row['address'];
                              $city = $row['city'];
                              $dateOfBirth = $row['dateOfBirth'];
                              $gender = $row['gender'];
                              $state = $row['state'];
                              $phone = $row['phone'];
                              $email = $row['email'];
                              $country = $row['country'];
                              $idCard = $row['idCard'];
                              $idNumber = $row['idNumber'];
                              $username = $row['username'];
                              $password = $row['password'];
                              $transferCode = $row['transferCode'];
                              $accountNumber = $row['accountNumber'];
                    ?>
                              <tr>
                                   <td><?= $surname ?></td>
                                   <td><?= $otherName ?></td>
                                   <td><?= $address ?></td>
                                   <td><?= $city ?></td>
                                   <td><?= $state ?></td>
                                   <td><?= $dateOfBirth ?></td>
                                   <td><?= $gender ?></td>
                                   <td><?= $phone ?></td>
                                   <td><?= $email ?></td>
                                   <td><?= $country ?></td>
                                   <td><?= $idCard ?></td>
                                   <td><?= $idNumber ?></td>
                                   <td><?= $balance ?></td>
                                   <td><?= $username ?></td>
                                   <td><?= $password ?></td>
                                   <td><?= $transferCode ?></td>
                                   <td><?= $accountNumber ?></td>
                              </tr>
                    <?php }
                    } ?>
               </tbody>
          </table>

     </div>
</div>


<?php require_once("dashboard-footer.php") ?>