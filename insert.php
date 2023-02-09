<?php
include 'config.php';

$tableau = [];

if (isset($_POST["framework"])) {
    foreach ($_POST["framework"] as $row) {
        $tableau[] = $row;
    }
    $count = count($tableau);
    $i = 0;

    while ($i < $count) {
        $id = $tableau[$i];
        $query = "INSERT INTO like_table(framework) VALUES('" . $id . "')";
        if (mysqli_query($con, $query)) {
              if($i==$count-1){
                echo 'Data Inserted';
              } 
         }
         $i++;
    }
}
