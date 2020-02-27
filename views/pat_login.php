<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C[Dot]C</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
</head>
<?php 
    session_start();
?>
<body>
    
    <nav id="navbar">
        <ul id="ul_nav">            
            <li id="li_nav_options"><a href="index.php">Home</a></li>
            <li id="li_nav_options"><a href="doc_login.php">Doctor</a></li>
            <li id="li_nav_options"><a href="pat_login.php">Patient</a></li>
            <li id="li_nav_options"><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div id="login_div">
        <form id="login_form" action="/major/controllers/pat_val_login.php" method="POST">
            <table id="login_table">
                <tr>
                    <h3 style="color: crimson;">Patients Login</h3>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
            </table>
            <button id="login_button" type="submit">Login</button>
            <?php
                if($_SESSION['val_pat_login_flag'] == 0){
                    $_SESSION['val_pat_login_flag'] = 1;

            ?>
            <h6 style="color:red;"><?php echo $_SESSION['login_message']; }?></h6>
        </form>
    </div>
    
    <div id="doc_image_div">
        <img src="../images/doc.jpg" alt="" height="50%" width="50%">
    </div>

</body>
</html>