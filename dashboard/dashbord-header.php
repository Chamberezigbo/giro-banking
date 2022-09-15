<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <title>Giro Banking</title>

     <!-- Bootstrap CSS CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <!-- Our Custom CSS -->
     <link rel="stylesheet" href="../css/mycss.css?v=<?php echo time(); ?>">

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

     <div class="wrapper">
          <!-- Sidebar  -->
          <nav id="sidebar">
               <div class="sidebar-header">
                    <h5>Bootstrap Sidebar</h5>
                    <strong>BS</strong>
               </div>

               <ul class="list-unstyled components">
                    <li class="">
                         <a href="#homeSubmenu">
                              <i class="fas fa-home"></i>
                              Dashboard
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-briefcase"></i>
                              Transfer Funds
                         </a>
                         <a href="add-customer.php">
                              <i class="fas fa-copy"></i>
                              Add Customer
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-image"></i>
                              All Customers
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-question"></i>
                              Profile
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-paper-plane"></i>
                              Account Requisition
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-paper-plane"></i>
                              Change Password
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-paper-plane"></i>
                              User Guide
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-paper-plane"></i>
                              Logout
                         </a>
                    </li>
               </ul>
               <ul class="list-unstyled CTAs">
                    <img src="../images/download.png" class="img-thumbnail" alt="...">
               </ul>

          </nav>



          <!-- Page Content  -->
          <div id="content">

               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                         <button type="button" id="sidebarCollapse" class="btn btn-info">
                              <i class="fas fa-align-left"></i>
                              <span>Toggle Sidebar</span>
                         </button>

                         <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <img src="./images/aiony-haust-3TLl_97HNJo-unsplash.jpg" class="img-thumbnail" alt="..." width="35">
                         </button>

                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="nav navbar-nav ml-auto">
                                   <li class="nav-item active">
                                        <a class="nav-link" href="#">
                                             <h5>Business Account</h5>
                                             <span class="text-muted p">Balance</span>
                                             <span class="text-success p">
                                                  :GBP 1,407,962.00
                                             </span>
                                        </a>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </nav>