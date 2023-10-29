<?php
    echo "Multiplication Table";
    $number = $_GET['number'];

    echo "\nNumber: ". $number;
    echo "<table border=2>";
    for($col = 0; $col <= $number; $col++){
        if ($col == 0){
           $col = Null;
        }
        echo "<td>$col</td>";
    }

    for($row = 1; $row <= $number; $row++){
        echo"<tr>";
        echo "<td>$row</td>";
        for($cr = 1; $cr <= $number; $cr++){
            $num = $row * $cr;
            echo "<td>$num</td>";
        }
        echo "</tr>";
    }
?>