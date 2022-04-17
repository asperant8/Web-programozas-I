<div class="cardbox">
    <? if($saveMessage==true && $everythingSet==true){ ?>
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
<?
        } else if($everythingSet==true && $saveMessage==false){
?>
    <div class="row">
        <div class="col">
            <?
            foreach ($responseMsg as $msg) {
            ?>
                <div class="row">
                    <div class="col text-center">
                        <p> <? print_r($msg) ?> </p>
                    </div>
                </div>
            <?
            }
            ?>
        </div>
    </div>
<?
        }
else {
?>
<div class="row text-center">
    <p>Every field must be filled out!</p>
</div>
<?
    }
?>
