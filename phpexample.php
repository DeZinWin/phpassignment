<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    echo "Hello World.<br>";
    $x=10;
    echo "The value is $x"."<br>";
    $name="De Zin Win";
    echo "My name is $name"."<br>";

    var_dump($x);
    //object
    class Mycar{
        function Mycar(){
            $this->color="red";
        }
    }
    $carcolor=new Mycar();
    echo $carcolor->color;
    echo strlen($name)."<br>";

    $y=12.5;
    var_dump(is_int($y));
    echo "<br>";
    function add(){
        global $x,$y;
        echo "The sum is".$x=$x+$y."<br>";

    }
    add();

    $text="This is a car";
    echo "Word-count value:".str_word_count($text);
    echo "<br>";

    $floatvalue=125.345;
    echo "Converted value is:".(int)$floatvalue;
    echo "<br>";

    $arr=[100,20,10,-14];
    echo ("Maximum value:".max($arr)."<br>");
    echo ("Minimmum value:".min($arr)."<br>");

   //constant value
   define("coffee","This is a ice-coffee");
   function cof(){
       echo coffee;
   }
   cof();
   echo("<br>");
   $number=20;
   if($number<30){
       echo "The value is less than 30";
   }
   else{
       echo "The value is greater than 30";
   }
   echo "<br>";
   //switch
   $color="red";
   switch($color){
        case "red":
        echo "Your  color is red!";
        break;
        case "green":
        echo "Your color is green!";
        default:
        echo "Your color is neither red nor green";
   }
   echo "<br>";
   $var=5;
   while($var<10){
       echo "Number is:".$var."<br>";
       $var++;
       if($var==9){
       break;
       }
   }
   do{
       echo "Your number is:$var<br>";
       $var++;
   }while($var<10);

   //foreach
   $food=array("noodle","pizza","ice-cream");
   foreach ($food as $value) {
    echo "$value <br>";
  }

  function sub(int $n1,int $n2){
     return  $n1-$n2;
  }
  echo "The result is:".sub(20,10)."<br>";
  echo "The result is:".sub(10,9)."<br>";
  echo "The result is:".sub(22,23)."<br>";

  function mul(int $a,int $b){
    echo $a*$b;
  }
  mul(2,3);
  echo "<br>";
  function string($s1,$s2){
     return "First name is $s1 and last name is $s2";
  }
  echo string("Saw","Kyawt")."<br>";
  echo string("Shwe","Zin")."<br>";
  echo string("Nyunt","nandar")."<br>";
?>
</body>
</html>
