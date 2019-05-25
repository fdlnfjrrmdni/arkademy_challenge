<title>Jawaban No 2</title>

<?php

function betweenD($d1,$d2){
    $date1 = date_create($d1);
    $date2 = date_create($d2);

    $interval = date_diff($date1,$date2);

    $diff = $interval->format("%a");
    $diff2 = $interval->format("%R");

    for ($i=0; $i <= $diff; $i++) {    
        $date = date('Y-m-d', strtotime($d1.$diff2.$i.'days'));    
        if ($i == $diff) {
            $coma = "";
        }else{
            $coma = ", ";
        }
        echo "'".$date."'".$coma;
    }
}

betweenD('2019-12-30','2020-01-03');

?>