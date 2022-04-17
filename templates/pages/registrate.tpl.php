<div class="cardbox text-center">
    <h2>
        <? if (str_contains($responseMsg, "Successful registration!")) 
        {
            ?> 
            <h3>You are successfully registrated!</h3>
            <?
        }
        else{
        print_r($responseMsg);
        } ?>
    </h2>
</div>