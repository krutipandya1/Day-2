 1(Echo)
<html>
<body>
<h1>hii there</h1>
<?php echo "the best example of php";?>
</body>
</html>

<br><br>
2 (comments)
<?php 
//this is a single line comments
#you can also make single line comments like this
?>
<?php 
/*
This comment block spans
over multiple 
lines
*/
?>

<br><br>
 3 (case sensitivity)
<?php
echo "<br>";
ECHO "hello";
echo "<br>";
echo "welcome to developer news";
echo "<br>";
EcHo "enjoy all of the ad-free articles";
?>

<br><br>
 3.1
<?php
echo "<br>";
$name = "Quincy";
echo "Hi! My name is". $name ."<br>";
?>

<br><br>
4(variables)
<?php
$greeting = "hello";
$month = 8;
$year = 2019;
echo "<br>";
echo "hi and ". $greeting ."The month is". $month ."and its year is". $year ; 
?>

<br><br>
5(blocks)
<?php
$var = 50;
if($var>0)
{
	echo "<pre>";
	echo " positive as ";
	echo " greater than 0";
	echo "</pre>";
}
?>

<br><br>
6(data type: string)
<?php
$x = "hello world";
$y = 'hello world';
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<br><br>
6.1(data type: integer)
<?php
echo "<br>";
$t = 5666999;
var_dump($t);
?>

<br><br>
 6.2(data type: float)
<?php
echo "<br>";
$t = 5666.999;
var_dump($t);
?>

<br><br>
6.3(data type: array)
<?php
echo "<br>";
$cars = array("volvo","bmw","tata");
var_dump($cars);
?>

<br><br>
6.4(data type: object)
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}
echo "<br>";
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<br><br>
6.5(data type: null)
<?php
$x = "hello world";
$x = null;
var_dump($x);
?>

<br><br>
7(strings: length)
<?php
echo "<br>";
echo strlen("hello world!");
?>

<br><br>
7.1(strings: word)
<?php
echo "<br>";
echo str_word_count("hello world!");
?>

<br><br>
7.2(strings: reverse string)
<?php
echo "<br>";
echo strrev("hello world");
?>

<br><br>
7.3(strings: specific string in a senctence)
<?php
echo "<br>";
echo strpos("hello world","world");
?>

<br><br>
7.4(strings: replace text within a string)
<?php
echo "<br>";
echo str_replace("world!","dolly","hello world!");
?>

<br><br>
8(numbers:check if type of variable is integer)
<?php
echo "<br>";
$x = 886006;
var_dump(is_int($x));
echo "<br>";

$y = 8888333.444;
var_dump(is_int($y));
?>

<br><br>
8.1(numbers:Check if the type of a variable is float)
<?php
echo "<br>";
$t = 8.5; 
var_dump(is_float($t));
?>

<br><br>
8.2(numbers:Check if a numeric value is finite or infinite )
<?php
echo "<br>";
$x = 1.9e411;
var_dump($x);
?>

<br><br>
8.3(numbers:Invalid calculation will return a NaN value )
<?php
echo "<br>";
$tt = acos(8);
var_dump($tt);
?>

<br><br>
8.4(numbers:Check if the variable is numeric)
<?php
echo "<br>";
$y = 77777;
var_dump(is_numeric($y));
echo "<br>";
$t = "hhhh";
var_dump(is_numeric($t));
?>

<br><br>
8.5(numbers:cast float and string into integer)
<?php
echo "<br>";
$a = 11111.88888;
$int_cast = (int)$a;
echo $int_cast;

echo "<br>";
$b = "77777.8888";
$yyy_t = (int)$b;
echo $yyy_t;
?>

<br><br>
9(math: find the value of pi)
<?php
echo "<br>";
echo(pi());
?>

<br><br>
9.1(math: lowest and highest value in list of arguments)
<?php
echo "<br>";
echo(min(0,15,44,80,-84)."<br>");
echo(max(0,15,44,80,-84));
?>

<br><br>
9.2(math: find the absolute(positive) value of a number)
<?php
echo "<br>";
echo(abs(-97.55));
?>

<br><br>
9.3(math: the square root of a number)
<?php
echo "<br>";
echo(sqrt(64)."<br>");
echo(sqrt(0)."<br>");
echo(sqrt(9)."<br>");
echo(sqrt(1));
?>

<br><br>
9.4(math: roundoff)
<?php
echo "<br>";
echo(round(0.70)."<br>");
echo(round(0.18)."<br>");
echo(round(-5.50)."<br>");
echo(round(-4.22));
?>

<br><br>
9.5(math: generate a random number )
<?php
echo "<br>";
echo(rand());
?>

<br><br>
9.6(math: random number between 10 & 100 numbers )
<?php
echo "<br>";
echo(rand(10,100));
?>

<br><br>
10(constants:case sensitive constant name)
<?php
echo "<br>";
define("GREETING","welcome to my page");
echo GREETING;
?>

<br><br>
10.1(constants:case insensitive constant name)
<?php
echo "<br>";
define("GREETING","welcome to my page",true);
echo greeting;
?>

<br><br>
10.2(constants:create a array constant with define)
<?php
echo "<br>";
define("cars",["oddi","bmw","safari"]);
echo cars[0];
?>

<br><br>
10.3(constants:use a constant inside a function)
<?php
echo "<br>";
define("GREETING","hii its me");
function myTest()
{
	echo GREETING;
}
myTest();
?>

<br><br>
11( operation:Addition)
<?php
echo "<br>";
$x = 77;
$y = 12;
echo $x+$y;
?>

<br><br>
11.1(operation:substraction)
<?php
echo "<br>";
$x = 78;
$y = 14;
echo $x-$y;
?>

<br><br>
11.2( operation:multiplication)
<?php
echo "<br>";
$y = 9;
$t = 8;
echo $y*$t;
?>

<br><br>
11.3(operation:division)
<?php
echo "<br>";
$c = 9;
$a = 3;
echo $c/$a;
?>

<br><br>
11.4(operation:modulus)
<?php
echo "<br>";
$a = 70;
$b = 6;
echo $a % $b;
?>

<br><br>
11.5(operation:x=y)
<?php
echo "<br>";
$x = 10;
echo $x;
?>

<br><br>
11.6(operation:x+=y)
<?php
echo "<br>";
$x = 70;
$x += 100;
echo $x;
?>

<br><br>
11.7(operation:x-=y)
<?php
echo "<br>";
$x = 100;
$x -=90;
echo $x;
?>

<br><br>
11.8(operation:x*=y)
<?php
echo "<br>";
$y = 3;
$y *=4;
echo $y;
?>

<br><br>
11.9(operation:x/=y)
<?php
echo "<br>";
$t = 12;
$t /= 6;
echo $t;
?>

<br><br>
11.10(operation:x%=y)
<?php
echo "<br>";
$t = 12;
$t %= 7;
echo $t;
?>

<br><br>
11.11(operation: = =)
<?php
echo "<br>";
$t = 12;
$e = "12";
var_dump($t==$e);
?>

<br><br>
11.12(operation:=== to identify data type)
<?php
echo "<br>";
$t = 12;
$y = 12; 
var_dump($t===$y);
?>

<br><br>
11.13(operation:x !=y x is not equal to y)
<?php
echo "<br>";
$x = 12;
$y = "12";
var_dump($x != $y);
?>

<br><br>
11.14( operation:x <> y x is not equal to y)
<?php
echo "<br>";
$t = 12;
$e = 1;
var_dump($t <> $e);
?>


<br><br>
11.15( operation:x !== y)
<?php
echo "<br>";
$t = 12;
$e = "1";
var_dump($t !== $e);
?>


<br><br>
11.16( operation:(>))
<?php
echo "<br>";
$t = 12;
$e = 1;
var_dump($t > $e);
?>

<br><br>
11.17( operation:(less than))
<?php
echo "<br>";
$t = 12;
$e = 1;
var_dump($t < $e);
?>

<br><br>
11.18(operation:>=)
<?php
echo "<br>";
$t = 12;
$e = 12;
var_dump($t >= $e);
?>

<br><br>
11.19(operation:less than equal to)
<?php
echo "<br>";
$t = 1;
$e = 12;
var_dump($t <= $e);
?>


<br><br>
11.20(operation:<=>)
<?php
echo "<br>";
$t = 1;
$e = 12;
echo ($t <=> $e);
echo "<br>";
 $t = 1;
 $w = 1;
 echo ($t <=> $w);
 echo "<br>";
 $t = 12;
 $r = 3;
 echo ($t <=> $r);
?>

<br><br>
11.21(operation:++$x)
<?php
echo "<br>";
$t = 1;
echo ++$t;
?>

<br><br>
11.22(operation:$x++)
<?php
echo "<br>";
$t = 1;
echo $t++;
?>

<br><br>
11.23(operation:--$x)
<?php
echo "<br>";
$t = 1;
echo --$t;
?>


<br><br>
11.24(operation:$x--)
<?php
echo "<br>";
$t = 1;
echo $t--;
?>


<br><br>
11.25(operation:and)
<?php
echo "<br>";
$t = 1;
$y = 2;
if ($t == 1 and $y == 2)
{
	echo "hii";
}
?>


<br><br>
11.26( operation:or)
<?php
echo "<br>";
$t = 1;
$y = 2;
if ($t == 1 or $y == 7)
{
	echo "hii";
}
?>

<br><br>
11.27( operation:xor)
<?php
echo "<br>";
$t = 1;
$y = 2;
if ($t == 1 xor $y == 7)
{
	echo "hii";
}
?>

<br><br>
11.28( operation:&&(and))
<?php
echo "<br>";
$t = 1;
$y = 2;
if ($t == 1 && $y == 2)
{
	echo "hii";
}
?>


<br><br>
11.29(operation:||(or))
<?php
echo "<br>";
$t = 1;
$y = 2;
if ($t == 1 || $y == 7)
{
	echo "hii";
}
?>


<br><br>
11.30(operation:not)
<?php
echo "<br>";
$k = 78;
if ($k != 88)
{
	echo "hello world";
}
?>

<br><br>
11.31(operation:concatination of 2 variables)
<?php
echo "<br>";
$k = "yo";
$u = "its kruti here";
echo $k.$u;
?>


<br><br>
11.32(operation:appends $u with $k)
<?php
echo "<br>";
$k = "yo";
$u = "its kruti here";
$k .=$u;
echo $k;
?>


<br><br>
11.33(operation:union(+))
<?php
echo "<br>";
$x = array("a"=>"red", "b"=>"green");
$y = array("c"=>"violet", "d"=>"purple");
print_r($x + $y);
?>

<br><br>
11.34(operation:equality(==))
<?php
echo "<br>";
$x = array("a"=>"red", "b"=>"green");
$y = array("c"=>"red", "d"=>"green");
var_dump($x == $y);
?>

<br><br>
11.35(operation:identity(===))
<?php
echo "<br>";
$x = array("a"=>"red", "b"=>"green");
$y = array("a"=>"red", "b"=>"green");
var_dump($x === $y);
?>

<br><br>
11.36(operation:inequality !=)
<?php
echo "<br>";
$x = array("a"=>"red", "b"=>"green");
$y = array("c"=>"violet", "d"=>"purple");
var_dump($x != $y);
?>

<br><br>
11.37(operation:inequality <>)
<?php
echo "<br>";
$x = array("a"=>"red", "b"=>"green");
$y = array("c"=>"violet", "d"=>"purple");
var_dump($x <> $y);
?>

<br><br>
11.38(operation:non-identity !==)
<?php
echo "<br>";
$x = array("a"=>"red", "b"=>"green");
$y = array("c"=>"violet", "d"=>"purple");
var_dump($x !== $y);
?>

<br><br>
11.39(operation:ternary ?:)
<?php
echo "<br>";
echo $status = (empty($user))? "anonymous" : "logged in";
echo "<br>";
$user = "kruti pandya";
echo $status = (empty($user))? "anonymous" : "logged in";
?>

<br><br>
11.40(operation:Null coalescing)
<?php
echo "<br>";
echo $user = $_POST["user"] ?? "anonymous";
echo "<br>";
echo $color = $color ?? "red";
?>

<br><br>
12(statements:if statement)
<?php
echo "<br>";
$t = date("H");
if ($t<"20")
{
	echo "have a nice day";
}
?>

<br><br>
12.1(statements:if else)
<?php
echo "<br>";
$t = date("H");
if ($t<"20")
{
	echo "have a nice day";
}
else
{
	echo "have a good night!!";
}
?>

<br><br>
12.2(statements:if elseif else)
<?php
echo "<br>";
$t = date("H");
echo "<p> The hour of the server is".$t;
echo ", and will have the following message</p>";
$t = date("H");
if($t<"10")
{
	echo "have a good morning!!";
}
elseif($t<"20")
{
	echo "have a good day";
}
else
{
	echo "have a good night!!";
}
?>

<br><br>
12.3(statements:switch )
<?php
echo "<br>";
$favcolor = "red";
switch($favcolor)
{
	case "red":
	echo "your favorite color is red!";
	break;
	
	case "blue":
	echo "your favorite color is blue";
	break;
	
	case "green":
	echo "your favorite color is green";
	break;
	
	case "yellow":
	echo "your favorite color is yellow";
	break;
	default:
	echo "your favorite color is neither blue, green nor yellow";
}
?>

<br><br>
13(while and for loop:while )
<?php
echo "<br>";
$x = 1;
while($x<=5){
	echo "the number is : $x <br>";
$x++;
}
?>


<br><br>
13.1(while and for loop:do while loop)
<?php
echo "<br>";
$x=1;

do{
	echo "the number is : $x <br>";
	$x++;
}while($x<=5);
?>

<br><br>
13.2(while and for loop:do while loop)
<?php
echo "<br>";
$x=8;
do{
	echo "the number is : $x <br>";
	$x++;
}while($x<=5);
?>

<br><br>
13.3(while and for loop:for loop)
<?php
echo "<br>";
for($x=0;$x<=10;$x++)
{
	echo "the number is : $x <br>";
}
?>

<br><br>
13.4(while and for loop: foreach loop)
<?php
echo "<br>";
$colors = array("red","green","yellow","pink");
foreach ($colors as $value)
{
	echo "$value <br>";
}
?>

<br><br>
13.5(while and for loop:break statement in a loop )
<?php
echo "<br>";
for($x = 0; $x < 10; $x++)
{
	if($x == 4)
	{
		break;
	}
	echo "the number : $x <br>";
}
?>

<br><br>
13.6(while and for loop:continue statement in a loop )
<?php
echo "<br>";
for($x = 0; $x<10; $x++)
{
	if($x == 5)
	{
		continue;
	}
	echo "the number is:$x <br>";
}
?>


<br><br>
14(function: create function )
<?php
echo "<br>";
function msg()
{
	echo "hello world";
}

msg();
?>

<br><br>
14.1(function: function with one argument )
<?php
echo "<br>";
function familyname($fname)
{
	echo "$fname refsnes <br>";
}

familyname("yyyyyy");
familyname("tthhhrr");
familyname("wwwrrreee");
familyname("qqqqrrr");
?>

<br><br>
14.2(function: function with two argument )
<?php
echo "<br>";
function f($fname, $year)
{
	echo "$fname refrences. Born in $year <br>";
}

f("kruti","2000");
f("xyz","2001");
f("abcd","2002");
?>

<br><br>
14.3(function: function with default argument value)
<?php
echo "<br>";
function height(int $mheight = 50)
{
	echo "the height is:$mheight <br>";
}

height(150);
height(250);
height();
height(150);
?>


<br><br>
14.4(function: function that returns a value)
<?php
echo "<br>";
function sum(int $x, int $y)
{
	$z = $y + $x;
	return $z;
}
echo "5+77=".sum(5,77)."<br>";
echo "5+7=".sum(5,7)."<br>";
echo "5+8=".sum(5,8)."<br>";
?>

<br><br>
14.5(function: type declarations )
<?php
echo "<br>";
function add(float $a, float $b):
float
{
	return $a + $b;
}
echo add(88.22,5.6);
?>

<br><br>
14.6(function:passing arguments by refrence)
<?php
echo "<br>";
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>