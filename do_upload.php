<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (! is_dir('uploads')) {
    mkdir('uploads');
}

move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "uploads/".$target_file);

var_dump($_FILES);

echo "File path is uploads/{$target_file}";

?>
