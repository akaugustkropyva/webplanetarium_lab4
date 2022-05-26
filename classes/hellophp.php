<?php

$a = TRUE; // boolean
$b  = "foo"; // string
$c = 12; //int

$d = 1.234; // float
$e = 1.2e3;
$f = 7E-10;


//-----------------------------------------------------------
echo '<-Variables-><br>';
print $c . "<br>"; //print with print + concatenation
echo $c . "<br>";//print with echo

echo gettype($a);//print type
echo "<br>";
echo gettype($b);
echo "<br>";
echo "<br>";


//-----------------------------------------------------------
echo '<-Check Variables-><br>';
if (is_int($c)) {//checks variable for int
    $c += 4;
}
echo "$c<br>";

if (is_string($b)) {//checks variable for string
    echo "String: $b";
}

echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Arrays-><br>';
$array_int = array(1, 2, 3); //int array
var_dump($array_int);

echo "<br>";
foreach ($array_int as $el) {
    echo $el . ' ';
}

echo "<br>";

$array_string = array("foo", "bar", "hallo", "world"); //string array
var_dump($array_string);
echo "<br>";

for($i = 0; $i < 4; $i++){
    echo $array_string[$i] . " ";
}

echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Multi-dimensional arrays-><br>';
$array = array( //multi-dimensional array + associated array
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
var_dump($array); //shows info
echo "<br>";

echo $array["foo"];
echo "<br>";
echo $array[42];
echo "<br>";
var_dump($array["multi"]["dimensional"]["array"]);
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Strings-><br>';
$string1 = "Hello World !";
$arr1 = explode(" ", $string1); //breaks string

echo "$string1<br>";
var_dump($arr1);
echo "<br>";

$array2 = ["Hello", "World", "!"];
$str2 = implode("->", $array2); //

print "$str2<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Function-><br>';
function recursion($var) //recursion
{
    if ($var < 5) {
        echo "$var<br>";
        recursion($var + 1);
    }
}

$var = 0;
recursion($var);

echo "<br>";

//-----------------------------------------------------------
echo '<-OOP-><br>';
include_once "Poster.php";
include_once "SpecialDayPoster.php";
include_once "ActorPoster.php";
include_once "ShoppingCart.php";
include_once "Singleton.php";

$obj = new Poster("Grande show", 100);
$obj1 = new SpecialDayPoster("Small show", 50, "Monday");
$obj2 = new SpecialDayPoster("Tiny show", 20, "Tuesday");
$obj3 = new ActorPoster("Simple show", 70, "Di Caprio");
$obj4 = new ActorPoster("Majestic show", 200, "Ray Relnolds");
$obj5 = new SpecialDayPoster("Special show", 150, "Saturday");

echo $obj;
echo "<br>";
echo $obj1;
echo "<br>";
echo $obj2;
echo "<br>";
echo $obj3;
echo "<br>";
echo $obj4;
echo "<br>";
echo $obj5;
echo "<br>";

$bag = new ShoppingCart(array($obj1, $obj2, $obj3));

echo $bag;
echo "<br>";
$bag->add($obj4);
$bag->add($obj5);

echo $bag;
echo "<br>";

$price = $bag->get_price();

echo $price;
echo "<br>";
echo "<br>";

//-----------------------------------------------------------
echo '<-Singleton-><br>';
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2)
    echo "Ok!";
else
    echo "Error!";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";