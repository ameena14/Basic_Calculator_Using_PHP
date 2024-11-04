<?php

#comments
// first comment

/*
multiple line
*/

//variables
$name="ammu";
$my_First_Name="Shaik";
$My_first_name="Ameena";

//data types
$name="ram";
$sen="I'm a good girl";
$age=22;
$agemimus= -22;   //integer
$price=12.2; // float
$istrue="true"; //boolean
$fruits=array('Mango','Apple','Guava','Banana');
var_dump($fruits);   // array
$brands=[
    'phone'=>'apple',
    'car'=>'BMW'

];
var_dump($brands);

$isEmpty=NULL;   //null
echo "My Naqme Is AMEENA";
echo $name;


// indirect
$user="iam Ameena";
$user="ameena";

echo $user;
// constants
define('App_USer',"welcome friends");
var_dump(value:App_USer);

//function scope
