<?php declare(strict_types=1);
/*
echo "hello lena22222" . " no not 2222" ;
echo "<br>" ;
echo "3+5" ;
//print "lena" ;
#echo " <h1>layan</h1>";
*/

                                                                //  PHP varible

/*
$number = 10 ;
$name ='lama';
#print $name;
#print $number;
#print "number =" . $number;
print "number = $number" ;
#print 'number = $number' ; //error must " " not ''
*/
                                                                         //PHP STRING
$name ='lama';
print strlen($name);
print strpos("lena esam" ,"esam");
echo strtoupper($name);
echo "<br>";
$x1 = "Hello jak!";
echo str_replace("jak", "Dolly", $x1);
echo "<br>";
$x2 = " Hello  ";
echo trim($x2);
echo "<br>";
$x3 = "Hello World!";
$y = explode(" ", $x3);
print_r($y);
echo "<br>";
$x4 = "Hello lena";
echo substr($x4, 6, 5);
echo "<br>";
$x5 = 'Hello to \'php\' World!';
echo $x5;
echo "<br>";
$x6 = "Hello to \nphp World!";
                                                                            // PHP UNMBER

echo $x6;
echo "<br>";
$a =8.8;
var_dump($a);
echo "<br>";
$b = 9.1;
var_dump($b);
echo "<br>";
echo var_dump(is_int($b));

echo "<br>";
$x7 = 23465.768;
$int_cast = (int)$x7;
echo $int_cast;
echo "<br>";
echo(pi());
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(sqrt(64));
echo "<br>";
echo(abs(-6.7));
echo "<br>";
                                                                             //  PHP Constants
define("_constnum", "Welcome to php!");
echo _constnum;
echo "<br>";
const NUMCONT = 3.2;
echo NUMCONT;
echo "<br>";
                                                                    // CONST ARRAY
define("NAMES", [
    "lena",
    "layan",
    "eman"
]);
echo NAMES[0];
                                                                              //PHP Operators
echo "<br>";
$X = 8 ;
$Y = 3 ;
echo $X * $Y;
echo "<br>";
echo $X * 2;
echo "<br>";
echo $X >= $Y;
echo "<br>";
#$X = $Y;
echo $X != $Y;
echo "<br>";
echo $X>0 && $Y>0;
echo $X>0 || $Y>0;
echo "<br>";
$X++;
print $X;
echo "<br>";
$Y--;
echo $Y;
echo "<br>";
$X +=5;
echo $X;
echo "<br>";


                                                                           //PHP if Statements


$x = 5;
if($x < 0){
    echo 'x is negeative';
}
elseif($x == 0){
    echo 'x is zero';
}
   else {
       echo 'x is postive';
   }
echo "<br>";

 $x = 6;
if($x > 0) {
    if ($x % 2 == 0) {
        echo 'x is positive and prim';
    }
    else{
      echo 'x is postive and not prim';
}
}
echo "<br>";
$a1 = 200;
$b1 = 33;
$c1 = 500;

if ($a1 > $b1 && $a1 < $c1 ) {
    echo "Both conditions are true";
    echo "<br>";
}

echo $x > 0 ? 'x is positive' : 'x is positive';
echo "<br>";
$d = 0 ;
echo $d > 0 ? 'x is positive' : ($d < 0 ? 'd is negative' : 'd is zero');
                                                                //PHP switch Statement

echo "<br>";

$name = "lena";
switch ($name) {
    case "lena":
        echo "Your favorite name is lena!";
        break;
    case "layan":
        echo "Your favorite name is layan!";
        break;
    case "ahmad":
        echo "Your favorite color is ahmad!";
        break;
    default:
        echo "what fav name??????";
}
echo "<br>";
                                                               //PHP Loops
    $c = 0;
    while ($c <3)    {
        echo 'lena alnajar';
        $c++;
        echo "<br>";
    }

for($x = 1; $x <= 3; $x++) {
    echo 'eman';
    echo "<br>";
}

for($x = 1; $x <= 10; $x++){
    for($y = 1; $y <= 10; $y++){
        echo "$x * $y = " . $x*$y . "<br>";
    }
}
echo " continue <br>";
for ($co = 0; $co < 10; $co++) {
    if ($co == 4) {
        continue;
    }
    echo "The number is: $co <br>";
}
echo " break <br> ";

for ($br = 0; $br < 10; $br++) {
    if ($br == 4) {
        break;
    }
    echo "The number is: $br <br>";
}

                                      // PHP Functions

function hello()
{
    echo "Hello function!";
}
hello();


function familyName($fname) {
    echo "$fname Alnajjar.<br>";
}

familyName("eman");
familyName("laith");
familyName("layan");
familyName("esam");
familyName("ahmad");


function sum($x, $y) {
  $z = $x + $y;
  return "the sum " . $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
echo "<br>";


function def($minheight = 50) {
    echo "The height is : $minheight <br>";
}
def();



function sumnum(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}
$a = sumnum(1,2,3,4,5);
echo " this is sum $a";
echo "<br>";
function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

                                                  //PHP Arrays

$color = Array('red', 'green', 'blue');
print_r($color) ;
unset($color[1]); // delete index 1 and contant with index 1
echo "<br>";
print_r($color) ;
$color[1] ='yellow';
print_r($color);

$num = Array(0,1, 2, 3,4);
$num[5] = 5;
#print_r($num);
array_push($num,6,7,8);
print_r($num);
echo "<br>";
echo $num[3];
$num[6] = 66;
print_r($num);
echo "<br>";
echo count($num);
echo "<br>";
$mark = array(
    'red' => 90,
    'green' => 100,
    'blue' => 200,
);
print_r($mark);
echo "<br>";
echo $mark['red'];
echo "<br>";

$array1= array(0,1,2,3,4,5);
$array2 = array_slice($array1 ,1,3,true);
print_r($array2);
$array3= array(0,4,2,5,7,8);
sort($array3);
print_r($array3);
echo "<br>";
rsort($array3);
print_r($array3);

$array4 = array(
    'item2'=>'French',
    'item3'=>'Spanish',
    'item4'=>'English',
);
asort($array4);
print_r($array4);
echo "<br>";
arsort($array4);
print_r($array4);
echo "<br>";
ksort($array4);
print_r($array4);
echo "<br>";
$str = 'my name is lena';
$array5=explode(' ',$str);//convert string to array
print_r($array5);
echo "<br>";
$array6= array('jordan','egebt','emarat','usa');
$str1= implode(' ',$array6);//convert array to string
print_r($str1);
echo "<br>";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964]; //add to array
print_r($cars);
echo "<br>";
                                                                 //PHP Regular Expressions
$str2 = "Visit school";
$pattern2 = "/School/i";
echo preg_match($pattern2, $str2);
echo "<br>";
                                                        //PHP Global Variables - Superglobals
$x = 75;

function myfunction() {
    echo $GLOBALS['x'];
}
myfunction();
echo "<br>";

$x = 100;
echo $GLOBALS["x"];
echo "<br>";
echo $x;
echo "<br>";

?>





