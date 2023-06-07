<?php
    header('Content-Type: text/html; charset=utf-8');

    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'test';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM member order by member_no desc"; 
    $result = mysqli_query($mysqli, $sql);
    
    $data_title = array();
    $data_data = array();

    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
       
        $member_email[$i] = $row['member_email'];
        $member_pw_1[$i] = $row['member_pw_1'];
        $member_pw_2[$i] = $row['member_pw_2'];
        $member_name[$i] = $row['member_name'];
        $member_Phone[$i] = $row['member_Phone'];
      
        $i = $i + 1;
    }

    $myObj = array();
    $n = $i;
    $i = 0;

    while ($i < $n) {
        $myObj[$i]->member_email = $data_email[$i];
        $myObj[$i]->member_pw_1 = $member_pw_1[$i];
        $myObj[$i]->member_pw_2 = $member_pw_2[$i];
        $myObj[$i]->member_name = $member_name[$i];
        $myObj[$i]->member_Phone = $member_Phone[$i];
        $i = $i + 1;
    }
    
    $myJSON = json_encode($myObj, JSON_UNESCAPED_UNICODE);
    echo $myJSON;
    

?>
