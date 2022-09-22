<?php
require_once('db.php');

if (isset($_POST['register'])) {
     $surname = trim($_POST['surname']);
     $otherName = trim($_POST['otherName']);
     $dateOfBirth = trim($_POST['dateOfBirth']);
     $gender = trim($_POST['gender']);
     $phone = trim($_POST['phone']);
     $email = trim($_POST['email']);
     $address = trim($_POST['address']);
     $city = trim($_POST['city']);
     $state = trim($_POST['state']);
     $zipCode = trim($_POST['zipCode']);
     $country = trim($_POST['country']);
     $idCard = trim($_POST['idCard']);
     $idNumber = trim($_POST['idNumber']);
     $occupation = trim($_POST['occupation']);
     $turnover = trim($_POST['turnover']);
     $branch = trim($_POST['branch']);
     $accountType = trim($_POST['accountType']);
     $deposit = trim($_POST['deposit']);
     $currency = trim($_POST['currency']);
     $username = $_POST['username'];
     $password = $_POST['password'];
     $accountNumber = rand(1111111111, 9999999999);
     $transferCode = rand(10000, 99999);
     $imageUrl = " ";

     //? file upload code //
     $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
     // Check if image file is a actual image or fake image
     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
     if ($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
     } else {
          echo "File is not an image.";
          $uploadOk = 0;
     }
     // Check if file already exists
     if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
     }

     // Check file size
     if ($_FILES["fileToUpload"]["size"] > 10000000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
     }

     // Allow certain file formats
     if (
          $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif"
     ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
     }

     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
     } else {
          $imageUrl = explode(".", $_FILES["fileToUpload"]["name"]);
          $doc = round(microtime(true)) . '.' . end($imageUrl);
          move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file . $imageUrl);
     }

     $sql = "SELECT email FROM users WHERE email =  ?";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location:index.php?error=sqlerror");
          exit();
     } else {
          mysqli_stmt_bind_param($stmt, "s", $email);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $rowCount = mysqli_stmt_num_rows($stmt);

          if ($rowCount > 0) {
               header("Location:index.php?error=usernameTaken");
               session_start();
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Email has been taken";
               header("Location:add-customer.php");
               // echo "email has been taken";
               exit();
          } else {
               $sql = " INSERT INTO users (
                         surname,otherName,
                         address,city,dateOfBirth,
                         gender,state,phone,zipCode,
                         email,country,idCard,
                         idNumber,	annualTurnover,
                         branch,accountType,balance,
                         username,password,occupation,currency,
                         accountNumber,transferCode,imageUrl
                    ) VALUES (
                         ?, ?,?, ?, ?,?,
                         ?,?,?,?,?,
                         ?,?,?,?,?,
                         ?,?,?,?,?,?,?,?
                    )";
               $stmt = mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                    session_start();
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " Error occurred with your login";
                    header("Location:add-customer.php");
                    // echo ("error occurred with your login " . $conn->error);
                    exit();
               } else {

                    // mysqli_stmt_bind_param(
                    //      $stmt,
                    //      "ssssssssssssssssssssssss",
                    //      $surname,
                    //      $otherName,
                    //      $address,
                    //      $city,
                    //      $dateOfBirth,
                    //      $gender,
                    //      $state,
                    //      $phone,
                    //      $zipCode,
                    //      $email,
                    //      $country,
                    //      $idCard,
                    //      $idNumber,
                    //      $turnover,
                    //      $branch,
                    //      $accountType,
                    //      $deposit,
                    //      $username,
                    //      $password,
                    //      $occupation,
                    //      $currency,
                    //      $accountNumber,
                    //      $transferCode,
                    //      $imageUrl
                    // );
                    // mysqli_stmt_execute($stmt);

                    // session_start();
                    // $_SESSION['error'] = 1;
                    // $_SESSION['errorMassage'] = "Account created successfully";
                    // header("Location:add-customer.php");
                    // echo ("account created" . $conn->error);
                    // exit();

                    // section for sending mail //
                    $subject = "Thanks for signing up";
                    $message = "";
                    $headers = "From:  Giro Banking Team  <airdrop.top>\r\n";
                    $headers .= 'To: Name <' . $email . '>';
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    ob_start();
                    include("email.php");
                    $message = ob_get_contents();
                    ob_end_clean();

                    if (mail($email, $subject, $message, $headers)) {
                         mysqli_stmt_bind_param(
                              $stmt,
                              "ssssssssssssssssssssssss",
                              $surname,
                              $otherName,
                              $address,
                              $city,
                              $dateOfBirth,
                              $gender,
                              $state,
                              $phone,
                              $zipCode,
                              $email,
                              $country,
                              $idCard,
                              $idNumber,
                              $turnover,
                              $branch,
                              $accountType,
                              $deposit,
                              $username,
                              $password,
                              $occupation,
                              $currency,
                              $accountNumber,
                              $transferCode,
                              $imageUrl
                         );
                         mysqli_stmt_execute($stmt);

                         session_start();
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = "Account created successfully";
                         header("Location:add-customer.php");
                    } else {
                         session_start();
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Email not sent";
                         header("Location:add-customer.php");
                    }
               }
          };
     };
}
