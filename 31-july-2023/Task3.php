<?php

// 1.Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **

// Expected Output:  total as a number 

$sum=0;
for ($i = 0; $i <=30 ; $i++){
$sum += $i;
}
echo $sum;
echo "<br> <br> -----------------------<br> <br>";

// 4.Create a script to generate the following pattern, using the nested for loop. **  Required **

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5

for ($i=1; $i <=5 ; $i++) { 
for ($j=1; $j <=5 ; $j++) { 
if ($i == $j) {
echo $j;
}else{
echo 0;
}   
}
echo "<br>";
}

echo "<br> <br> -----------------------<br> <br>";


// 5.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. **  Required **

// Sample Input: 5
// Expected Output: 120

$inputNumber = 5;
$factorial = 1;

for ($i = 1; $i <= $inputNumber; $i++) {
$factorial *= $i;
}

echo "$factorial";

echo "<br> <br> -----------------------<br> <br>";


// 6.Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … 



$n1=1; 
$n2=0;
for($i=0;$i<=15;$i++){
echo " $n2,";
$temp=$n1+$n2;
$n1=$n2;  
$n2=$temp; 	
}

echo "<br> <br> -----------------------<br> <br>";


// 9.	Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **


// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15


$n = 5;
$count = 1;
for ($i = $n; $i > 0; $i--) {
for ($j = $i; $j < $n + 1; $j++) {
echo $count;
$count++;
} echo "<br>";
} 
