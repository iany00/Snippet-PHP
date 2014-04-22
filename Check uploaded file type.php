<?php

/**
* CHECK UPLOADED FILE TYPE
This is the way i use to check if files sent by <input type="file" /> are the file you want to recieve. You might know that $_FILE[name][type] isn't the best way to perform a full check on the files that people sent to you, so i tought to use exec() to execute a command and check the CONTENT of the file.
*/

// Here we specify all the type of files we want to accept
$extension = array("application/pdf", "image/jpeg", "image/png", "image/gif");

if(isset($_POST['submit'])){
	exec("file -i ".$_FILES['inputName']['tmp_name'], $output);
	$type = explode(':', (string)$output[0]);
}

// Here we check our file with our needs
if (isset($_FILES['inputName']) &&
	    $_FILES['inputName']['error'] == UPLOAD_ERR_OK  &&
	    $_FILES['inputName']['size'] <= 10000000 &&
	    in_array(trim($type[1]), $extension)){
	    var_dump($_FILES['inputName']['tmp_name']);
}else{
    die("File Error");
}

?>