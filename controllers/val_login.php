<?php

    $username = "root";
    $password = "admin";
    $servername = "localhost";
    $dbname = "major";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $password_from_user = password_hash($_POST['password'], PASSWORD_BCRYPT);

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $sql = "SELECT * FROM `users` WHERE username=:username";

            $statement = $conn->prepare($sql);
            $statement->execute(array('username'=>$_POST["username"]));
            $count = $statement->rowCount();
            $user = $statement->fetch();

            if($count>0)
            {
                if(password_verify($_POST['password'], $user['user_password'])) {
                    echo "Success";
                }
                else{
                    echo "fail"."<br>".$user['user_password']."<br>".$_POST['password'];
                }
            }
            else{
                echo "Fail";
            }
        }
    }

    catch(PDOException $e) {
        echo $sql."<br>".$e;
    }
?>