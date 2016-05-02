<?php
$offset = 0;

if (isset($_POST['output1'])&&isset($_POST['search1'])&&isset($_POST['replace1'])){
$output = $_POST['output1'];	
$search = $_POST['search1'];	
$replace = $_POST['replace1'];	

$str_len = strlen($search);

if(!empty($output)&&!empty($search)&&!empty($replace)){
	
	while ($strpos=strpos($output, $search, $offset)){
	$offset = $strpos + $str_len; 
	$output = substr_replace($output, $replace, $strpos, $str_len);
	
	}
	
	echo $output;
}
else{echo 'fill all the forms';}
}
?>
<form action="find_replace.php" method="POST">
<textarea name="output1" cols="47" rows="9"></textarea><br><br>
Find<br><input type="text" name="search1"><br><br>Replace<br>
<input type="text" name="replace1">
<br>
<br>

<br>
<br>
<input type="submit" text="Submit">


</form>

