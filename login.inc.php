<?php
if (session_status() === PHP_SESSION_NONE) {
     session_start();
}

if (isset($_POST['login'])) {
     require 'db.php';
     $email = trim($_POST['username']);
     $password = $_POST['password'];

     if ($email == "admin@mail.com" && $password == "admin12345") {
          $_SESSION['auth'] = true;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
          header("Location:admin-dashboard/index.php");
     } else {
          $sql = "SELECT * FROM users WHERE email = ?";
          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Error occurred with your login";
               header("Location:index.php");
               exit();
          } else {
               mysqli_stmt_bind_param($stmt, "s", $email);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               if ($row = mysqli_fetch_assoc($result)) {
                    if ($password === $row['password']) {

                         $_SESSION['auth'] = true;
                         $_SESSION['start'] = time();
                         $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                         $_SESSION['error'] = 0;
                         $_SESSION['sessionId'] = $row['id'];
                         $_SESSION['email'] = $row['email'];
                         $_SESSION['surname'] = strtoupper($row['surname']);
                         $_SESSION['otherName'] = strtoupper($row['otherName']);;
                         $_SESSION['balance'] =  $row['balance'];
                         $_SESSION['currency'] = $row['currency'];
                         $_SESSION['transferCode'] = $row['transferCode'];
                         $_SESSION['accountType'] = $row['accountType'];
                         $_SESSION['currency'] = $row['currency'];
                         $_SESSION['image'] = $row['imageUrl'];
                         $_SESSION['accountType'] = $row['accountType'];
                         $_SESSION['accountNumber'] = str_pad(substr($row['accountNumber'], -4), strlen($row['accountNumber']), '*', STR_PAD_LEFT);

                         header("Location:user-dashboard/");
                    } else {
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Invalid password.";
                         header("Location:index.php");
                    }
               } else {
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " Email or password not valid";
                    header("Location:index.php");
               }
          }
     }
}
