<?
include('./includes/config.inc.php');

$images = array();
$reader = opendir($directory);
while (($file = readdir($reader)) !== false)
    if (is_file($directory . $file)) {
        $end = strtolower(substr($file, strlen($file) - 4));
        if (in_array($end, $gallery['types']))
            $images[$file] = filemtime($directory . $file);
    }
closedir($reader);

?>
<? if (isset($_SESSION['username'])) { ?>
    <div style="margin-top: 1em;" class="cardbox">
        <div class="row text-center">
            <h3>Authorized users can upload pictures.</h3>
        </div>
        <form action="?page=upload" method="post" enctype="multipart/form-data">
            <div class="row text-center">
                <div class="col-6">
                    <div class="fileUploadbox">
                        <input name="image" class="fileUploader" type="file" />
                    </div>
                </div>
                <div class="col-6">
                    <button type="submit" class="formButton">Upload</button>
                </div>
            </div>
        </form>

    </div>
<? } ?>

<div class="row">
    <?
    arsort($images);
    foreach ($images as $file => $date) {
    ?>
        <div class="col cardbox align-items-center text-center" style="margin: 0.5em; margin-top:1.2em;">
            <div class="row">
                <div class="col d-flex justify-content-center" style="margin: auto;">
                    <a href="<? echo $directory . $file ?>">
                        <img src="<? echo $directory . $file ?>">
                    </a>
                </div>
            </div>
            <div class="row">
                <p>File name: <? echo $file; ?></p>
                <p>Date: <? echo date($gallery['dateformat'], $date); ?></p>
            </div>
        </div>
    <?php
    }
    ?>
</div>