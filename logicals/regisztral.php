<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lastName']) && isset($_POST['firstName'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=lostdogandcat', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Létezik már a felhasználói név?
        $sqlSelect = "select id from users where login = :login";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':login' => $_POST['username']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $responseMsg = "The username is already in use!";
            $retry = "true";
        }
        else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into users(id, lastName, firstName, login, password)
                          values(0, :lastName, :firstName, :login, :password)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':lastName' => $_POST['lastName'], ':firstName' => $_POST['firstName'],
                                 ':login' => $_POST['username'], ':password' => sha1($_POST['password']))); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $responseMsg = "Successful registration! <br>Id: {$newid}";                     
                $retry = false;
            }
            else {
                $responseMsg = "The registration is failed!";
                $retry = true;
            }
        }
    }
    catch (PDOException $e) {
        $responseMsg = "Error: ".$e->getMessage();
        $retry = true;
    }      
}
else {
    header("Location: .");
}
?>