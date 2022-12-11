<?php
    //associative array  key => val
    $scores = array("homework" => 34, 
        "test"=> 42, "project"=>28);

    // echo $scores['homework'];

    $scores['attendance']=10;

    arsort($scores);
    foreach($scores as $key => $val){
        echo "$key: $val <br>";
    }
?>