<?php
    $lat = $_POST['lat'];
    $long = $_POST['long'];
    header('location:https://book.olacabs.com/?lat=$lat&lng=$long');
?>