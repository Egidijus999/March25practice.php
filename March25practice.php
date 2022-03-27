<?php

// 1. Sukurti masyvą (piniginę), kurio ilgis yra atsitiktinis nuo 10 iki 30, o reikšmės atsitiktiniai 
// skaičiai nuo 0 iki 10 (pinigai);
echo '<h3>1</h3>';
$number1=rand(10,30);
$array1 = [];
for($i1=0; $i1<$number1; $i1++){
array_push($array1, rand(0,10));
}
print_r($array1);

// 2. Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio reikšmių (pinigų esančių piniginėje) 
// sumą;
echo '<h3>2</h3>';
$sum=0;
foreach($array1 as $number1){
    $sum +=$number1;     
}
print_r($sum);
echo'<br>';
// kitas sprendimas be ciklo
// echo array_sum($array1);  
// echo'<br>';

// 3. Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio popierinių pinigų (skaičių didesnių už 
// 2 ) reikšmių sumą;
echo '<h3>3</h3>';
$sum = 0;
foreach($array1 as $number1){
    if ($number1 >2){
        $sum += $number1;
    }
}
print_r($sum);

// 4. Išleisti visus metalinius pinigus (reikšmes, kurios yra mažesnės arba lygios 2 padaryti 
// lygias 0) iš 1 uždavinio;
echo '<h3>4 neveikia</h3>';
foreach($array1 as $number4){
    if ($number4 <= 2){
        $number4 = 0;
    }
}
print_r($array1);

// 5. Surasti didžiausią reikšmę 1 uždavinio masyve ir paskaičiuoti kiek tokių didžiausių 
// reikšmių masyve yra;
echo '<h3>5</h3>';
$max = 0;
$count = 0;
foreach ($array1 as $number1){
    if($max < $number1) {
        $max = $number1;
    }
}
foreach ($array1 as $number1){
    if ($max === $number1){
        $count++;
    }
}
print_r($max); echo '<br>';
print_r($count);

// 6. Visus masyvo elementus, kurie yra lygūs 0, pakeisti į tų elementų indeksų (vietų, 
// numerių) reikšmes;
echo '<h3>6</h3>';
for($i = 0; $i < count($array1); $i++){
    if ($array1[$i] === 0){
        $array1[$i] =$i;
    }
}
print_r($array1);

// 7. Į 1 uždavinio masyvą pridėti tiek naujų reikšmių (pinigų, atsitiktinių skaičių nuo 0 iki 10), 
// kad masyvo ilgis būtų lygiai 30;
echo '<h3>7</h3>';
while(count($array1) < 30) {
    array_push($array1, rand(0, 10));
}
print_r($array1);

// 8. Naudojant 1 uždavinio masyvą iš jo reikšmių sukurti dar du papildomus masyvus. Į vieną 
// iš 1 uždavinio masyvo pridėti reikšmes mažesnes arba lygias 2 (monetas), o į kitą 
// didesnes nei 2 (popierinius pinigus);
echo '<h3>8</h3>';
$arrayMonetos = [];
$arrayPopieriniai = [];
foreach ($array1 as $number1){
    if ($number1 <=2){
        array_push($arrayMonetos, $number1);
    }else{
        array_push($arrayPopieriniai, $number1);
    }
}
print_r($arrayMonetos);
echo'<br>';
print_r($arrayPopieriniai);


// 9. Sukurti masyvą (piniginę su dviem skyreliais) iš dviejų elementų, kurio pirmas elementas 
// būtų masyvas iš 8 uždavinio su monetom, o antras elementas masyvas iš 8 uždavinio su 
// popieriniais pinigais;
echo '<h3>9</h3>';
$array9 = [];
array_push($array9, $arrayMonetos);
array_push($array9, $arrayPopieriniai);
print_r($array9);

// 10. Į 9 uždavinio masyvą, piniginę su dviem skyreliais, pridėti trečią skyrelį- masyvą su 
// kortelėm: ['KIKA', 'Euro Vaistinė', 'Drogas', 'Ačiū', 'Lietuvos Geležinkeliai', 'Mano RIMI'];
echo '<h3>10</h3>';

array_push($array9, ['KIKA', 'Euro Vaistinė', 'Drogas', 'Ačiū', 'Lietuvos Geležinkeliai', 'Mano RIMI']);
print_r($array9);

// 11. Korteles skyrelyje sudėlioti (išrūšiuoti) pagal abėcėlę;
echo '<h3>11</h3>';
array_multisort($array9[2]);
print_r($array9);

// 12. Į kortelių skyrelį pridėti mokėjimo kortelių 'MasterCard', 'Visa' (su rand generuokite 
// atsitiktines reikšmes 'MasterCard' arba 'Visa' ir rašykite į masyvą) iš skirtingų bankų tiek, 
// kad skyrelis (masyvo ilgis) pasidarytų lygus 20;
echo '<h3>12</h3>';
$array12 = ['VISA', 'Mastercard'];
while (count($array9[2])< 20){
    array_push($array9[2], $array12[rand(0, 1)]);
}
print_r($array9);

// 13. Paskaičiuokite, kokio tipo kortelių ('MasterCard' arba 'Visa') yra daugiau;
echo '<h3>13 neveikia</h3>';
$visa = 0;
$mastercard = 0;
foreach ($array12 as $number1){
    if ($number1 ==='Visa'){
        $visa++;
    }elseif ($number1 === 'Mastercard'){
        $mastercard++;
    }
}
if ($visa > $mastercard){
    echo 'daugiau Visa korteliu';
}elseif ($visa < $mastercard){
    echo 'daugiau Mastercard korteliu';
}else {
    echo 'korteliu skaicius vienodas';
}
echo'<br>';
// count($array9[$visa]);
echo'<br>';
print_r($array12);

// 14. Sukurkite masyve (piniginėje) ketvirtą elementą (skyrelį) į kurį įdėkite 10 loterijos bilietų, 
// kurių numerius sugeneruokite atsitiktinai su rand funkcija nuo 1000000000 iki 
// 9999999999;
echo '<h3>14</h3>';
$lotery = [];
for($i=0; $i<10; $i++){
    array_push($lotery, rand(1000000000, 9999999999));
}
print_r($lotery);
echo'<br>';
array_push($array9, $lotery);
echo'<br>';
print_r($array9);

// 15. Loterijos bilietų masyvą išrūšiuoti nuo didžiausio numerio iki mažiausio;
echo '<h3>15</h3>';

sort($array9[3]);
print_r($array9);

// 16. Į piniginės popierinių pinigų skyrelį įdėti bent 500 pinigų mažom kupiūrom ( generuoti 
// atsitiktinius skaičius nuo 3 iki 10 ir dėti kaip naujus elementus, kol įdėta suma bus lygi 
// arba viršys 500);
echo '<h3>16</h3>';
$sum16 = 0;
while ($sum16<500){ 
$kupiura = rand(3, 10); 
$sum16 += $kupiura;   
array_push($array9[1], rand(3, 10));
}
print_r($array9[1]);

// 17. Patikrinti ar ką nors laimėjote. Bilieto numerius dalinkite iš 777 ir jeigu numeris išsidalins 
// be liekanos - jūs laimėjote! Suskaičiuokite, kiek buvo laimingų bilietų.
echo '<h3>17</h3>';
$win = 0;
foreach($array9[3] as $numer17){
    if ($numer17 % 777==0){
        echo ' Jus laimejote ';
        $win++;
    }else{
        echo ' nenukabink nosies ';
    }
}
echo "Laimingų bilietų: $win";

// 18. Sukurkite penktą skyrelį ir į jį sudėkite nuotraukas: ['šuo', 'katė', 'automobilis', 'namas', 
// 'kiemas'] ir jas išrūšiuokite pagal žodžių ilgį taip, kad pirma eitų trumpiausi žodžiai;
echo '<h3>18</h3>';

$array9[4] = [];
$photo = ['šuo', 'katė', 'automobilis', 'namas', 'kiemas'];
usort($photo, function($a,$b){
    return strlen($a) > strlen($b);
});
array_push($array9[4], $photo);
print_r($array9[4]);

?>