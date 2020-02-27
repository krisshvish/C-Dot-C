<?php
    session_start();
    $_SESSION['doc_home_access'] = false;
    $_SESSION['pat_home_access'] = false;
    header('location:/major/views/index.php');
?>