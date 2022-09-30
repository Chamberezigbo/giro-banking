<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <h1 style="text-align: center;">
          Hi $_SESSION['surname']
     </h1>
     <h6 style="text-align: center; font-size:20px;">
          Giro Bank One Time Password <br><br>
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
          Trasaction ID $_SESSION['receiverNumber'] <br>
          Account Name $_SESSION['receiverName'] <br>
          Amont $_SESSION['debit'] <br>
          Transaction Date $date <br>
     </p>
     <hr>
     <hr>
     <p>
          This is automated trasaction Alert Services. you are getting the email because
          a transaction was initiated on your account <br><br>
          Please DO NOT reply this mail |
     </p>
</body>


</html>