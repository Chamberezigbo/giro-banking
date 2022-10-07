<? require_once("header.php") ?>

<!-- main is required to evaluate the article length. -->
<main>
     <table class="Subsection-Table" style="background-image: url('ContentImageHandler1955.jpg?imageId=119493');">
          <tbody>
               <tr>
                    <td>
                         <table>
                              <tbody>
                                   <tr>
                                        <td width="50%">
                                             <h1>Debit Cards</h1>
                                             <p><a href="Online-Services.html#Lost-Card" class="Button1">Report a Lost/Stolen Card</a></p>
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
                         <h2>Free* Debit Cards</h2>
                         <p>Securely access funds from anywhere with a Giro Federal debit card. Even better, we reimburse all other bank ATM surcharges to you when a receipt is presented within 60 days.</p>
                         <h3>Features</h3>
                         <ul>
                              <li>Improved chip security</li>
                              <li>World-wide acceptance</li>
                              <li>Access funds for free through wide network of ATMs*</li>
                         </ul>
                         <p class="Disclaimer">*Other bank ATM surcharges will be reimbursed when receipt is presented within 60 days. See Customer Service for details.</p>
                         <p><a href="Online-Services.html#Lost-Card" class="Button1">Report a Lost/Stolen Debit Card</a></p>
                    </td>
               </tr>
          </tbody>
     </table>
</main>
<script>
     //404 script if the article is blank
     var main = document.getElementsByTagName('main')[0];
     if (main.innerHTML.length < 5) {
          window.location.href = 'Error-404.html'; //Use the 404 error article name
     }
</script>

<? require_once("footer.php") ?>