<?
if (isset($_FILES['image'])) {

    $image = $_FILES['image']['name'];
    $path = pathinfo(($image));
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['image']['tmp_name'];
    $path_file = $directory.$filename.".".$ext;

    if (file_exists($path_file)) {
        echo "Sorry, file already exists.";
        }else{
        move_uploaded_file($temp_name,$path_file);
        echo "Congratulations! File Uploaded Successfully.";
        }
       }


print_r("asdasd");
?>