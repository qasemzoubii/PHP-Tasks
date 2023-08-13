
<?php

// 1.	Write a PHP script to see if the specified year is a leap year or not.
// Sample Input: 2013
// Sample Output: ‘This year is not a leap year’


$year = 2013;
if($year % 4 == 0 ) {
    echo "This Year Is A Leap Year";
}
else {
    echo "This Year Is Not A Leap Year";
}

echo "<br> <br> -----------------------<br> <br>" ;

// 2.Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’

$temp = 27;
if($temp >20 ){
    echo "It is summertime!";
}
else{
    echo "We are in winter";
}

echo "<br> <br> -----------------------<br> <br>";

// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12

$num1 = 2;
$num2 = 2;

if ($num1 == $num2) {
    echo ($num1+$num2) * 3 ;
}
else{
    echo "($num1+$num2)";
}

echo "<br> <br> -----------------------<br> <br>";

// 4.Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

$n1 = 10;
$n2 = 10;
if ($n1 + $n2 == 30 ){
    echo "True";
}
else{
    echo 'False';
}
echo "<br> <br> -----------------------<br> <br>";


// 5.Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

$positive = 20 ;
if($positive %3 == 0 ){
    echo("true");
}
else{
echo "False";
}

echo "<br> <br> -----------------------<br> <br>";


// 6.Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’
$n = 50;
if($n >=20 && $n<=50){
    echo "True";
}
else{
    echo"False";
}

echo "<br> <br> -----------------------<br> <br>";


// 7.Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

$n1=1;
$n2=5;
$n3=9;
if($n1>$n2 && $n1>$n3){
    echo "$n1";
}
elseif($n2>$n1 && $n2>$n3)
echo "$n2";
else {
    echo"$n3";
}

echo "<br> <br> -----------------------<br> <br>";


// 8.	Write PHP script to calculate the monthly electricity bill according to these rules

// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit


$unitBill = 300;
if($unitBill <= 50){
echo $unitBill*2.5;
}else if ($unitBill<=150){
echo ($unitBill-50)*5 + (50*2.5); 
}else if ( $unitBill <=250){
echo (50*2.5)+($unitBill-150)*6.2 + 100*5;
}else{
echo $unitBill*7.5;
}







// 9.Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

$age=15;
if ($age>=18){
    echo "Eligible To Vote.";
}
else{
    echo"Not Eligible To Vote.";
}

echo "<br> <br> -----------------------<br> <br>";


// 10.Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

$number = -60;
if($number>0){
    echo 'Positive';
}
elseif ($number<0){
    echo'Negative ';
}
else{
    echo 'Zero.';
}

echo "<br> <br> -----------------------<br> <br>";


// 11.	Write php script to make a calculator, the calculator should contain the four main operations 
// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

$num1=20;
$num2=30;
$sign="+";
if($sign==="+"){
echo $num1+$num2;
}else if($sign==="-"){
echo $num1-$num2;
}else if($sign==="/"){
echo $num1/$num2;
}else if($sign==="*"){
echo $num1*$num2;
}











// 12.Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$totalScores = count($scores);
$sumScores = array_sum($scores);
$averageScore = $sumScores / $totalScores;

if ($averageScore < 60) {
$grade = 'F';
} elseif ($averageScore < 70) {
$grade = 'D';
} elseif ($averageScore < 80) {
$grade = 'C';
} elseif ($averageScore < 90) {
$grade = 'B';
} else {
$grade = 'A';
}

echo $grade;