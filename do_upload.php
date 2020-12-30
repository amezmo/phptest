<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_tmp = $_FILES['fileToUpload']['tmp_name'];

if (! is_dir('uploads')) {
    mkdir('uploads');
}

move_uploaded_file($file_tmp,"uploads/".$file_name);

echo "File path is uploads/{$file_name}";

echo "File is an image - " . $check["mime"] . ".";

?>
