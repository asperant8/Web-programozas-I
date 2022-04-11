<? if (isset($_SESSION['username'])) { ?>
    <div class="cardbox">
        <h1>
            You are successfully logged in!
        </h1>
        <p>Username: <? print_r($_SESSION['username']) ?></p>
    </div>
<? } else { ?>
    <div class="cardbox">
        <h1>The log in attempt was unsuccessful!</h1>
        <p>Wrong username and/or password!</p>
    </div>
<?
} ?>