<?php
/**
 * require calculator.php
 * 
 */
require '../src/calculator.php';
/**
 * use calculator.php
 * 
 */
use CalculatorPHP\calculator;
/**
 * use method get for n1, n2 as float and operation as integer
 * 
 */
$n1= (float)$_GET['n1'];
$n2= (float)$_GET['n2'];
$operation = (integer) $_GET['operation'];
/**
 * call new calculator 
 * 
 */
$calc= new calculator();
/**
 * set n1,n2 in calc
 * 
 */
$calc->setNumber1($n1);
$calc->setNumber2($n2);
        
/**
 * conditionals if for menu of options
 * 
 */
if ($operation === 1){
    $message= 'The sum between ' . $n1  . ' and ' . $n2 . ' is ' . $calc->sum();
}else if ($operation === 2)
{
    $message= 'The rest between ' . $n1  . ' and ' . $n2 . ' is ' . $calc->rest();
}else if ($operation === 3)
{
    $message= 'The multiplication between ' . $n1  . ' and ' . $n2 . ' is ' . $calc->mult();
}else if ($operation === 4)
{
 if ($n1==0 or $n2==0){
     $message= 'not is possible the dividition for zero ';
      }
      else{ 
 $message= 'The dividition between ' . $n1  . ' and ' . $n2 . ' is ' . $calc->div();
 
 } 
}     
 
else if ($operation === 5)
{
    $message= 'The mod of divition between ' . $n1  . ' and ' . $n2 . ' is ' . $calc->mod();
}
else if ($operation === 6)
{
    
    $message= 'The number '   . $n1  . ' elevate to x^2 '  . ' is ' . $calc->x2();
}else if ($operation === 7)
{
    $message= 'The number '  . $n1  . ' elevate to ' . $n2 . ' is ' . $calc->xy();
}
else if ($operation === 8)
{
    $message= 'The log of number ' . $n1  .  ' is ' . $calc->log();
}else if ($operation === 9)
{
    $message= 'The square root of number of ' . $n1  .  ' is ' . $calc->sqrt2();
}else if ($operation === 10)
{
    $message= 'The square of number ' . $n1  . ' and ' . $n2 . ' is ' . $calc->sqrty();
}else
    $message= 'Error the operation is invalid';

/**
 * Show the result in result.php
 * 
 */

require 'result.php';