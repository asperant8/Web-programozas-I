<h1>File upload</h1>
<?
$image = $_FILES['image']['name'];
    $path = pathinfo(($image));
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['image']['tmp_name'];
    $path_file = $directory.$filename.".".$ext;

print_r($_FILES)
?>