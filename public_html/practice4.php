<!--
Author: Kusuma Murthy
KUID: 3095756
Date Created: 10/27/2023
Lab: Lab 7
Last modified: 10/29/2023
Purpose: To create a page takes in user input and provides the user with a matrix table, this uses PHP
-->

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