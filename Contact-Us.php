<? require_once("header.php") ?>
<!-- main is required to evaluate the article length. -->
<main>
     <table class="Subsection-Table" style="background-image: url('ContentImageHandler0a2f.html?imageId=119579');">
          <tbody>
               <tr>
                    <td>
                         <table>
                              <tbody>
                                   <tr>
                                        <td width="50%">
                                             <h1>Contact Us</h1>
                                             <p>Get in touch.</p>
                                             <p>Whatever is on your mind, we&rsquo;re listening and ready to help. No annoying automated phone loops. Our knowledgeable staff are here to answer your calls and are ready to help with whatever you need.</p>
                                             <p><a href="index.php" class="Button1">Branch Locations</a></p>
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
                         <h2>Phone</h2>
                         <p>Call one of our&nbsp;<a href="index.php">branch locations</a> to speak to a member of our knowledgeable staff.</p>
                         <h3>24 Hour Telephone Banking</h3>
                         <p>CALL +447418360749</p>
                         <p>Giro customers may dial in from just about anywhere, and use a Personal Identification Number (PIN) to access account balances, transfer funds between accounts, and get the most up-to-date rates.</p>
                    </td>
               </tr>
          </tbody>
     </table>
     <table class="Subsection-Table">
          <tbody>
               <tr>
                    <td>
                         <h2>Email</h2>
                         <p>Use the Email girobank@mail.com </p>
                         <p class="Disclaimer">NOTE: This contact form should not be considered as a secure method of sending private information to the bank. Do not use this contact form to send sensitive information such as passwords, account numbers or social security numbers.</p>
                         <a href="index.php" class="Include-Form">inc_contact-form.aspx</a>
                    </td>
               </tr>
          </tbody>
     </table>
</main>
<script>
     //404 script if the article is blank
     var main = document.getElementsByTagName('main')[0];
     if (main.innerHTML.length < 5) {
          window.location.href = 'Error-404.php'; //Use the 404 error article name
     }
</script>

<? require_once("footer.php") ?>