<table border="1px" cellspacing="0">
<?php
for ($row = 1; $row <=8; $row++){
    echo '<tr>';
    for ($col = 1; $col <= 8; $col++){
        $sum = $row + $col;
        if ($sum % 2 == 0){
            echo '<td style="height: 20px; width: 20px; background: black;"></td>';
        } else {
            echo '<td style="height: 20px; width: 20px; background: aliceblue;"></td>';
        }
    }
    echo '</tr>';
}
?>
</table>
