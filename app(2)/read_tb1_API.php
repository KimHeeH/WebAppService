<?php

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'test';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM tb1"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        $date = $row['date'];
        $text = $row['text'];
      
        
    }

    $myObj = new stdClass();
    $myObj->date = $date;
    $myObj->text= $text;
    

    $myJSON = json_encode($myObj);

    echo $myJSON;

?>