<div class="cardbox text-center">
<?
    if($upload_response){
        ?> <h3>File is successfully uploaded!</h3>
        <?
    }
    else{
        ?> <h3>File could not be uploaded! Image already exists in gallery.</h3> <?
    }
    header( "refresh:5;url=?page=galery" );
?>
<p>You are being redirected back to galery in 5 seconds.</p>
</div>