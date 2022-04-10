<div class="cardbox">
    <?
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
    }
    ?>
    <div class="row">
        <div class="text-center">
            <div class="row">
                <div class="text-center">
                    <? echo $lastName; ?>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <? echo $firstName; ?>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <? echo $email; ?>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <? echo $phone; ?>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <? echo $subject; ?>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <? echo $message; ?>
                </div>
            </div>
        </div>
    </div>
</div>