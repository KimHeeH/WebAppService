<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

	$host = 'localhost';
	$user = 'korea';
	$pw = '1234';
	$dbName = 'test';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$date = $_POST['date'];
	$formattedDate = date('Y-m-d', strtotime($date));
	$text=$_POST['text'];
	
	$sql = "insert into tb1 (
		date,
		text
			
	)";
	
	$sql = $sql. "values (
		'$formattedDate',
		'$text'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("success inserting")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "mypage.html";
</script>
</html>