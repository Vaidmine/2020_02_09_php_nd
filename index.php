<h4>uzduotis 1</h4>
<?php
echo '<br>';
$vardas = 'Vardas';
$pavarde = 'Pavarde';
$gimimometai = 1921;
$dabartiniaimetai = 2021;
$sum = $dabartiniaimetai - $gimimometai;
echo "As esu $vardas.$pavarde. <br>  Man yra $sum metu.";
?> 

<h4>uzduotis 2</h4>
<?php
//Naudokite funkcija rand(). 
//Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
//jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
//Didesnę reikšmę padalinkite iš mažesnės. 
//Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
echo '<br><br>';
$antras = rand(0, 4);
$pirmas = rand(0, 4);
echo 'pirmas skaicius '.$pirmas.'<br>';
echo 'antras skaicius '.$antras.'<br>';
// echo 'pirmas skaicius '.$pirmas = rand(0,4).'<br>';
// echo 'antras skaicius '.$antras = rand(0,4).'<br><br>';


if ($pirmas === 0 || $antras === 0 || $pirmas===$antras ) {
    echo 'dalyba is nulio arba lygus skaiciai';
    return;
    } elseif ($pirmas > $antras) {
        $a = $pirmas/$antras;
        echo round($a,2);  
    } else if ($antras > $pirmas) {
        $b = $antras/$pirmas; 
        echo round($b,2);
        echo'<br>';
    } 
?> 
<h4>uzduotis 3</h4>

<?php
//Naudokite funkcija rand(). 
//Sukurkite tris kintamuosius ir naudodamiesi funkcija rand()
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
//Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
echo '<br><br>';
$k1 = rand(0,25);
$k2 = rand(0,25);
$k3 = rand(0,25);
echo "pirmas kint. yra: $k1 <br>";
echo "antras kint. yra: $k2 <br>";
echo "trecias kint. yra: $k3 <br>";
echo '<br>';

if (($k1 >= $k2 && $k3 >= $k1) || ($k1 >= $k3 && $k2 >= $k1)) {
    echo "Vidurinė reikšmė yra: $k1";
} else if (($k2 >= $k1 && $k3 >= $k2) || ($k2 >= $k3 && $k1 >= $k2)) {
    echo "Vidurinė reikšmė yra: $k2";
} else if (($k3 >= $k1 && $k2 >= $k3) || ($k3 >= $k2 && $k1 >= $k3)) {
    echo "Vidurinė reikšmė yra: $k1";
}

?> 
<h4>uzduotis 4</h4>
<?php
//Įvedami skaičiai -a, b, c –kraštinių ilgiai, 
//trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
//Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį 
//ir atsakymą atspausdintų. 
echo '<br><br>';
$krastilgis1 = rand(0,10);
$krastilgis2 = rand(0,10);
$krastilgis3 = rand(0,10);
echo "pirmos krastines ilgis yra: $krastilgis1 <br>";
echo "antros krastines ilgis yra: $krastilgis2 <br>";
echo "trecios krastines ilgis yra: $krastilgis3 <br>";
echo '<br>';
if ($krastilgis1 +$krastilgis2 == $krastilgis3 || $krastilgis1 + $krastilgis3 == $krastilgis2 || $krastilgis2+$krastilgis3 == $krastilgis1 ) {
    echo 'Galima sudaryti trikampį!';
} else {
    echo 'Negalima sudaryti trikampio!';
}
?>
<h4>uzduotis 5</h4>

<?php
echo '<br><br>';
//Sukurkite keturis kintamuosius ir 
//​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2.
// Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
//(sprendimui masyvo nenaudoti).
$sk1 = rand(0, 2);
$sk2 = rand(0, 2);
$sk3 = rand(0, 2);
$sk4 = rand(0, 2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;
echo "pirmas kint. yra: $sk1 <br>";
echo "antras kint. yra: $sk2 <br>";
echo "trecias kint. yra: $sk3 <br>";
echo "ketvirtas kint. yra: $sk4 <br>";
if ($sk1 === 0) $nuliai++;
if ($sk2 === 0) $nuliai++; 
if ($sk3 === 0) $nuliai++;
if ($sk4 === 0) $nuliai++;
if ($sk1 === 1) $vienetai++;
if ($sk2 === 1) $vienetai++;
if ($sk3 === 1) $vienetai++;
if ($sk4 === 1) $vienetai++;
if ($sk1 === 2) $dvejetai++;
if ($sk2 === 2) $dvejetai++;
if ($sk3 === 2) $dvejetai++;
if ($sk4 === 2) $dvejetai++;
echo' ================ <br>';
echo "nuliu viso yra: $nuliai, <br> vienetu viso yra: $vienetai, <br> dvejetu viso yra: $dvejetai. <br>";
?> 

<h4>uzduotis 6</h4>
<?php
//Naudokite funkcija rand().
//Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 
//ir jį atspausdinkite atitinkame h tage. 
//Pvz skaičius 3. Jo rezultatas: <h3>3</h3>
$htagrand = rand(1,6);
echo "<h {$htagrand}> {$htagrand} </h {$htagrand}>";
echo '<br>';
?> 

<h4>uzduotis 7</h4>
<?php
//Naudokite funkcija rand().
// Atspausdinkite 3 skaičius nuo -10 iki 10. 
//Skaičiai mažesni už 0 turi būti žali, 
//0 - raudonas, 
//didesni už 0 mėlyni. 
$num0 = rand(-10,10);
$num1 = rand(-10,10);
$num2 = rand(-10,10);
if ($num0 < 0){
    echo  "<h2 style='color:green;'>{$num0}</h2>";
}
if ($num0 === 0){
    echo  "<h2 style='color:red;'>{$num0}</h2>";
}
if ($num0 >0){
    echo  "<h2 style='color:blue;'>{$num0}</h2>";
}
// ***************
if ($num1 < 0){
    echo  "<h2 style='color:green;'>{$num1}</h2>";
}
if ($num1 === 0){
    echo  "<h2 style='color:red;'>{$num1}</h2>";
}
if ($num1 >0){
    echo  "<h2 style='color:blue;'>{$num1}</h2>";
}
// ***************
if ($num2 < 0){
    echo  "<h2 style='color:green;'>{$num2}</h2>";
}
if ($num2 === 0){
    echo  "<h2 style='color:red;'>{$num2}</h2>";
}
if ($num2 >0){
    echo  "<h2 style='color:blue;'>{$num2}</h2>";
}

?>


<h4>uzduotis 8</h4>
<?php
echo '<br>';
//Įmonė parduoda žvakes po 1 EUR. 
//Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, 
//daugiau kaip už 2000 EUR - 4 % nuolaida. 
//Parašykite programą, kuri skaičiuos žvakių kainą 
//ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
//Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
$amount = rand(5, 3000);
$price = 0;
echo "Zvakiu kiekis yra: $amount";
echo '<br>';
echo "Perkame zvakes uz suma: ";
echo '<br>';
if ($amount > 2000) {
    $price = 0.96 * $amount;
    echo "$amount EUR. <br> Vienos zvakes kaina: 0.96 EUR";
} else if ($amount > 1000) {
    $price = 0.97 * $amount;
    echo "$price EUR. <br> Vienos zvakes kaina: 0.97 EUR";
} else {
    echo "$amount EUR. <br>  Vienos zvakes kaina: 1.00 EUR";
}
echo '<br><br>';
?>

<h4>uzduotis 9</h4>
<?php
echo '<br>';
// Naudokite funkcija rand(). 
//Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
//Paskaičiuokite jų aritmetinį vidurkį. 
//Ir aritmetinį vidurkį atmetus tas reikšmes, 
//kurios yra mažesnės nei 10 arba didesnės nei 90. 
//Abu vidurkius atspausdinkite. 
//Rezultatus apvalinkite iki sveiko skaičiaus.
$atsitiktinis1 = rand(0, 100);
$atsitiktinis2 = rand(0, 2);
$atsitiktinis3 = rand(0, 2);
echo "pirmas atsitiktinis sk. yra: $atsitiktinis1 <br>";
echo "antras atsitiktinis sk.yra: $atsitiktinis2 <br>";
echo "trecias atsitiktinis sk.yra: $atsitiktinis3 <br>";
$average = round((($atsitiktinis1 + $atsitiktinis2 + $atsitiktinis3) / 3));
echo 'Trijų atsitiktiniu sk. vidurkis yra: ' . $average;
 

?>

