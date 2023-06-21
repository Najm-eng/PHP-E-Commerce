<?php
  include_once'fh/header.php'
?>
<head>
    <!-- Font Awesome 5 CDN link to add icones -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Sign Up</title>
    <!-- Linking .css file with HTML page -->
    <!-- <link rel="stylesheet" href="style1.css"> -->
</head>
<body>
    <div  style="margin: 50px; padding: 100px; box-sizing: border-box;">
        <dive>
            <h1>Sign in</h1>
            <h4>Welcome to our - Cisc3140 Town Market</h4>
            <form action="login.inc.php" method="post">
             <div>
                <p><label for="email">Email/userId</label></p>
                <input type="text" id="email" name="uid"  name="email" >
             </div>
             <div>
                <p><label for="password">Password</label></p>
                <input type="password" id="password"  name="pwd">
             </div>
             <button type="submit" id="btn" name="submit">Log In</button>
             <p>Not a register user? <a href="signup.php">Sign Up</a></p>
            </form>
            
            <div style="color:red;text-align:center;">
                        <?php
                            if (isset($_GET ["error"])){
                            if($_GET["error"]=="emptyinput"){
                                     echo "<p>Fill in all fields!</p>";
                                    }
                            else if($_GET["error"]=="wronglogin"){
                                echo "<p>Wrong Password OR USERID!</p>";
                            }
                
                            
                        }
                         ?>
                         </div>
        </dive>
        
    </div>
<?php
  include_once'fh/foot.php'
?>