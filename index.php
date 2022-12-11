<?php
    // $names = array("Surachat", "Nantawat", 
    // "Chayutpong", "Pongsit", "Rungnapa");
    // $c = count($names);
    // echo "$c<br>";

    // // for($i=0;$i<$c;$i++){
    // //     echo "$names[$i] <br>";
    // // }

    // $names[] = "Narongsak";     //append
    // $names[] = "Ittisak";

    // foreach($names as $n){
    //     echo "$n<br>";
    // }

    // sort($names);   //sort ascending
    // rsort($names);  //sort descending
    // echo "---After sorting---<br>";
    // foreach($names as $n){
    //     echo "$n<br>";
    // }

    // $n = rand(1, 100);
    // echo $n;

    // //สุ่มเลข 50 ตัวใส่ใน Array ชื่อ scores
    // //แสดงผลโดยเรียงลำดับจากมากไปหาน้อย

    $scores = array();

    for($i=0;$i<50;$i++){
        $scores[$i] = rand(1, 100);
    }

    rsort($scores);

    //key-value array associative array
    // foreach($scores as $i => $s){   
    //     echo "$i: $s<br>";
    // }

    // var_dump($scores);

    echo "<pre>";
    print_r($scores);
    echo "</pre>";





?>