<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C[Dot]C</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/home.css">

    <script>
        function bookOla(){
            if(navigator.geolocation){
                var loc = navigator.geolocation.getCurrentPosition(getPosition);
            }
            else{
                alert("This browser does not support Geolocation!")
            }
        }

        function getPosition(pos){
            var lat = document.getElementById('lat');
            var longi = document.getElementById('long');

            lat.value = pos.coords.latitude;
            longi.value = pos.coords.longitude;

            var loc_form = document.getElementById('loc_form');
            loc_form.submit();
        }
    </script>
</head>
<?php 
    session_start();

    if($_SESSION['pat_home_access'] == false){
        header('location:/major/views/404.html');
    }
?>
<body>
    
    <nav id="navbar">
        <ul id="ul_nav">            
            <li id="li_nav_options"><a href="/major/controllers/logout.php">Logout</a></li>
            <li id="li_nav_options"><a href="/major/views/disease.php">Predictor</a></li>
        </ul>
    </nav>

    <form id="loc_form" action="/major/controllers/cab.php" method="POST">
        <input type="hidden" id="lat" name="lat">
        <input type="hidden" id="long" name="long">
        <button onclick="bookOla()">Book Cab</button>
    </form>

    <h3 style="color: crimson;">Hello, <?php echo $_SESSION['user_username']; ?></h3>
    
    <div id="doc_image_div">
        <img src="../images/doc.jpg" alt="" height="50%" width="50%">
    </div>

</body>
</html>