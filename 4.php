<title>Jawaban No 4</title>

<?php

function pPattern($int){
    if ($int%2) {
        for ($row=0; $row < $int; $row++) { 
            for ($col=0; $col < $int ; $col++) {
                $median = ($int+1)/2;
                if ($col == $median-1 || $row == 0 || $row == $int-1) {
                    echo "&emsp;X&emsp;";
                }else{
                    echo "&emsp;= &emsp;";
                }
            }
            echo "<br><br>";
        }
    }else{
        echo "Angka yang dimasukan harus berupa ganjil";
    }
}

pPattern(3);

?>