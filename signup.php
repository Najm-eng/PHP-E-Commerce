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
<body >
    <div style="margin: 50px; padding: 100px; ">
        <!-- Left section of signup form -->
        <dive>
            <h1>Sign Up</h1>
            <h5>Welcome to our - favourite music</h5><br>
            <form action="signup.inc.php" method="post" >
             <div>
                <p><label for="Nmae">Full Name</label></p>
                <input type="text" id="userName" autocomplete="off" name="name" required placeholder="Name...">
             
                <p><label for="email">Email Address</label></p>
                <input type="email" id="email" name="email" required autocomplete="off" placeholder="email..." >
             
            <p><label for="userName">User Name</label></p>
                <input type="text"  required name="uid" placeholder="Username">

                <p><label for="password">Password</label></p>
                <input type="password" id="password" required name="pwd" placeholder="password...">

                <p><label for="Repeat password">Password</label></p>
                <input type="password"  required name="pwdrepeat" placeholder="Repeat password...">
             </div>
             <button type="submit" name="submit" id="btn">Sing Up</button>
             <p>Already a member? <a href="login.php">Log in</a></p>
            </form>
                <div style="color:red;text-align:center;">
                        <?php
                            if (isset($_GET ["error"])){
                            if($_GET["error"]=="emptyinput"){
                                     echo "<p>Fill in all fields!</p>";
                                    }
                            else if($_GET["error"]=="invalidemail"){
                                echo "<p>Choose proper email!</p>";
                            }
                            else if($_GET["error"]=="passworddontmatch"){
                                echo "<p>passwords doesn't match!</p>";
                            }
                            else if($_GET["error"]=="stmtfail"){
                                echo "<p>Somthing went wrong, try again!</p>";
                            }
                            else if($_GET["error"]=="usernametaken"){
                                echo "<p>user name taking !</p>";
                            }
                            else if($_GET["error"]=="none"){
                                echo "<p>you've signed up successfully !</p>";
                            }
                        }
                         ?>
                         </div>
           

           
        </dive>
            


        
    </div>
<?php
  include_once'fh/foot.php'
?>
