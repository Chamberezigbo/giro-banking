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
     <link rel="stylesheet" href="css/mycss.css">

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

     <div class="wrapper">
          <!-- Sidebar  -->
          <nav id="sidebar">
               <div class="sidebar-header">
                    <h3>Bootstrap Sidebar</h3>
                    <strong>BS</strong>
               </div>

               <ul class="list-unstyled components">
                    <li class="">
                         <a href="#homeSubmenu">
                              <i class="fas fa-home"></i>
                              Home
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-briefcase"></i>
                              About
                         </a>
                         <a href="#pageSubmenu">
                              <i class="fas fa-copy"></i>
                              Pages
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-image"></i>
                              Portfolio
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-question"></i>
                              FAQ
                         </a>
                    </li>
                    <li>
                         <a href="#">
                              <i class="fas fa-paper-plane"></i>
                              Contact
                         </a>
                    </li>
               </ul>
               <ul class="list-unstyled CTAs">
                    <img src="images/download.png" class="img-thumbnail" alt="...">
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


               <!-- TradingView Widget BEGIN -->
               <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright">
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                         {
                              "symbols": [{
                                        "proName": "FOREXCOM:SPXUSD",
                                        "title": "S&P 500"
                                   },
                                   {
                                        "proName": "FOREXCOM:NSXUSD",
                                        "title": "US 100"
                                   },
                                   {
                                        "proName": "FX_IDC:EURUSD",
                                        "title": "EUR/USD"
                                   },
                                   {
                                        "proName": "BITSTAMP:BTCUSD",
                                        "title": "Bitcoin"
                                   },
                                   {
                                        "proName": "BITSTAMP:ETHUSD",
                                        "title": "Ethereum"
                                   }
                              ],
                              "showSymbolLogo": false,
                              "colorTheme": "light",
                              "isTransparent": true,
                              "displayMode": "adaptive",
                              "locale": "en"
                         }
                    </script>
               </div>
               <!-- TradingView Widget END -->
               <div class="line"></div>

          </div>

     </div>

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

     <script type="text/javascript">
          $(document).ready(function() {
               $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
               });
          });
     </script>
</body>

</html>