<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C[Dot]C</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <nav id="navbar">
        <ul id="ul_nav">
            <li id="li_nav_options"><a href="index.php">Home</a></li>
            <li id="li_nav_options"><a href="/doc">Doctor</a></li>
            <li id="li_nav_options"><a href="/pat">Patient</a></li>
            <li id="li_nav_options"><a href="/contact">Contact</a></li>
            <li id="li_nav_options"><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <div id="login_div">
        <form id="login_form" action="/major/val_login.php" method="POST">
            <table id="login_table">
                <tr>
                    <td><h3 style="color: crimson;">Login</h3></td>
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
        </form>
    </div>
    
    <div id="doc_image_div">
        <img src="images/doc.jpg" alt="" height="50%" width="50%">
    </div>

</body>
</html>