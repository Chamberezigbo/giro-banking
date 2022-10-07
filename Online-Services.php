<? require_once("header.php"); ?>

<!-- main is required to evaluate the article length. -->
<main>
     <table class="Subsection-Table" style="background-image: url('ContentImageHandlereb2f.jpg?imageId=119501');">
          <tbody>
               <tr>
                    <td>
                         <table>
                              <tbody>
                                   <tr>
                                        <td width="50%">
                                             <h1>Online Services</h1>
                                             <ul class="List-Checkmark">
                                                  <li><a href="index.php">Open an Account</a></li>
                                                  <li><a href="index.php">Online Banking &amp; Bill Pay</a></li>
                                                  <li><a href="index.php">eStatements</a></li>
                                             </ul>
                                        </td>
                                        <td>&nbsp;</td>
                                   </tr>
                              </tbody>
                         </table>
                    </td>
               </tr>
          </tbody>
     </table>
     <table class="Subsection-Table">
          <tbody>
               <tr>
                    <td>
                         <h2><a id="Open-Account"></a>Open an Account</h2>
                         <p>It&rsquo;s fast and easy to open an account with your community&rsquo;s bank, right here, right now!</p>
                         <p>If you&rsquo;re already a Giro Federal customer just&nbsp;<a href="index.html">login</a> to your online banking portal to open a new account. See the&nbsp;<a href="../accountcreate.fiservapps.com/app/AC_4074/Docs/FAQ.pdf" target="_blank">Online Account Opening FAQs</a> for more information.</p>
                         <p>If you&rsquo;re new to Giro Federal Bank &amp; Trust and you&rsquo;re ready to experience superior service, here is the information you&rsquo;ll require to complete the online application:</p>
                         <ul>
                              <li>Social Security Number</li>
                              <li>Date of Birth</li>
                              <li>Valid PA Driver&rsquo;s license or PA State ID</li>
                              <li>Current bank account and routing numbers to fund the new account</li>
                         </ul>
                         <p><a class="Button1" href="index.php" target="_blank">Open Now</a></p>
                    </td>
               </tr>
          </tbody>
     </table>
     <table class="Subsection-Table">
          <tbody>
               <tr>
                    <td>
                         <h2><a id="Online-Banking"></a>Online Banking &amp; Bill Pay</h2>
                         <p>Be in control of your money 24 hours a day from any personal device. Check balances, transfer money between accounts, pay bills - it&rsquo;s safe, secure, easy to use, and it&rsquo;s free!</p>
                         <p><a class="Button1" href="index.php">Enroll Now</a>&nbsp;<a class="Button2" href="index.php">View Demo</a></p>
                    </td>
               </tr>
          </tbody>
     </table>
     <table class="Subsection-Table">
          <tbody>
               <tr>
                    <td>
                         <h2><a id="eStatements"></a>eStatements</h2>
                         <p>Save time. Save trees. Switch to eStatements today and we will make a donation to local conservation groups. eStatements are fast, convenient, secure and environmentally friendly. You will receive an email when your statement is available to view, search, save and print online.</p>
                         <p>Switch today by selecting 'Electronic Statements' under the Profile tab when you login to Online Banking. Call your <a href="index.php">local branch </a>office for questions regarding eStatements.&nbsp;</p>
                    </td>
               </tr>
          </tbody>
     </table>
     <table class="Subsection-Table">
          <tbody>
               <tr>
                    <td>
                         <h2><a id="Lost-Card"></a>Report a Lost or Stolen Debit or Credit Card</h2>
                         <p>To report a lost, stolen or compromised Giro bank Debit or Credit Card, please call +447418360749 immediately. Listen closely to the prompts.</p>
                    </td>
               </tr>
          </tbody>
     </table>
     <table class="Subsection-Table">
          <tbody>
               <tr>
                    <td>
                         <h2><a id="Reorder-Checks"></a>Reorder Checks</h2>
                         <p>If it has been <strong><em>less than 3 years</em></strong> since receiving your last order of checks, you may simply reorder by clicking the link below.</p>
                         <p><a href="index.php" class="Button1" title="Reorder Checks" target="_blank">Reorder Checks</a></p>
                         <p>You may also call your local branch office or stop in with your reorder form.</p>
                         <ul>
                              <li><a href="index.php">Giro Office</a></li>
                              <li><a href="index.php">Royersford Office</a></li>
                              <li><a href="index.php">Collegeville Office</a></li>
                              <li><a href="index.php">Kimberton Office</a></li>
                              <li><a href="index.php">Limerick Office</a></li>
                         </ul>
                    </td>
               </tr>
          </tbody>
     </table>
     <p>&nbsp;</p>
</main>
<script>
     //404 script if the article is blank
     var main = document.getElementsByTagName('main')[0];
     if (main.innerHTML.length < 5) {
          window.location.href = 'Error-404.php'; //Use the 404 error article name
     }
</script>

<?php require_once('./footer.php'); ?>