<? if (isset($_SESSION['username'])) { ?>
    <div class="cardbox">
        <h1>
            You are successfully logged in!
        </h1>
        <p>Welcome  <? print_r($_SESSION['firstname']) ?></p>
    </div>
<? } else { ?>
    <div class="cardbox text-center">
        <h1>The log in attempt was unsuccessful!</h1>
        <p>Wrong username and/or password!</p>
    </div>
<?
} ?>