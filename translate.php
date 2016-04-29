<?php


$bakit = 'bakit ';
$why = 'why so ';
$late = 'late';
$tagal = 'tagal';

if(isset($_POST['conyo'])){
$translate = strtolower($_POST['conyo']);
if(($translate==$bakit.$late))
{
echo $why.$tagal.' '.$translate;
}

/*if(!empty($translate)){
	if($translate=$bakit)	
	echo $bakit;
}else{echo 'Cant translate';}
*/
	
}


?>

<form action="translate.php" method="POST"><br>
<input type="textarea" name="conyo"><br><br>

<input type="submit" name="Submit"> 


</form>