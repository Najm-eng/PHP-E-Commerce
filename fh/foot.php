<link rel="stylesheet" href="css/footer.css" />
<section id="footer">
            
            <div class="foot">
                <ul>
                    <?php


          if(isset($_SESSION["useruid"])){?>

            <li><a href="index_cart.php">HOME</a></li>
            <li><a href="exchange.php">Exchange Rate</a></li>
            <li><a href="Contact.php">CONTACT US</a></li><?php
            echo"<li><a href='logout.php'><span class='con'>Log out</span></a></li>";
            
            }

            
          
          else{?>
            <li><a href="index.php">HOME</a></li>
            <li><a href="exchange.php">Exchange Rate</a></li>
            <li><a href="Contact.php">CONTACT US</a></li><?php
            echo "<li ><a href='login.php'><span class='con'>Log in</span></a></li>";
          }

        ?>
        
                </ul>

                
            </div>
        </section>
        
        </body>

</html>