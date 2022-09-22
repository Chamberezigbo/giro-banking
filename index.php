<?php
session_start();
require_once('login.inc.php');
?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<!-- Mirrored from www.phoenixfed.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 13:03:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
     <link rel="manifest" href="manifest.json">
     <link rel="mask-icon" href="safari-pinned-tab.svg" color="#e03a3e">
     <meta name="apple-mobile-web-app-title" content="Giro Federal Bank &amp; Trust">
     <meta name="application-name" content="Giro Federal Bank &amp; Trust">
     <meta name="msapplication-TileColor" content="#e03a3e">
     <meta name="theme-color" content="#e03a3e">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link href="../fonts.googleapis.com/cssf267.css?family=Droid+Serif:400,400i,700,700i|EB+Garamond:400,400i|Open+Sans:400,400i,600,600i,700,700i|Roboto:100,400" rel="stylesheet">
     <link href="css/fiserv30f4.css?v=3" rel="stylesheet">
     <link href="css/style-generated30f4.css?v=3" rel="stylesheet">
     <link href="css/style1bce.css?v=10" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-74642244-1"></script>
     <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
               dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'UA-74642244-1');
     </script>
     <meta name="SiteCheck" content="0b02bfb1c618139ab6d8f92df8b9daaf" />
     <link href="css/slideshow.css" rel="stylesheet" type="text/css" />
     <title>Giro Bank</title>
     <meta name="description" content="Giro Federal Bank & Trust is a community bank located in Giro, Pennsylvania with branches in Giro, Collegeville, Limerick, and Royersford. Offers personal and business checking & savings, wealth management and home loans." />
     <meta name="keywords" content="Giro Bank trust Royersford Collegeville Limerick free checking account  mobile banking  home equity loans & lines mortgage loans business banking wealth management brokerage investments retirement savings" />
</head>

<body class="top-of-page home">
     <!-- personal | business | lending | wealth -->
     <div id="notice-android-tablet" class="notice appbanner">
          <div style="position:relative">
               <div class="noticeHtml">
                    <div class="app-inner-content">
                         <p>
                              <a class="icon" href="https://play.google.com/store/apps/details?id=com.phoenixville.tablet">
                                   <img src="images/icon.png" alt="Giro Fed Google Play App Icon"></a>
                         </p>
                         <p>Giro Fed<br />Free in Google Play</p>
                         <p><a href="https://play.google.com/store/apps/details?id=com.phoenixville.tablet" class="button-app">Download</a></p>
                    </div>
                    <!--/app-inner-content-->
               </div>
          </div>
     </div>
     <div id="notice-android" class="notice appbanner">
          <div style="position:relative">
               <div class="noticeHtml">
                    <div class="app-inner-content">
                         <p>
                              <a class="icon" href="https://play.google.com/store/apps/details?id=com.phoenixville.mobile">
                                   <img src="images/icon.png" alt="Giro Fed Google Play App Icon"></a>
                         </p>
                         <p>Giro Fed<br />Free in Google Play</p>
                         <p><a href="https://play.google.com/store/apps/details?id=com.phoenixville.mobile" class="button-app">Download</a></p>
                    </div>
                    <!--/app-inner-content-->
               </div>
          </div>
     </div>
     <div id="notice-ipad" class="notice appbanner">
          <div style="position:relative">
               <div class="noticeHtml">
                    <div class="app-inner-content">
                         <p>
                              <a class="icon" href="https://itunes.apple.com/us/app/phoenix-fed-for-ipad/id779576923?mt=8">
                                   <img src="images/icon.png" alt="Giro Fed Apple Store App Icon"></a>
                         </p>
                         <p>Giro Fed<br />Free in the App Store</p>
                         <p><a href="https://itunes.apple.com/us/app/phoenix-fed-for-ipad/id779576923?mt=8" class="button-app">Download</a></p>
                    </div>
                    <!--/app-inner-content-->
               </div>
          </div>
     </div>
     <div id="notice-iphone" class="notice appbanner">
          <div style="position:relative">
               <div class="noticeHtml">
                    <div class="app-inner-content">
                         <p>
                              <a class="icon" href="https://itunes.apple.com/us/app/phoenix-fed/id779525640?mt=8">
                                   <img src="images/icon.png" alt="Giro Fed Apple Store App Icon">
                              </a>
                         </p>
                         <p>Giro Fed <br />Free in the App Store</p>
                         <p><a href="https://itunes.apple.com/us/app/phoenix-fed/id779525640?mt=8" class="button-app">Download</a></p>
                    </div>
                    <!--/app-inner-content-->
               </div>
          </div>
     </div>
     <p class="browser-upgrade fixed"><strong>Internet Explorer 11 is outdated.</strong> <span>For improved security and
               optimized performance we highly recommend upgrading your browser.</span> <a href="https://www.google.com/chrome" class="fa-chrome" title="Chrome"><span class="visuallyhidden">Chrome</span></a><a href="https://www.mozilla.org/firefox/" class="fa-firefox" title="Firefox"><span class="visuallyhidden">Firefox</span></a><a href="https://www.microsoft.com/edge" class="fa-edge" title="Edge"><span class="visuallyhidden">Edge</span></a></p>
     <a id="top"></a>
     <div id="page">
          <header>
               <!-- alert for error -->
               <?php if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
                    <div class="alert alert-warning alert-dismissible fade show w-25 ml-auto" role="alert" id="alertActivation">
                         <strong>
                              <?php echo $_SESSION['errorMassage']; ?>
                              <?php $_SESSION['error'] = 0   ?>
                         </strong>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

               <?php } ?>

               <section>
                    <a href="index.html" id="logo-link">
                         <img src="images/download.png" class="img-thumbnail" alt="...">
                    </a>
                    <div id="personalization">
                         <div id="greetingXY">
                              <div id="guestWelcome" class="ellipsis"><span id="greeting1" class="greeting">Welcome,</span> <span class="firstname">Guest</span><span id="greeting2" class="date-and-time"> to Giro Bank &amp;
                                        Trust</span>
                              </div>
                         </div>
                    </div>

                    <a href="tel:1-610-933-1000" class="fa-phone">Call Today <span class="smaller-line">610-933-1000</span></a>
                    <a href="Locations-Hours.html" class="fa-clock-o">Our Hours <span class="smaller-line">Choose a
                              location</span></a>
               </section>
          </header>
          <nav id="primary" class="nav">
               <div>
                    <div>
                         <a href="index.html" class="mobile-logo">
                              <img src="images/download.png" class="img-thumbnail" id="Mobile-Logo" alt="...">
                              <div>
                                   <a href="javascript:void(0)" id="loginopen" class="Button1 fa-lock"><span>Login</span></a>
                                   <a href="javascript:void(0)" id="menuopen" class="fa-bars"><span class="visuallyhidden">Menu</span></a>
                              </div>
                    </div>
                    <ul>
                         <li id="logo"><a href="index.html">
                                   <img src="images/download.png" class="img-thumbnail" id="Logo-Mark" alt="...">
                              </a></li>
                         <li>
                              <a href="javascript:void(0)">Personal</a>
                              <div>
                                   <div>
                                        <h3>Deposit Products</h3>
                                        <ul>
                                             <li><a href="Personal-Savings.php">Checking</a></li>
                                             <li><a href="Personal-Savings.php">Savings</a></li>
                                             <li><a href="Personal-Savings.php">CDs &amp; IRAs, Money Markets</a></li>
                                             <li><a href="Personal-Savings.php">Vacation Club + Holiday
                                                       Club Accounts</a></li>
                                             <li><a href="Debit-Cards.php">Debit Cards</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Online Services</h3>
                                        <ul>
                                             <li><a href="Online-Services.html#Online-Banking">Online Banking &amp; Bill
                                                       Pay</a></li>
                                             <li><a href="Mobile-Services.html">Mobile Banking &amp; Mobile Deposit</a>
                                             </li>
                                             <li><a href="Online-Services.html#eStatements">eStatements</a></li>
                                             <li><a href="about-us.php">Open an Account</a></li>
                                             <li><a href="about-us.php">Apple Pay</a></li>
                                             <li><a href="about-us.php">PopMoney</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Lending</h3>
                                        <ul>
                                             <li><a href="about-us.php">Mortgages</a></li>
                                             <li><a href="about-us.php">Construction</a></li>
                                             <li><a href="about-us.php">Home Equity Loans / Lines
                                                       of Credit</a></li>
                                             <li><a href="about-us.php">Student Loans</a></li>

                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Other</h3>
                                        <ul>
                                             <li><a href="about-us.php">Reorder Checks</a></li>
                                             <li><a href="about-us.php">Personal Credit Cards</a></li>
                                             <li><a href="about-us.php">Calculators</a></li>
                                             <li><a href="about-us.php">Rates</a></li>
                                        </ul>
                                   </div>
                                   <table class="Table-Nav-Promo">
                                        <tbody>
                                             <tr>
                                                  <td>
                                                       <p><img src="ContentImageHandlerefa3.png?ImageId=175814" alt="Portable Speaker transparent" border="0" /></p>
                                                       <p>Checking</p>
                                                       <p>PXV Fed Gives Back!</p>
                                                       <p>Open any checking account today and get this FREE gift!</p>
                                                       <p><a class="Button1" href="Personal-Savings.php">Learn
                                                                 More</a></p>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>
                                   <p>&nbsp;</p>

                              </div>
                         </li>
                         <li>
                              <a href="javascript:void(0)">Business</a>
                              <div>
                                   <div>
                                        <h3>Deposit Products</h3>
                                        <ul>
                                             <li><a href="">Business Checking</a></li>
                                             <li><a href="">Non-Profit Checking</a>
                                             </li>
                                             <li><a href="">CDs &amp; IRAs, Money Markets</a></li>
                                             <li><a href="Debit-Cards.php">Debit Cards</a></li>
                                        </ul>
                                        <h3>Online Services</h3>
                                        <ul>
                                             <li><a href="about-us.php">Online Banking &amp; Bill
                                                       Pay</a></li>
                                             <li><a href="">Mobile Banking &amp; Mobile Deposit</a>
                                             </li>
                                             <li><a href="#eStatements">eStatements</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Lending</h3>
                                        <ul>
                                             <li><a href="B#Mortgages">Mortgages</a></li>
                                             <li><a href="B#Construction">Construction</a></li>
                                             <li><a href="B#Loans-LOC">Business Loans/Lines of
                                                       Credit</a></li>

                                             <li><a href="B#Letters-of-Credit">Letters of Credit</a>
                                             </li>
                                             <li><a href="B#SBA">SBA Financing</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Other</h3>
                                        <ul>
                                             <li><a href="Business-Credit-Cards.html">Business Credit Cards</a></li>
                                             <li><a href="Merchant-Services.html">Merchant Services</a></li>
                                             <li><a href="Online-Services.html#Reorder-Checks">Reorder Checks</a></li>
                                             <li><a href="Calculators-2.html">Calculators</a></li>
                                             <li><a href="Rates.html">Rates</a></li>
                                        </ul>
                                   </div>
                                   <table class="Table-Nav-Promo">
                                        <tbody>
                                             <tr>
                                                  <td>
                                                       <p><img src="ContentImageHandlerb086.jpg?imageId=120038" alt="" /></p>
                                                       <p>Checking</p>
                                                       <p>FREE Business Checking</p>
                                                       <p>1,000 free transactions per month!</p>
                                                       <p><a href="Business-Checking.html" class="Button1">Learn
                                                                 More</a></p>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>

                              </div>
                         </li>
                         <li>
                              <a href="javascript:void(0)">Lending</a>
                              <div>
                                   <div>
                                        <h3>Personal Lending</h3>
                                        <ul>
                                             <li><a href="Personal-Lending.html#Mortgages">Mortgages</a></li>
                                             <li><a href="Personal-Lending.html#Construction">Construction</a></li>
                                             <li><a href="Personal-Lending.html#Home-Equity">Home Equity Loans / Lines
                                                       of Credit</a></li>
                                             <li><a href="Student-Loans.html">Student Loans</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Business Lending</h3>
                                        <ul>
                                             <li><a href="Business-Lending.html#Mortgages">Mortgages</a></li>
                                             <li><a href="Business-Lending.html#Construction">Construction</a></li>
                                             <li><a href="Business-Lending.html#Loans-LOC">Loans / Lines of Credit</a>
                                             </li>
                                             <li><a href="Business-Lending.html#Letters-of-Credit">Letters of Credit</a>
                                             </li>
                                             <li><a href="Business-Lending.html#SBA">SBA Financing</a></li>
                                        </ul>
                                   </div>

                                   <div>
                                        <h3>Other</h3>
                                        <ul>
                                             <li><a href="Credit-Cards.html">Personal Credit Cards</a></li>
                                             <li><a href="Business-Credit-Cards.html">Business Credit Cards</a></li>
                                             <li><a href="Calculators-2.html">Calculators</a></li>
                                        </ul>
                                   </div>
                                   <table class="Table-Nav-Promo">
                                        <tbody>
                                             <tr>
                                                  <td>
                                                       <p><img src="ContentImageHandlere589.jpg?imageId=120039" alt="" /></p>
                                                       <p>Home Equity</p>
                                                       <p>Put Your Hometown Bank to Work for You.</p>
                                                       <p>We're ready to help you get started with a home equity loan or
                                                            line of credit today!</p>
                                                       <p><a href="Personal-Lending.html#Home-Equity" class="Button1">Let's Get Started</a></p>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>

                              </div>
                         </li>
                         <li>
                              <a href="javascript:void(0)">Wealth Management</a>
                              <div>
                                   <div>
                                        <h3>Financial Planning</h3>
                                        <ul>
                                             <li><a href="Financial-Planning.html#Investment">Investment Management</a>
                                             </li>
                                             <li><a href="Financial-Planning.html#Wealth">Wealth Planning</a></li>
                                             <li><a href="Financial-Planning.html#Tax">Tax Planning</a></li>
                                             <li><a href="Financial-Planning.html#Nest-Egg">Nest Egg</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Trusts &amp; Fiduciary Services</h3>
                                        <ul>
                                             <li><a href="Trust-Fiduciary.html">Estate Settlement</a></li>
                                             <li><a href="Trust-Fiduciary.html">Agent for Trustee</a></li>
                                        </ul>
                                        <h3>Online Services</h3>
                                        <ul>
                                             <li><a href="https://login2.fisglobal.com/idp/TSS358/?ClientID=WebLinkUI" target="_blank">Portfolio Login</a></li>
                                        </ul>
                                   </div>
                                   <div>
                                        <h3>Other</h3>
                                        <ul>
                                             <li><a href="Wealth-Management.html">About Wealth Management</a></li>
                                             <li><a href="Wealth-Management.html#Schedule">Schedule an Appointment</a>
                                             </li>
                                             <li><a href="Wealth-Management.html#Newsletter">Wealth Management
                                                       Newsletter</a></li>
                                        </ul>
                                   </div>
                                   <table class="Table-Nav-Promo">
                                        <tbody>
                                             <tr>
                                                  <td>
                                                       <p><img src="ContentImageHandlera41a.jpg?imageId=120040" alt="" /></p>
                                                       <p>Nest Egg</p>
                                                       <p>Our Easiest Investing Option.</p>
                                                       <p>Open a Nest Egg account online from anywhere with as little as
                                                            $1,000.</p>
                                                       <p><a href="Financial-Planning.html#Nest-Egg" class="Button1">Learn More</a></p>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>

                              </div>
                         </li>
                    </ul>
               </div>
          </nav>

          <section id="hero-main">
               <!-- cms content here -->
               <table class="Table-Slide">
                    <tbody>
                         <tr>
                              <td valign="top">
                                   <p><img src="ContentImageHandler6b01.jpg?imageId=120732" alt="Family in front of house" border="0" /></p>
                                   <h2>Home Equity</h2>
                                   <h2>Renovate or Consolidate?</h2>
                                   <p>It&rsquo;s your choice when the friendly knowledgeable staff at your hometown bank
                                        helps you navigate through the Home Equity process. Let&rsquo;s see what your
                                        home can do for you.</p>
                                   <p><a class="Button1" href="Personal-Lending.html#Home-Equity">Learn More</a></p>
                              </td>
                         </tr>
                    </tbody>
               </table>
               <table class="Table-Slide">
                    <tbody>
                         <tr>
                              <td valign="top">
                                   <p><img src="ContentImageHandlerb828.jpg?imageId=119740" alt="Wrapped present" border="0" /></p>
                                   <h2>Free Checking</h2>
                                   <h2>More than Free&hellip;</h2>
                                   <p>Giro rewards you with a gift when you sign up for any checking
                                        account. Discover which one of our four checking accounts is perfect for you.
                                   </p>
                                   <p><a class="Button1" href="Personal-Checking.html">Check it out!</a></p>
                              </td>
                         </tr>
                    </tbody>
               </table>
               <table class="Table-Slide">
                    <tbody>
                         <tr>
                              <td valign="top">
                                   <p>&nbsp;</p>
                                   <h2>&nbsp;</h2>
                              </td>
                         </tr>
                    </tbody>
               </table>
               <table class="Table-Slide">
                    <tbody>
                         <tr>
                              <td valign="top">
                                   <p><img src="ContentImageHandlerdb8c.jpg?imageId=119741" alt="People shaking hands" border="0" /></p>
                                   <h2>Small Business</h2>
                                   <h2>Building Community, One Business at a Time.</h2>
                                   <p>Small businesses create the majority of new jobs and Giro is there
                                        to support them all. Discover why local owner operators love to operate with
                                        Giro, the community&rsquo;s bank!</p>
                                   <p><a class="Button1" href="Business-Lending.html">Reach Out</a></p>
                              </td>
                         </tr>
                    </tbody>
               </table>
               <table class="Table-Slide">
                    <tbody>
                         <tr>
                              <td valign="top">
                                   <p><img src="ContentImageHandler3606.jpg?ImageId=168945" alt="Collegeville Renovation Rendering" border="0" /></p>
                              </td>
                         </tr>
                    </tbody>
               </table>

               <!-- /cms content here -->
          </section>
          <!--/hero-main-->
          <div id="homenav">
               <div class="inner-content">
                    <ul class="nav2 group">
                         <li class="homenavitem">
                              <a href="javascript:void(0)" class="homenavdoor">
                                   <i class="homeicon icon-nav-deposit"></i>
                                   <h2>Personal</h2>
                                   <h2>Banking</h2>
                              </a>
                              <div class="homenavContent">
                                   <h2>Personal Banking</h2>
                                   <ul>
                                        <li><a href="Personal-Checking.html">Checking</a></li>
                                        <li><a href="Personal-Savings.html">Savings</a></li>
                                        <li><a href="CD-IRA.html">CD &amp; IRA</a></li>
                                        <li><a href="CD-IRA.html#Money-Market">Money Market</a></li>
                                        <li><a href="Debit-Cards.html">Debit Cards</a></li>
                                   </ul>
                              </div>
                         </li>
                         <li class="homenavitem">
                              <a href="javascript:void(0)" class="homenavdoor">
                                   <i class="homeicon icon-nav-business"></i>
                                   <h2>Business</h2>
                                   <h2>Banking</h2>
                              </a>
                              <div class="homenavContent">
                                   <h2>Business Banking</h2>
                                   <ul>
                                        <li><a href="Business-Checking.html">Checking</a></li>
                                        <li><a href="Business-CD-IRA.html">CD &amp; IRA</a></li>
                                        <li><a href="Business-CD-IRA.html#Money-Market">Money Market</a></li>
                                        <li><a href="Merchant-Services.html">Merchant Services</a></li>
                                   </ul>
                              </div>
                         </li>
                         <li class="homenavitem">
                              <a href="javascript:void(0)" class="homenavdoor">
                                   <i class="homeicon icon-computer"></i>
                                   <h2>Lending</h2>
                                   <h2>Solutions</h2>
                              </a>
                              <div class="homenavContent">
                                   <h2>Lending Solutions</h2>
                                   <ul>
                                        <li><a href="Personal-Lending.html#Mortgages">Mortgages</a></li>
                                        <li><a href="Personal-Lending.html#Home-Equity">Home Equity Loans + Lines</a>
                                        </li>

                                        <li><a href="Business-Lending.html">Business Lending</a></li>
                                        <li><a href="Business-Lending.html#Loans-LOC">Business Loans &amp; Lines of
                                                  Credit</a></li>
                                        <li><a href="Student-Loans.html">Student Loans</a></li>
                                   </ul>
                              </div>
                         </li>
                         <li class="homenavitem">
                              <a href="javascript:void(0)" class="homenavdoor">
                                   <i class="homeicon icon-fiserv-logo"></i>
                                   <h2>Wealth</h2>
                                   <h2>Management</h2>
                              </a>
                              <div class="homenavContent">
                                   <h2>Wealth Management</h2>
                                   <ul>
                                        <li><a href="Financial-Planning.html">Financial Planning</a></li>
                                        <li><a href="Trust-Fiduciary.html">Trust Services &amp; Fiducuary Services</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                    </ul>
               </div>
          </div>
          <table class="Subsection-Table" style="background-image: url('ContentImageHandlera75a.ashx?imageId=119636');">
               <tbody>
                    <tr>
                         <td>
                              <table width="100%">
                                   <tbody>
                                        <tr>
                                             <td width="50%">&nbsp;</td>
                                             <td>
                                                  <h2>Easy and Secure</h2>
                                                  <p>Online Account Opening 24/7. It&rsquo;s easy to start banking with
                                                       Giro and it can all be done online, safely and
                                                       securely, in just 10 minutes!</p>
                                                  <p><a class="Button1" href="https://phoenixfed.originate.fiservapps.com/386IAKlgq9aI*Pe/getting-started/landing-page">Open
                                                            Now</a><a class="Button2" href="Online-Services.html">Learn
                                                            More</a></p>
                                             </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </td>
                    </tr>
               </tbody>
          </table>
          <table width="100%" class="Subsection-Table" style="background-image: url('ContentImageHandler6c92.jpg?imageId=119637');">
               <tbody>
                    <tr>
                         <td>
                              <table>
                                   <tbody>
                                        <tr>
                                             <td width="50%">
                                                  <h2>Free Business Checking</h2>
                                                  <p>1000 free transactions per month! Giro Federal is your one
                                                       source for the variety and convenience your business deserves.
                                                       Discover why more local businesses bank with us.</p>
                                                  <p><a class="Button1" href="Business-Checking.html">Learn More</a></p>
                                             </td>
                                             <td>&nbsp;</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </td>
                    </tr>
               </tbody>
          </table>
          <table class="Table-Flex-Feature" id="quick-access">
               <tbody>
                    <tr>
                         <td><img src="ContentImageHandler70da.png?ImageId=120106" alt="Your Community's Bank TM" width="435" height="40" /></td>
                    </tr>
                    <tr>
                         <td>
                              <p><img src="ContentImageHandler4dcd.jpg?ImageId=166803" alt="Free Checking Free Gift homepage" border="0" /></p>
                              <p class="Bar-Blue">COMMUNITY</p>
                              <p>Free Checking Free Gift</p>
                              <p>Open a Free Checking Account and receive a Free Gift!</p>
                              <p><a href="Personal-Checking.html" target="_blank" class="Button1" title="Dogwwod Week">More Information</a></p>
                         </td>
                         <td>
                              <p><img src="ContentImageHandler6863.jpg?ImageId=155676" alt="Wealth of Wisdom" border="0" /></p>
                              <p class="Bar-Red"><span style="background-color: #e03a3e;">COMMUNITY</span></p>
                              <p>Back to Basics</p>
                              <p>Join us in 2022 as we get back to the basics of finances and planning for the future in
                                   our monthly webinar series.</p>
                              <p><a href="News-Community-Events.html#Wisdom" class="Button1">Learn More</a></p>
                         </td>
                         <td>
                              <p><img src="ContentImageHandlerea2c.jpg?ImageId=153628" alt="Coronavirus Scams" border="0" /></p>
                              <p class="Bar-Red">EDUCATION</p>
                              <p>Federal Trade Commission Warns of Coronavirus Scams</p>
                              <p>Learn 5 things to avoid:</p>
                              <p><a href="contact_tracing_scams_infographic-1-508%20(1)7948.pdf?documentId=68364" target="_blank" class="Button1">Contact Tracing Scams</a></p>
                              <p><a href="keep_calm_infographic_en_letter_rev_508%20(1)2d19.pdf?documentId=68363" target="_blank" class="Button2">Coronavirus Scams</a></p>
                         </td>
                         <td>
                              <p><a title="Keeping the Lights On" href="speedbump3cf3.html?link=https://drive.google.com/file/d/1EZcOATGgYJFSlGCeQ2Pxd2yM5EoQOoS2/view" target="_blank"><img src="ContentImageHandler0f58.jpg?ImageId=120926" alt="Video_Keeping_Lights" border="0" /></a></p>
                              <p class="Bar-Blue">WATCH VIDEO</p>
                              <p>Watch Our Story</p>
                              <p>We have been making dreams come true and impacting the lives of our neighbors for over
                                   100 years.</p>
                              <p><a title="Keeping the Lights On" class="Button1" href="https://drive.google.com/file/d/1EZcOATGgYJFSlGCeQ2Pxd2yM5EoQOoS2/view" target="_blank">Watch Now</a></p>
                         </td>
                    </tr>
               </tbody>
          </table>
          <p>&nbsp;</p>
          <? require_once("footer.php") ?>