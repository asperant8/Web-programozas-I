<?php

if(isset($_POST['username']) && isset($_POST['password'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=a20i86webprog', 'a20i86webprog', 'a20i86',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlSelect = "select id, lastname, firstname from users where username = :username and password = sha1(:password)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['username'], ':password' => $_POST['password']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['lastname'] = $row['lastname']; $_SESSION['firstname'] = $row['firstname']; $_SESSION['username'] = $_POST['username'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Error: ".$e->getMessage();
    }      
}
else {
    header("Location: /");
}

print_r($_SESSION);
