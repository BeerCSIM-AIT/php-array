<?php
    $students = array(
        array("id"=>"1001", 
            "name"=>"Kittipan", 
            "score"=>70),
        array("id"=>"1002", 
            "name"=>"Kritsanachai", 
            "score"=>69),
        array("id"=>"1003", 
            "name"=>"Nantawat", 
            "score"=>72),
    );

    function grade($score){
        if($score>=80)
            $grade=4;
        else if($score>=70)
            $grade=3;
        else if($score>=60)
            $grade=2;
        else $grade=1;
        return $grade;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Report</h1>
    <hr>
    <table style="width: 100%" border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>score</th>
            <th>grade</th>
        </tr>
        <?php
            foreach($students as $k => $s){
        ?>
            <tr>
                <td><?php echo $s['id']; ?></td>
                <td><?php echo $s['name']; ?></td>
                <td><?php echo $s['score']; ?></td>
                <td><?php echo grade($s['score']);?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>