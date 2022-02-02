<?php
//関数課題1
function sum($arg_1, $arg_2)
{
    $arg_1 = $arg_1 + $arg_2;
    return $arg_1;
}
function sub($arg_1, $arg_2)
{
    $arg_1 = $arg_1 - $arg_2;
    return $arg_1;
}
function mul($arg_1, $arg_2)
{
    $arg_1 = $arg_1 * $arg_2;
    return $arg_1;
}
function div($arg_1, $arg_2)
{
    $arg_1 = $arg_1 / $arg_2;
    return $arg_1;
}
function mod($arg_1, $arg_2)
{
    $arg_1 = $arg_1 % $arg_2;
    return $arg_1;
}

//関数課題2
function sum2(&$arg_1, &$arg_2)
{
    $arg_1 = $arg_1 + $arg_2;
    return $arg_1;
}
function sub2(&$arg_1, &$arg_2)
{
    $arg_1 = $arg_1 - $arg_2;
    return $arg_1;
}
function mul2(&$arg_1, &$arg_2)
{
    $arg_1 = $arg_1 * $arg_2;
    return $arg_1;
}
function div2(&$arg_1, &$arg_2)
{
    $arg_1 = $arg_1 / $arg_2;
    return $arg_1;
}
function mod2(&$arg_1, &$arg_2)
{
    $arg_1 = $arg_1 % $arg_2;
    return $arg_1;
}
?>
