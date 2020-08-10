<?php 
// one line comment
#also one line comment
echo "Hello World"; 
 /* multi line comment */

?>
<?="<br>";?>

<?="<a href='dataforms.php' target='_blank'>DataForms</a>" ;?>

<?php

$a = TRUE ;
$b = "one string2";
$c = 'string2';
$d = 6;
$dd = 4;
$e = 1.234;
$f = "59.85" + 100;
$g = "5985";

echo "<br>" ;
echo $b . $c ;
echo "<br>" ;
$sum = $dd + $d;
echo ($sum);

var_dump($a, $b, $c, $d, $e) ;
gettype($a) ;
echo "<br>" ;
echo gettype($b) ;
echo "<br>" ;
echo strlen($b);
echo "<br>" ;
echo str_word_count($b);
echo "<br>" ;
echo strpos($b, $c);
echo "<br>" ;
echo str_replace($c, $d, $b);


function myTest() {
	$x = 5; // locall scope
    echo "<p>Variable x inside function is: " . $x . "</p>";
}
myTest();

$y = "Hello";
$z = "World";

function myTests(){
	global $y, $z;
	$m = "!";
	echo $y . PHP_EOL . $z . PHP_EOL . $m;
}
myTests();

$carar = array("one", "two", "three");
var_dump($carar);

echo "<br>";

$obj = new \stdClass();
var_dump($obj);

echo "<br>";

echo "Numbers";
echo "<br>";

var_dump(is_int($d));
var_dump(is_int($e));
var_dump(is_float($d));
var_dump(is_float($e));
$nAn = acos(8);
var_dump($nAn);

var_dump(is_numeric($d));
var_dump(is_numeric($c));
var_dump(is_numeric($f));
var_dump(is_numeric($g));

echo "Constants";
echo "<br>";

define("GREETING", "Welcome Home!", false);
echo GREETING;

echo "<br>";
define("foods",
            [
                "Pizza",
                "Pateuri",
                "Fires"
            ]
);
echo foods[0];
echo foods[1];
echo foods[2];

echo "<br>";
echo "<br>";
echo "Operators";
echo "<br>";

echo $d + $dd;
echo "<br>";
echo $d - $dd;
echo "<br>";
echo $d * $dd;
echo "<br>";
echo $d / $dd;
echo "<br>";
echo $d % $dd;
echo "<br>";
echo $d ** $dd;
echo "<br>";
echo "<br>";

$num1 = 5;
$num2 = "5";



$d += 10;
var_dump($d);
echo "<br>";
echo "<br>";

echo "Increment and decrement";
echo "<br>";
$num = 18;
echo ++$num;

echo "<br>";
echo "<br>";

var_dump($num1 !== $num2);

echo 1 <=> 1; // 0
echo "<br>";
echo 1 <=> 2; // -1
echo "<br>";
echo 2 <=> 1; // 1
echo "<br>";
echo "<br>";

echo "Logical Operators";

echo "<br>";
echo "<br>";

if($num1 == 5 && $num2 == 5){
    echo "Working";
} else{
    echo "Not working";
}

echo "<br>";
echo "<br>";



echo "String Operators";

echo "<br>";
echo "<br>";

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
var_dump($txt1);

$ar1 = array("a" => "red", "b" => "green");
$ar11 = array("a" => "red", "b" => "green");
$ar111 = array("b" => "green", "a" => "red");
$ar2 = array("c" => "blue", "d" => "yellow");
$ar22 = array("c" => "blue", "d" => "yellow");
$ar222 = array("d" => "yellow", "c" => "blue");

var_dump($ar1 + $ar2);
var_dump($ar1 == $ar2);
var_dump($ar1 === $ar11);
var_dump($ar1 == $ar111);
var_dump($ar1 != $ar2);
var_dump($ar1 <> $ar2);
var_dump($ar1 !== $ar11);

echo "<br>";
echo "<br>";

echo "Multi-Dimensional Array";

echo "<br>";
echo "<br>";

$cd = "Dacia";
$cf = "Ford";
$cr = "Renault";

$multiar = array(
  $cd => ["Logan", "Sandero", "Duster"],
    $cf => ["Mondeo", "Focus", "Transit"],
    $cr => [
        "Cargo" => [
            "Modul I Cargo", "Modul II Cargo"
        ],
        "Sedan" => [
            "Modul I Sedan", "Modul II Sedan"
            ]
    ]
);

var_dump($multiar);
var_dump($multiar[$cr]);
var_dump($multiar["Renault"]["Cargo"]);
var_dump($multiar["Renault"]["Cargo"][1]);
var_dump($multiar[$cf]);

echo "<br>";
echo "<br>";

echo "If statements";

echo "<br>";
echo "<br>";

$dix1 = 5;
echo strlen($dix1);

echo "<br>";
echo "<br>";

if ($dix1 <= 13){
    echo "Child";
}elseif ($dix1>=13 && $dix1<=19){
    echo "Teenager";
}else{
    echo "Adult";
};

echo "<br>";
echo "<br>";

echo "Switch";

echo "<br>";
echo "<br>";

switch ($cd){
    case "Renault":
        echo "Masina ta e un Renault";
        break;
    case "Ford":
        echo "Masina ta e un Ford";
        break;
    case "Dacia":
        echo "Masina ta e o Dacie";
        break;
    default:
        echo "Nu ai o selectie default!";
}

echo "<br>";
echo "<br>";

switch ($dix1){
    case $dix1 <= 13:
        echo "Free Entry";
        break;
    case $dix1 >= 13 && $dix1 <=19:
        echo "Teenager: Discount Price - 10lei";
        break;
    default:
        echo "Please enter correct Age";
}

echo "<br>";
echo "<br>";

echo "Loop";

echo "<br>";
echo "<br>";

while($dix1 >= 5 && $dix1 <=10 ){
    echo "The number is: $dix1 <br>";
    $dix1++;
};

echo "<br>";
echo "<br>";

for ($dix11 = 5; $dix11 <= 10; $dix11++){
    echo "The number is $dix11 <br>" ;
};

echo "<br>";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");
echo "While the roses are <mark>" . $colors[0] . "</mark>
, lilies are <mark>" . $colors[2] . "</mark>
 and the grass is <mark>" . $colors[1] . "</mark>.";

echo "<br>";

foreach ($colors as $value) {
    echo "$value <br>";
}

echo "<br>";
echo "<br>";

for($i = 0; $i < count($colors); $i++){
     echo $colors[$i] . "<br>";
}

echo "<br>";
echo "<br>";

$dac = "Dacia";
$ford = "Ford";
$ren = "Renault";
$numbers = "31";



$multii = [
    ["typ" => "Dacia", "num" => $numbers ,"model" => "Sandero"],
    ["typ" => "Ford", "num" => $numbers, "model" => "Mondeo"],
    ["typ" => "Renault", "num" => $numbers, "model" => "Clio"]
];

foreach($multii as $car){
    echo $car["typ"] . " made "  . $car["num"] . " " . $car["model"] . " models.";
    echo '<br>';

}

echo "<br>";
echo "<br>";

$col1 = array('white', 'green', 'red');
echo "
    <ul>
        <li>$col1[1]</li>
        <li>$col1[0]</li>
        <li>$col1[2]</li>
    </ul>
";

echo "<br>";
echo "<br>";

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);
foreach($ceu as $country => $capital){
    echo "The capital of " . $country . " is " . $capital . "<br>";
}

echo "<br>";
echo "<br>";

$ftype = "Paste";

$foodarray = [
    ["ftype" => $ftype, "ing" => "paste" . " / " . "ton" . " / " . "branza"],
    ["ftype" => $ftype, "ing" => "paste" . " / " . "carnati" . " / " . "usturoi"],
];

foreach($foodarray as $food){
    echo $food["ftype"] . " is made with: <mark>"  . $food["ing"] ."</mark>";
    echo '<br>';

}

echo "<br>";
echo "<br>";

$cars = array(
    "Dacia",
    "Renault",
    "Volvo"
);

for($ii = 0; $ii < count($cars); $ii++){
    echo $cars[$ii] . "<br>";
}

echo "<br>";
echo "<br>";

for($i = 5; $i <= 15; $i++){
    echo $i . "<br>";
}

echo "<br>";
echo "<br>";

$count = 5;
while($count <= 15){
    echo $count;
    echo "<br>";

    $count++;
}

echo "<br>";
echo "<br>";

$dayfood = array
(
    array("Luni", "Cartofi", "Ceafa"),
    array("Marti", "Paste", "Ton"),
    array("Miercuri", "Pateuri", "Branza"),
);

$coundf = count($dayfood);

for($row = 0; $row < $coundf; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < $coundf; $col++) {
        echo "<li>".$dayfood[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo '<br>';
echo '<br>';

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];

echo "<br>";
for($i=1; $i<=3; $i++){
    echo "The number is " . $i . "<br>";
}

echo "<br>";
echo "<br>";

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

#https://www.w3schools.com/php/php_string.asp
//https://www.php.net/manual/en/language.types.intro.php



