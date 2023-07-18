<html>
    <head>
        <title>Auta</title>
    </head>
    <body>
    <?php

$cars = [
    'BMV' => ['Serija 3', 'Serija 5', 'X3', 'X5'],
    'Audi' => ['A4', 'A6', 'Q5', 'Q7'],
    'Mercedes' => ['C-Class', 'E-class', 'GLC', 'GLE']
];

foreach($cars as $brand => $models) {
    echo "<h2>$brand</h2>";

    foreach($models as $model) {
        echo "<p>$model</p>";
    }
}
?>
    </body>
</html>



//*************************************************************************** 
// function prosecna_ocena($ocene) {
//     $broj_ocena = count($ocene);
//     $zbir = 0;

//     foreach($ocene as $ocena) {
//         $zbir += $ocena;
//     }

//     $prosek = $zbir / $broj_ocena;

//     return $prosek;
// }

// $ocene1 = [5, 4, 3, 5, 4];

// echo prosecna_ocena($ocene1) . "<br>";

// $ocene2 = [5, 4, 3, 5, 4, 4, 2];

// echo prosecna_ocena($ocene2) . "<br>";

// funkcije

// $saberi = fn($broj1, $broj2) => $broj1 + $broj2;

// echo $saberi(5, 8);

// ***************************************

// function saberi($broj1, $broj2) {
//     // $zbir = $broj1 + $broj2;
//     return $broj1 + $broj2;
// }

// $a = 5;
// $b = 7;

// $zbir_dva_broja = saberi($a, $b);

// echo $zbir_dva_broja;

// ***********************************************************************
// $drzavaGradovi = [
//     "Srbija" => ["Beograd", "Novi Sad", "Nis"],
//     "Hrvatska" => ["Zagreb", "Split", "Rijeka"],
//     "Crna Gora" => ["Podgorica", "Niksic", "Budva"]
// ];

// foreach($drzavaGradovi as $drzava => $gradovi) {
//     echo "<b>$drzava</b> <br>";

//     foreach($gradovi as $grad) {
//         echo "$grad <br>";
//     }
// }
//********************************************************* 
// $broj = 1;

// while ($broj <= 5) {
//     echo "Broj: $broj<br>";
//     $broj++;
// }

// // While

// for($broj = 1; $broj <= 5; $broj++) {
//     echo "Broj: $broj<br>";
// }




// $gradovi = [
//     "Srbija" => ["Beograd", "Novi Sad", "Nis"],
//     "Hrvatska" => ["Zagreb", "Split", "Rijeka"],
//     "Crna Gora" => ["Podgorica", "Niksic", "Budva"]
// ];

// echo $gradovi["Srbija"][0];


// USLOVI

//******************************************************
// $broj = 5;

// $voce = match($broj) {
//     1 => "Jabuka",
//     2 => "Banana",
//     3 => "Kruska",
//     4 => "Jagoda",
//     default => "Nema voca"
// };

// echo $voce;

// $broj = 51;

// if($broj >= 10 && $broj <= 50) {
//    echo "Broj je izmedju 10 i 50";   
// } else {
//     echo "Broj nije izmedju 10 i 50";
// }

//****************************** 
// $broj = 11;

// if($broj == 10) {
//    echo "Broj je jednak 10";   
// } else {
//     echo "Broj nije jednak 10";
// }


//***************************************
// $email = " rerrel lsadlmlsadl.com ";

// $novi = trim($email);

// var_dump($novi);

//****************************************



// $sadrzi = str_contains($email, "@");

// var_dump($sadrzi);

// echo "<div style='background: red'>@email</div>";
//********************************************************************
// $tekst = "OvO JE TroL NeKI";

// $mala_slova = strtolower($tekst); 
// // $mala_slova = strtoupper($tekst); 

// echo $mala_slova;


//********************************************************************************* 
// $tekst = "Lorem ipsum dolor sit amet, omg consectetur adipiscing elit, sed do eiusmod lol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.";

// echo $tekst . "<br><br>";

// $preciscen_tekst = str_replace("omg", "X", $tekst);

// echo $preciscen_tekst;

//******************************************** */

// $omg_pos = strpos($tekst, "omg");
// $los_pos = strpos($tekst, "lol");

// $finish_pos = $lol_pos - $omg_pos;

// $preview = substr($tekst, $omg_pos, $finish_pos);

// echo $preview . "...";

//***********************************************************************
// $tekst = "Hello World";

// echo $tekst;

// echo "<br>";

// $duzina = strlen($tekst);

// echo "duzina stringa: " . $duzina;

// echo "<br>";

// $pozicija = strpos($tekst, "World");

// var_dump($pozicija);

// echo $pozicija;


































// ******************************************************
// $broj_1 = 11;
// $broj_2 = 5;

// $rezultat = $broj_1 - $broj_2;

// $text1 = "Hello";
// $text2 = "World!";
// $spoj = $text1 . $broj_2;

// echo $spoj . "<span style='color:red'>text neki</span>" . $broj_1;
// // echo "$broj_1 minus $broj_2, jednako je: " . $rezultat;
// echo "<br>";

// echo "<div style='background: red'>$broj_1</div>";

// *******************************************************************























































































































// **************************************************

// $text = "HelloWorld!";
// $celi_broj = 11;
// $float_broj = 5.14;
// $tacno_netacno = false;
// $prazno = NULL;

// var_dump($text);

// echo "<br>";

//  var_dump($celi_broj);

//  echo "<br>";

//  var_dump($float_broj);

//  echo "<br>";

//  var_dump($tacno_netacno);

//  echo "<br>";

//  var_dump($prazno);


 //*********************************************** 






/*

// echo "Hello World!";

// $bilosta = 5;

// echo $bilosta . "<br>";

// $bilosta = 10;

// echo $bilosta;

*/;