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
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Galéria</title>

</head>

<body>
    <div class="row">
        <?
        arsort($images);
        foreach ($images as $file => $date) {
        ?>
            <div class="col align-items-center text-center cardbox" style="margin: 0.5em; margin-top:1.2em;">
                <div class="row">
                    <a href="<? echo $directory . $file ?>">
                        <img src="<? echo $directory . $file ?>">
                    </a>
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
</body>

</html>