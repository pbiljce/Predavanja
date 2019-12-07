<?php
    $mjeseci = 12;
    $dani = 31;
    $pocetnaGodina = 1930;
    $zavrsnaGodina = Date('Y');

    echo "<div>";
        echo "<select name = 'dan'>";
            echo "<option>Dan</option>";
            for($i = 1; $i <= $dani; $i++){
                echo "<option value = '{$i}'>{$i}</option>";
            }
        echo "</select>";
        echo "<select name = 'mjesec'>";
            echo "<option>Mjesec</option>";
            for($j = 1; $j <= $mjeseci; $j++){
                echo "<option value = '{$j}'>{$j}</option>";
            }
        echo "</select>";
        echo "<select name = 'godina'>";
            echo "<option>Godina</option>";
            for($k=$pocetnaGodina;$k<=$zavrsnaGodina;$k++){
                echo "<option value = '{$k}'>{$k}</option>";
            }
        echo "</select>";
    echo "</div>";
?>