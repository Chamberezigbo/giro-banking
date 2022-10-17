<?php
session_start();
require_once('db.php');
require_once('../core/mail.php');

if (isset($_POST['send'])) {
     $debit = ($_POST['amount']) * 1;
     $accountNumber = trim($_POST['accountNumber']);
     $accountName = trim($_POST['accountName']);
     $narration = trim($_POST['narration']);
     $pin = trim($_POST['pin']);
     $credit = 0;

     $dbPin = (int)$_SESSION['transferCode'];
     $dbBalance = $_SESSION['balance'] * 1;
     $date = date("Y/m/d");
     $email = $_SESSION['email'];
     $status = true;



     if ($pin != $dbPin) {
          $_SESSION['error'] = 1;
          $_SESSION['errorMassage'] = "Incorrect Pin";
          header("Location:transfer.php");
     } elseif ($debit > $dbBalance) {
          $_SESSION['error'] = 1;
          $_SESSION['errorMassage'] = "Sorry Insufficient Balance ";
          header("Location:transfer.php");
     } else {
          $currentBalance = $dbBalance - $debit;
          $sql = "UPDATE  users SET balance ='$currentBalance'  WHERE email='$email'";
          $result = mysqli_query($conn, $sql);
          if ($result) {
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
                         $currentBalance,
                         $debit,
                         $accountNumber,
                         $accountName,
                         $status,
                         $narration
                    );
                    mysqli_stmt_execute($stmt);
                    $_SESSION['error'] = 1;
                    $_SESSION['errorMassage'] = "You have successfully transferred";
                    $_SESSION['balance'] =  $currentBalance;

                    // receive details //
                    $_SESSION['receiverName'] = $accountName;
                    $_SESSION['receiverNumber'] = str_pad(substr($accountNumber, -4), strlen($accountNumber), '*', STR_PAD_LEFT);
                    $_SESSION['debit'] =
                         number_format($debit);
                    $_SESSION['narration'] = $narration;

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
                                   Hi ' . $_SESSION['surname'] . '
                              </h1>
                              <h6 style="text-align: center; font-size:20px;">
                                   Giro Bank One Debit Alert <br><br>
                                   Please be informed that a DEBIT TRANSACTION occurred on your
                                   account
                              </h6>
                              <hr>
                              <p style="text-align: center; font-size:5px;">
                                   kindly find the details of your transaction below
                              </p>
                              <hr>
                              <p style="text-align: center; ">Fund Transfer Details</p>
                              <p style="text-align: center; ">
                                   Transaction ID ' . $_SESSION['receiverNumber'] . ' <br>
                                   Account Name ' . $_SESSION['receiverName'] . ' <br>
                                   Amount ' . $_SESSION['debit'] . ' <br>
                                   Ballance ' . $_SESSION['balance'] . ' <br>
                                   Transaction Date ' . $date . ' <br>
                              </p>
                              <hr>
                              <hr>
                              <p>
                                   This is an automated transaction Alert Service. You are getting the email because
                                   a transaction was initiated on your account <br><br>
                                   Please DO NOT reply this mail |
                              </p>
                              <img alt="Image" src="https://madonnajournalce.com/images/download1.png" style="display:block;height:auto;border:0;width:155px;max-width:100%;margin-left:auto;margin-right:auto;margin-top:10px;" title="Image" width="155" />
                         </body>
                         </html>';

                    sendMail($email, $_SESSION['surname'], 'Debit Alert', $body);

                    header("Location:200.code.php");
               };
          } else {
               echo (mysqli_error($conn));
               exit();
          }
     }
}
