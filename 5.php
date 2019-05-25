<title>Jawaban No 5</title>

<?php

function gantiHuruf($word,$a,$b){
    $word_len = strlen($word);
    $new = '';
    for ($i=0; $i < $word_len; $i++) { 
        
        if ($word{$i} == $a) {
            $new .= $b;
        }else{
            $new .= $word{$i};
        }
    }
    echo '"'.$new.'"';
}

gantiHuruf("Halo Semuanya",'a','o');

?>