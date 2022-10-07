<?php
session_start();
require_once('db.php');
require_once('../core/mail.php');

if (isset($_POST['send'])) {
     $accountNumber = trim($_POST['accountNumber']);
     $amount = trim($_POST['amount']);
     $date = date("Y/m/d");

     $sql = "UPDATE  users SET balance ='$amount'  WHERE accountNumber='$accountNumber'";
     $result = mysqli_query($conn, $sql);
     if ($result) {
          $sql = "SELECT * FROM users WHERE accountNumber = ?";
          $stmt = mysqli_stmt_init($conn);
          if (mysqli_stmt_prepare($stmt, $sql)) {
               mysqli_stmt_bind_param($stmt, "s", $email);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               if ($row = mysqli_fetch_assoc($result)) {
                    $email = $row['email'];
                    $surname = $row['surname'];
                    $otherName = $row['otherName'];
                    $balance = $row['balance'];
                    $body = '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                         <meta charset="UTF-8">
                         <meta http-equiv="X-UA-Compatible" content="IE=edge">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <title>Document</title>
                    </head>

                    <body>
                         <h1 style="text-align: center;">
                              Hi ' . $surname . '
                         </h1>
                         <h6 style="text-align: center; font-size:20px;">
                              Giro Bank One Credit Alert <br><br>
                              Please be informed that a account has been credited
                         </h6>
                         <hr>
                         <p style="text-align: center; font-size:5px;">
                              kindly find the details of your transaction below
                         </p>
                         <hr>
                         <p style="text-align: center; ">Fund Transfer Details</p>
                         <p style="text-align: center; ">
                              Transaction ID ' . $accountNumber . ' <br>
                              Account Name ' . $surname . ' <br>
                              Amount ' . $amount . ' <br>
                              Balance ' . $balance . ' <br>
                              Transaction Date ' . $date . ' <br>
                         </p>
                         <hr>
                         <hr>
                         <p>
                              This is an automated transaction Alert Service. You are getting the email because
                              a transaction was initiated on your account <br><br>
                              Please DO NOT reply this mail |
                         </p>
                    </body>
                    </html>';

                    sendMail($email, $_SESSION['surname'], 'Debit Alert', $body);
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = "Account successfully made found";

                    header("Location:transfer.php");
               }
          }
     } else {
          $_SESSION['error'] = 1;
          $_SESSION['errorMassage'] = " Incorrect Account Number";
          header("Location:transfer.php");
     }
}
