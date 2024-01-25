<?php
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

$type = is_bool($variable)?'bool':(is_float($variable)?'float':(is_int($variable)?'int':(is_string($variable)?'string':(is_null($variable)?'null':'other'))));

echo "type is $type";

// Another variant
if(is_bool($variable))
    $type = 'bool';
elseif(is_float($variable))
    $type = 'float';
elseif(is_int($variable))
    $type = 'int';
elseif(is_string($variable))
    $type = 'string';
elseif(is_null($variable))
    $type = 'null';
else
    $type = "other";

echo "\ntype is $type";


// Using switch-case
switch(true){
    case is_bool($variable):
        $type='bool';
        break;
    case is_float($variable):
        $type='float';
        break;
    case is_int($variable):
        $type='int';
        break;
    case is_string($variable):
        $type='string';
        break;
    case is_null($variable):
        $type='null';
        break;
    default:
        $type = 'other';
}
echo "\ntype is $type";

?>