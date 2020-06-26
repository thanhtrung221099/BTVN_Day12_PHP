<table border="1px" cellspacing="0">
    <?php
    for($a = 1; $a <=10; $a++){
        echo '<td>';
        for ($b = 1; $b <= 10; $b++){
            echo "$a * $b = " . ($a * $b);
            echo '<br>';
        }
        echo '</td>';
    }
    ?>
</table>
