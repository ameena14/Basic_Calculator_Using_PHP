<?php

$username="AmmuRamSDFGHJKWERTYUIXCVBNMWSEDTFYHJK";
if ($username=="AmmuRam1"){
    echo "{$username} Exits";   

}elseif(strlen($username) < 15){
    echo "username is too short";
}elseif(strlen($username)>25){
    echo "username is too long";
}
else{
    echo "Username Does Not Exit";
}

//switch stmts
switch($username){
    case strlen($username) <10:
        echo "username is less than 10 characters";
        break;
    case strlen($username) <30:
        echo "username is less than 20 characters";
        break;
    case strlen($username) <30:
        echo "username is less than 30 characters";
        break;
    default:
        echo "YOU ARE USING SOOOO MANY CHARACTERS";

}


//TERNARY OPERATOR
$user="Ameena";

echo $user ? "Username is {$user}" : "Username is not been set";

//foreach loop
$brands=['Apple','Microsoft','Vivo'];

foreach($brands as $brand){
    var_dump($brand);
}

//while loops
$brands=['Apple','Microsoft','Vivo'];
$i=1;

/*while($i < 10){

    echo $i++;

}
*/
do{
    echo $i++;
    break;
} while($i<10);

//for loop for(counter value;test counter;increment counter)
$fruits=['Apple','Banana','Guava','Mango'];

for($i=1; $i <= 10; $i++){
        echo $i;
}

