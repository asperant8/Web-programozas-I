<?
$upload_response = false;

if (isset($_FILES['image'])) {

    $image = $_FILES['image']['name'];
    $path = pathinfo(($image));
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['image']['tmp_name'];
    $path_file = $directory.$filename.".".$ext;

    if (file_exists($path_file)) {
        $upload_response =false;
        }else{
        move_uploaded_file($temp_name,$path_file);
        $upload_response = true;
        }
       }

?>