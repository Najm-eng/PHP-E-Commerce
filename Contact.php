
<?php
  include_once'fh/header.php'
?>

<link href="css/con_css.css" rel="stylesheet" type="text/css">
<body div class="background"> 



<div id="container">
  <h1>&bull; Keep in Touch &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
    <svg class="icon" viewBox="0 0 145.192 145.192">
  
    </svg>
  </div>
  <form action="contact.inc.php" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="My name is" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
    </div>
    <div class="subject">
      <label for="subject"></label>
      <select placeholder="Subject line" name="subject" id="subject_input" required>
        <option disabled hidden selected>Subject line</option>
        <option>Price of product</option>
        <option>Business hours</option>
        <option>My coupon </option>
      </select>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <button type="submit" name="submit" id="form_button" />Send Message</button>
       <?php
  if (isset($_GET ["error"])){
      if($_GET["error"]=="none"){
          echo "<p style='color:red;text-align:center;'>Message has been sent</p>";
          echo"<script>window.alert('MESSAGE HAS BEEN SENT!');</script>";
      }
  
                
                            
  }
?>
    </div>
  </form><!-- // End form -->
</div style="color:red;text-align:center;"><!-- // End #container -->
 



</div>

        <?php
          include_once'fh/foot.php'
        ?>
</body>

</html>