<?php

// arithmetic operators
$num1=3;
$num2=7;

echo $num1+$num2;
//Assignment operator
$num1=3;
$num2=7;

$num1+=$num2;   //-=,*=.%

echo $num1;


//comparison op
$num1=10;
$num2=3;  // !==(it will compare for data types)

var_dump(value: $num1==$num2);      //  >=,<=,<>,!= bool(true)


//logical
$username="Hi welcome";
$password="Ab@140122";

/*var_dump(
    value:$username=="Hi welcome" && $password=="Ab@140122"
);*/
if($username=="Hi welcome" && $password="Ab@140122"){
        echo 'passed';
    
} else{
    echo "failed";
}
;

//functions
echo strlen(string: "Ameena Weds Ram");

// type 1
/*function displayName(){
    $name="Ameena Ram";

    echo $name;
}

displayName();*/

// type 2
function displayname( string $name, int $age){
    echo "{$name} is {$age} years old";
}
displayname(name:"AMMURAM", age:22);