<?php

$fileName = $_FILES["fileToUpload"]["name"];

if (! is_dir('uploads')) {
    mkdir('uploads');
}

move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "./uploads/".$fileName);

var_dump($_FILES);

echo "File path is uploads/{$fileName}";

?>
