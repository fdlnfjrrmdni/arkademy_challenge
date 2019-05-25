<title>Jawaban No 3</title>

<?php

function countVo($word){
    $word_len = strlen($word);
    $vo_let = array('a','i','u','e','o','A','I','U','E','O');
    $vo = 0;
    
    for ($i=0; $i < $word_len; $i++) { 
        if (in_array($word[$i], $vo_let)) {
            $vo++;
        }
    }
    echo $vo;
}

countVo("Halo Arkademy!");

?>