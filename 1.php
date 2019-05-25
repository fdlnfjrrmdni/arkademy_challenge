<title>Jawaban No 1</title>

<?php

function biodata($var){
    $jsonfile = json_encode($var, JSON_PRETTY_PRINT);

    file_put_contents('biodata.json', $jsonfile);
    header("location: biodata.json");
}

$name       = "Fadlan Fajar Ramdani";
$address    = "Jl. Blok Jambu RT03/RW02 No.053";
$hobbies    = array("Baca Buku", "Nonton Youtube", "Scrolling IG", "Surfing di Internet");
$is_married = "No";
$school     = array("highSchool" => "SMK TI Garuda Nusantara Cimahi",
                    "university" => "Belum");
$skills1    = array("PHP" => "60",
                    "CSS" => "50",
                    "JavaScript" => "30", 
                    "CodeIgniter" => "40", 
                    "Laravel" => "50", 
                    "JAVA" => "40");
$skills     = array(array("name" => "PHP", "score" => "60"),
                    array("name" => "CSS", "score" => "50"),
                    array("name" => "JavaScript", "score" => "30"), 
                    array("name" => "CodeIgniter", "score" => "40"), 
                    array("name" => "Laravel", "score" => "50"), 
                    array("name" => "Java", "score" => "40")
                );

$config = array(
        'name' => $name,
        'address' => $address,
        'hobbies' => $hobbies,
        'married' => $married,
        'school' => $school,
        'skills' => $skills
    );

biodata($config);

?>


