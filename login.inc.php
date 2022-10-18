<?php
if (session_status() === PHP_SESSION_NONE) {
     session_start();
}

if (isset($_POST['login'])) {
     require 'db.php';
     $email = trim($_POST['username']);
     $password = $_POST['password'];
     $date = date("Y/m/d");
     $time = date("h:i:sa");
     $fullDate = $date . " " . $time;

     if ($email == "admin@mail.com" && $password == "admin12345") {
          $_SESSION['auth'] = true;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
          header("Location:admin-dashboard/index.php");
     } else {
          $sql = "SELECT * FROM users WHERE username = '$email' OR email = '$email'";
          $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
          if (($result)) {
               if ($result['isBan'] == false) {
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = "Your account has been disabled ";
                    header("Location:index.php");
               } else {
                    if ($password === $result['password']) {
                         $sql = "UPDATE  users SET lastSeen = '$fullDate'  WHERE email= '$email'";
                         $resultSeen = mysqli_query($conn, $sql);
                         if ($resultSeen) {
                              $_SESSION['auth'] = true;
                              $_SESSION['start'] = time();
                              $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
                              $_SESSION['error'] = 0;
                              $_SESSION['sessionId'] = $result['id'];
                              $_SESSION['email'] = $result['email'];
                              $_SESSION['username'] = $result['username'];
                              $_SESSION['surname'] = strtoupper($result['surname']);
                              $_SESSION['otherName'] = strtoupper($result['otherName']);;
                              $_SESSION['balance'] =  $result['balance'];
                              $_SESSION['currency'] = $result['currency'];
                              $_SESSION['transferCode'] = $result['transferCode'];
                              $_SESSION['accountType'] = $result['accountType'];
                              $_SESSION['currency'] = $result['currency'];
                              $_SESSION['image'] = $result['imageUrl'];
                              $_SESSION['accountType'] = $result['accountType'];
                              $_SESSION['pin'] = $result['transferCode'];
                              $_SESSION['isDisapprove'] = $result['isDisapprove'];
                              $_SESSION['isShow'] = $result['isShow'];
                              $_SESSION['accountNumber'] = str_pad(substr($result['accountNumber'], -4), strlen($result['accountNumber']), '*', STR_PAD_LEFT);

                              header("Location:user-dashboard/");
                         } else {
                              $_SESSION['error'] = 1;
                              $_SESSION['errorMassage'] = "Error updating last seen";
                              header("Location:index.php");
                         }

                    } else {
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Invalid password.";
                         header("Location:index.php");
                    }
               }
          } else {
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Email or password not valid";
               header("Location:index.php");
          }
     }
}
