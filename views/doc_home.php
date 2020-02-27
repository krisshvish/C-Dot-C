<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C[Dot]C</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/home.css">

</head>
<?php
    session_start();

    if($_SESSION['doc_home_access'] == false){
        header('location:/major/views/404.html');
    }
?>
<body>
    
    <nav id="navbar">
        <ul id="ul_nav">            
            <li id="li_nav_options"><a href="/major/controllers/logout.php">Logout</a></li>
            <li id="li_nav_options"><a href="" id="diagnosis_a">Diagnosis &#8661</a></li>
        </ul>
    </nav>

    <h3 style="color: crimson;">Hello, <?php echo $_SESSION['user_username']; ?></h3>
    
    <div id="doc_image_div">
        <img src="../images/doc.jpg" alt="" height="50%" width="50%">
    </div>

</body>
</html>