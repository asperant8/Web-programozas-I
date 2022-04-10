<div class="carbox" style="margin-top: 1.2em;">
    <form>
        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" name="firstname" class="form-control bg-dark" style="color:white;" id="firstname" placeholder="John">
        </div>
        <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" class="form-control bg-dark" style="color:white;" id="lastname" placeholder="John">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control bg-dark" style="color:white;" id="username" placeholder="John">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control bg-dark" style="color:white;" id="password" placeholder="John">
        </div>
        <button style="margin-top:1em;" class="formButton" type="submit">Registration</button>
    </form>
</div>

<?php
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO(
            'mysql:host=localhost;dbname=lostdogandcat',
            'root',
            '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Létezik már a felhasználói név?
        $sqlSelect = "select id from users where username = :username";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['username']));
        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        } else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into users(id, firstname, lastname, username, password)
                              values(0, :lastname, :firstname, :username, :password)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(
                ':lastname' => $_POST['lastname'], ':firstname' => $_POST['firstname'],
                ':username' => $_POST['username'], ':password' => sha1($_POST['password'])
            ));
            if ($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";
                $ujra = false;
            } else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    } catch (PDOException $e) {
        echo "Hiba: " . $e->getMessage();
    }
}

?>