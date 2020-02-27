<?php
    session_start();

    $username = "root";
    $password = "admin";
    $servername = "localhost";
    $dbname = "major";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $password_from_user = password_hash($_POST['password'], PASSWORD_BCRYPT);

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $sql = "SELECT * FROM `pat_users` WHERE username=:username";

            $statement = $conn->prepare($sql);
            $statement->execute(array('username'=>$_POST["username"]));
            $count = $statement->rowCount();
            $user = $statement->fetch();

            if($count>0)
            {
                if(password_verify($_POST['password'], $user['user_password'])) {
                    $_SESSION['user_username'] = $_POST['username'];
                    $_SESSION['pat_home_access'] = true;
                    header('location:/major/views/pat_home.php');
                }
                else{
                    $_SESSION['val_pat_login_flag'] = 0;
                    $_SESSION['login_message'] = "The username or password you typed was incorrect";
                    header('location:/major/views/pat_login.php');
                }
            }
            else{
                $_SESSION['val_pat_login_flag'] = 0;
                $_SESSION['login_message'] = "The username or password you typed was incorrect";
                header('location:/major/views/pat_login.php');            }
        }
    }

    catch(PDOException $e) {
        echo $sql."<br>".$e;
    }
?>