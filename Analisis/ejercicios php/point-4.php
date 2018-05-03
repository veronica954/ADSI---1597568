<?php
/**
 * The above script will produce output 3. By declaring $a and $b

 * 
 */
$intel = 1;
$b = 2;
/**
 * within the function, all references to such variables shall refer to the overall version. 

 * @global type $a
 * @global type $b
 */

function totality()
{
    global $a, $b;

    $b = $a + $b;
}

totality();
echo $b;
?>
