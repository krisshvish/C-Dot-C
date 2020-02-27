<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C[Dot]C</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>
<?php 
    session_start();
?>
<?php

    $username = "root";
    $password = "admin";
    $dbname = "major";
    $servername = "localhost";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $password_from_user = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if($_POST['doc_pat'] == 'doctor'){
                $sql = "INSERT INTO `doc_users`(person_name,age,mobile,person_address,email,username,user_password,doc_pat) 
                values('".$_POST["name"]."', '".$_POST["age"]."', 
                '".$_POST["mobile"]."', '".$_POST["address"]."', 
                '".$_POST["email"]."', '".$_POST["username"]."', 
                '$password_from_user', '".$_POST["doc_pat"]."')";
            }
            else{
                $sql = "INSERT INTO `pat_users`(person_name,age,mobile,person_address,email,username,user_password,doc_pat) 
                values('".$_POST["name"]."', '".$_POST["age"]."', 
                '".$_POST["mobile"]."', '".$_POST["address"]."', 
                '".$_POST["email"]."', '".$_POST["username"]."', 
                '$password_from_user', '".$_POST["doc_pat"]."')";
            }

            $conn->exec($sql);

            echo "success";
        }

    }

    catch(PDOException $e) {
        echo $sql."<br>".$e;
    }

    $conn = null;

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

    <div id="register_div">
        <form id="register" action="/major/views/index.php" method="POST">
            <table id="table_form">
                <tr>
                    <td><h2>Register here:</h2></td>
                </tr>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="age">Age:</label></td>
                    <td><input type="number" name="age" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile No.:</label></td>
                    <td><input type="tel" name="mobile" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><textarea name="address" cols="40" rows="7"></textarea></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="doc_pat">Register as:</label></td>
                    <td><input type="radio" name="doc_pat"  value="doctor" checked>Doctor
                    <input type="radio" name="doc_pat"  value="patient">Patient</td>
                </tr>
            </table>
            <button id="reg_button" type="submit">Register</button>
        </form>
    </div>

    <div id="doc_image_div">
        <img src="../images/doc.jpg" alt="" height="50%" width="50%">
    </div>

</body>
</html>