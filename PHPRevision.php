<?php

echo 'Hello Programing'; /*to print stuff on screen and you can use print too*/


phpinfo();/*info about your php*/




echo '<strong>Na3san ya fa5ry.</strong>';/* for more strong text*/



echo "<input type='text' name='name' value='Refaie'>";/*take care single couts inside big outside and viseversa*/



<?php
$ref = 'Ahmed Refaie';
?>
/*mixing php with html */
<input type='text' name='name' value='<?php echo $ref; ?>'>




echo $Ref = 'Refaie el Dso2y.';
echo $number = 100;
/*var and php awsome izi print */
echo $Ref;
echo $number;



echo 'the date is <strong>'.$day.' '.$date.' '.$year.'</strong>';/* hard way to join text*/



echo "the date is $day $date $year";/* lazy ezi way*/



if(1){
	echo 'TRUE.';	
}else {
	echo 'False.';
}/*1 is automatic true 0 is automatic false*/



$text ='Sometihng';

if($text=='Sometihng'){
	echo 'TRUE.';	
}else {
	echo 'False.';
}/*text for sure also*/





$number = 13;

if($number==10){
	echo'Equal to ten.';
}else if ($number==11){
	echo 'Equal to elevn.';
}else{
	echo'WTF is this number';
}/*if else stamten to make more condition or allowance*/




$number1 = 10;

$number1 +-*/%= 2;

echo $number1;/*Assignment Operations*/



$text = 'Hello';

$text .= ' Refaie.';
/* more ass operators */
echo $text




$num =654;

$upper =1000;
$lower =500;

if ($num<=$upper and $num>=$lower) {
	echo "Sha3'al";
}else {
	echo 'Batal le3b ya baba';
}/* and statment && or and */



$num =2;

$can1 = 2;
$can2 = 4;

if($num==$can1 || $num==$can2){
	echo 'True.';
}/* Or statment can use || or or lol */




$num1= '1';
$num2 = 1;

if($num1===$num2){
	echo'Equal.';
}else {
	echo 'Not Equal.';
}/* Trible equal it compers also the deep stuff */



$counter = 1;

while($counter<=10){
	echo $counter. ' Hello<br>';
	$counter ++;
}/* While loop */




$counter = 13;

do{
	echo 'This will Always show Once.<br>';
	$counter++;
}while($counter<=10)/* do while loop run code atleast once */




for($count= 1; $count <=10; $count++) {
	echo $count.' Kolo Bel FLOOOS $$<br>';
}/* for loop izi squzi to read and control */



$num = 5;

switch ($num) {
	case 1:	
		echo 'One';
	break;
	
	case 2:
		echo 'Two';
	break;
	
	case 3:
		echo 'Three';
	break;
	
	default: 
		echo 'Number Not found';
	break;
}/* switch statment */



$day = 'Monday';

switch ($day) {
	case 'Saturday':	
	case 'Sunday';
		echo 'It\'s a weekend';
	break;
	
	default :
		echo 'Not weekend';
}/* locate your weekend */



echo 'Hello ';

die('Error. Page has Ended');
/* can use also (exit) kills rest of code */
echo ' Programing';
	


function myName() {
	echo 'Refaie';
}

echo 'My name is ';
myName(); /* functions*/



$inum1 = 10;
$inum2 = 12;

function add($num1, $num2){
	echo $num1 + $num2 ;
}
add($inum1, $inum2);/* function app*/




function displayDate($day , $date, $year){
	echo $day.' '.$date.' '.$year;
}
/* more function app */
displayDate('Friday', 15, 2017)



function add($num1, $num2) {
	$result = $num1 + $num2;
	return $result;
}

function divide($num1, $num2){
	$result = $num1 / $num2 ;
	return $result;
}
/* return statment app */
echo $sum = divide(add(10, 10), add(5, 5))



$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip(){
	global $user_ip;
	$string = 'Your ip adress is '.$user_ip;
	echo $string;
}
/* global and functions*/
echo_ip();



$string = 'Messy wessy & kessy .';
$string_word_count = str_word_count($string, 1, '&.');
/* string functions*/
print_r ($string_word_count);



$string = 'abcdefg123456';
$string_shuffled = str_shuffle($string);
/* random charcter generation */
echo $string_shuffled;



$string = 'abcdefg123456';
$string_reversed = strrev($string);

echo $string_reversed;/*reverse function*/




$string1 = 'This is my essay iam going to tlak about php.';
$string2 = 'This is myessay i will be tlking about the php world';

similar_text($string1, $string2, $result);
echo 'The similarty Between them is:'.$result;
/* A compare of percntage of text similarity*/



$string = 'Our Lovely example';
$string_length = strlen($string);

echo $string_length;/* length you know*/



$string = ' rr       Our Lovely example      rr '; 
$string_trimmed= trim($string);

echo $string_trimmed;/* cuts the spaces all */



$food = array('Pizza', 'Meat', 'Chicken', 'Pasta');

$food[4]='Fruit';

print_r($food);/* arraaaaaaay yay woop haahah rick style */




$food = array('Pizza'=>500, 'Meat'=>200, 'Chicken'=>250, 'Pasta'=>400);

echo $food['Pizza'];/* Associative arrays*/



/*
Healthy
Meat
Chicken

UnHealthy
Pasta
Pizza 
*/


$food = array('Healthy'=>
array('Meat', 'Chicken') ,
'UnHealthy'=>
array('Pizza', 'Pasta'));

echo $food ['Healthy'][1];/* multi dimintion for arrays */










































































































































































































































?>