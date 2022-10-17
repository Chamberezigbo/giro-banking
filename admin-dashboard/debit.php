<?php
session_start();
require_once('db.php');
require_once('../core/mail.php');

$id = htmlspecialchars($_GET['id']);

if (!$id) die("Sorry you don't have permission to view this page");

if (isset($_POST['send'])) {
     $amount = trim($_POST['amount']);
     $narration = trim($_POST['narration']);
     $date = $_POST['date'];
     $status = 1;
     $credit = 0;

     $sql = "Select * from `users` WHERE id = $id";
     $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
     if ($result) {
          $balance = $result['balance'];
     } else {
          die("Sorry you don't have permission to view this page");
     }

     $newBalance = $balance - $amount;


     $sql = "UPDATE  users SET balance ='$newBalance'  WHERE id='$id'";
     $result = mysqli_query($conn, $sql);
     if ($result) {
          $sql = "SELECT * FROM users WHERE id = ?";
          $stmt = mysqli_stmt_init($conn);


          if (!mysqli_stmt_prepare($stmt, $sql)) {
               $_SESSION['error'] = 1;
               $_SESSION['errorMassage'] = " Error occurred with your login";
               header("Location:index.php");
               exit();
          } else {
               mysqli_stmt_bind_param($stmt, "s", $id);
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);
               if ($row = mysqli_fetch_assoc($result)) {
                    $email = $row['email'];
                    $surname = $row['surname'];
                    $accountName = $row['surname'] . " " . $row['otherName'];
                    $balance = $row['balance'];
                    $accountNumber = $row['accountNumber'];
                    $sql = "INSERT INTO statement (
                    email,date,credit,balance,debit,
                    accountNumber,accountName,status,narration
               ) VALUES (
                    ?,?,?,?,?,?,?,?,?
               )";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                         $_SESSION['error'] = 1;
                         $_SESSION['errorMassage'] = " Error occurred with your login";
                         header("Location:transfer.php");
                    } else {
                         mysqli_stmt_bind_param(
                              $stmt,
                              "sssssssss",
                              $email,
                              $date,
                              $credit,
                              $newBalance,
                              $amount,
                              $accountNumber,
                              $accountName,
                              $status,
                              $narration
                         );
                         mysqli_stmt_execute($stmt);
                    }
                    $body = '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                         <meta charset="UTF-8">
                         <meta http-equiv="X-UA-Compatible" content="IE=edge">
                         <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <title>Document</title>
                    </head>

                    <body>
                    <img alt="Image" src="https://madonnajournalce.com/images/download.png" style="display:block;height:auto;border:0;width:155px;max-width:100%;margin-left:auto;margin-right:auto;margin-bottom:10px;" title="Image" width="155" />
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
                         <p style="text-align: center; ">Debit Details</p>
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

                         <img alt="Image" src="https://madonnajournalce.com/images/download.png" style="display:block;height:auto;border:0;width:155px;max-width:100%;margin-left:auto;margin-right:auto;margin-bottom:10px;" title="Image" width="155" />
                    </body>
                    </html>';

                    sendMail($email, $surname, 'Credit Alert', $body);
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = "Account successfully found";

                    header("Location:transfer.php");
               } else {
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = " error with fetching user";
                    header("Location:transfer.php");
               }
          }
     } else {
          $_SESSION['error'] = 1;
          $_SESSION['errorMassage'] = " Incorrect Account Number";
          header("Location:transfer.php");
     }
}
