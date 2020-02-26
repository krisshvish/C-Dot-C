<?php

    $username = "root";
    $password = "admin";
    $dbname = "major";
    $servername = "localhost";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE table users(
            id INT(10) AUTO_INCREMENT PRIMARY_KEY,
            person_name VARCHAR(30),
            age INT(3),
            mobile INT(10),
            person_address VARCHAR(250),
            email varchar(50),
            username VARCHAR(30),
            user_password VARCHAR(30),
            doc_pat VARCHAR(10)
        )";

        $conn->exec($sql);
        echo "table created!!!!";
    }

    catch(PDOException $e) {
        echo $sql."<br>".$e;
    }

    $conn = null;

?>