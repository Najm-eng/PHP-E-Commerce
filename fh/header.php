<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  
  
    <link rel="stylesheet" href="css/header.css" />

  <title>Cisc3140 Town Market</title>
</head>

<body>
  


 <header class="header">
  <nav>
     <?php
    if(isset($_SESSION["useruid"])){?>
      <a href="index_cart.php"><img src="IMAGES/logo.png"  class="logob"></a>
      <?php
    }
      else{?>
        <a href="index.php"><img src="IMAGES/logo.png"  class="logob"></a>
        <?php
      }?>
    <ul>
        
        <?php


          if(isset($_SESSION["useruid"])){?>

            <li><a href="index_cart.php">HOME</a></li>
            <li><a href="exchange.php">Exchange Rate</a></li>
            <li><a href="Contact.php">CONTACT US</a></li><?php
            echo"<li><a href='logout.php'><span class='con'>Log out</span></a></li>";
            ?>

              <a href='cart.php'><img src='cart-icon.png' /><span></span></a><?php
            }

            
          
          else{?>
            <li><a href="index.php">HOME</a></li>
            <li><a href="exchange.php">Exchange Rate</a></li>
            <li><a href="Contact.php">CONTACT US</a></li><?php
            echo "<li ><a href='login.php'><span class='con'>Log in</span></a></li>";
          }



        ?>

        
        

    </ul>
    </nav>
  </header>

  <section style="color:red;text-align:center;">
        <?php
            if(isset($_SESSION["useruid"])){
               echo"<p style='font-family:courier;display:inline;'>Hello there, <h2  style='display:inline;font-family:courier;font-size:300%;'>" .$_SESSION["useruid"]."</h2>";
           }
         
          ?>
    </section>