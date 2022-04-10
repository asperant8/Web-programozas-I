<div class="cardbox" style="margin-top:1.2em ;">
    <div class="w-50 text-center" style="margin: auto;">
        <form action="?page=log_in" method="POST">
            <div class="form-group">
                <label for="firstName">Username</label>
                <input type="text" name="username" class="form-control bg-dark" style="color:white;" id="username" placeholder="John">
            </div>
            <div class="form-group">
                <label for="firstName">Password</label>
                <input type="password" name="password" class="form-control bg-dark" style="color:white;" id="password" placeholder="John">
            </div>
            <button style="margin-top:1em;" class="formButton" type="submit">Log in</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] !=="" && $_POST['password']!=="") {
    try {
        // Kapcsolódás
        $dbh = new PDO(
            'mysql:host=localhost;dbname=lostdogandcat',
            'root',
            '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );

        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Felhsználó keresése
        $sqlSelect = "select id, firstName, lastName from users where username = :username and password = sha1(:password)";
        $sth = $dbh->prepare($sqlSelect);

        $sth->execute(array(':login' => $_POST['username'], ':password' => $_POST['password']));

        $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
?>