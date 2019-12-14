<?php
//create function
 function writeMsg()
 {
 	echo "Hello World";
 }
 //calling function
 writeMsg();

 echo "<hr>";

//function with parameter
 function add($num1, $num2)
 {
 	$sum = $num1+$num2;
 	echo "Total: $sum";
 }
 add(10,20);

echo "<hr>";

//Passing Argument by REFERENCE
 function addFive($num)
 {
 	$num+= 5;
 }
 function addSix(&$num)
 {
 	$num+= 6;
 }
 
 $add = 10;
 addFive($add);
 echo "Answer is $add <br>";

 addSix($add);
 echo "Answer is $add";

 echo "<hr>";

 //RETURN value
 function addFunction($num1, $num2)
 {
 	$sum = $num1 + $num2;
 	return $sum;
 }
  $ans = addFunction(10, 20);
 echo "Answer is $ans";

 echo "<hr>";

 //Setting default to NULL
 function printMe($param = NULL)
 {
 	print $param;
 }
 printMe("This is content");
 printMe();

 echo "<hr>";

 //PHP Dynamic Function Call
 function sayHello()
 {
 	echo "Hello World";
 }
 $result = "sayHello";
 $result();

 echo "<hr>";

 //Looping (for,while,do while,foreach)

 //for loop
 $a = 0;
 $b = 5;
 for ($i=0; $i < 5; $i++) { 
 	# code...
 	$a+= 10;
 	$b+= 5;
 }
 echo "A is $a and <br> B is $b";

 echo "<hr>";

//while loop
 $i = 0;
 $num = 50;
 while ($i < 10) {
 	# code...
 	$i++;
 	if($i == 3) break;
 	$num--;
 }
 echo "I is $i and <br> Num is $num";

 echo "<hr>";

 //do while loop
 $i = 0;
 $num = 0;
 do{
 	$i++;
 }
 while ($i < 10);

 echo "I is $i";

 echo "<hr>";

 //foreach() loop
 $array = array(1,2,3,4,5);
 foreach ($array as $value) {
 	# code...
 	if($value == 3) continue;
 	echo "Value is $value <br>";
 }

 echo "<hr>";

 //Array(3)
 //Numeric Array(1)
 $numbers = array(1,2,3,4,5);
 foreach($numbers as $value){
 	echo "Number is: $value <br>";
 }
 echo "<hr>";
 //Numeric Array(2)
 $numbers[0] = "first";
 $numbers[1] = "second";
 $numbers[2] = "third";
 $numbers[3] = "four";
 $numbers[4] = "five";
 foreach ($numbers as $value) {
 	# code...
 	echo "Number is: $value <br>";
 }

 echo "<hr>";

 //Associate Array(1)
 $salary = array("Mg Mg" => 2000, "Aung Aung" => 2500);
 echo "Salary of Mg Mg is " .$salary['Mg Mg']."<br>";

//Associate Array(2)
 $salary['Mg Mg'] = "high";
 echo "Mg Mg's salary is " .$salary['Mg Mg'];

 echo "<hr>";

 //Multidimensional Array
 $marks = array(
 	"Mg Mg" => array(
 		"Myanmar" => 70,
 		"English" => 75,
 		"Math" => 80),

 	"Aung Aung" => array(
 		"Myanmar" => 60,
 		"English" => 70,
 		"Math" => 90)
 );
 echo " English Marks of Mg Mg is :";
 echo $marks['Mg Mg'] ['English'];

 echo "<hr>";
?>