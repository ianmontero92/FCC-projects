<?php
$name = $_FILES['file']['name'];
$extension= strtolower(substr($name, strpos($name,'.')+1));//use string position to find the dot then +1 to start with the ext name, use strtolower to convert the file ext to lowercase
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$max_size = 100000; //max 2mb size

$tmp_name = $_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
	if(($extension=='jpg'||$extension=='jpeg')&&($type=='image/jpeg'||$type=='image/jpg')&&$size<=$max_size){
		
		$location = 'uploads/';
		
	if(move_uploaded_file($tmp_name, $location.$name)) {//1st argument is the temp, 2nd is the location rename of the temporary file
		echo 'Upload successful!';
	}else{
		echo 'there was an error';
		}
	}else{
		echo 'file must be jpg/jpeg format and must be 2mb or less';}	
	}else{
		echo 'please choose a file.';
	}
	
}

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" value="Submit">


</form>