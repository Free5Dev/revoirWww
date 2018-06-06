<?php

$array = array(10, 8, 9, 11, 63, 3);

/**
 * Returns ordered given $array ascending or descending
 * 
 * @param $array
 * @param string $ascOrDesc
 * @return mixed
 */
// function order($array, $ascOrDesc = 'asc') { 

// 	if($ascOrDesc ==  'asc')
// 	{
// 		sort($array); 
// 	}
// 	if($ascOrDesc ==  'desc')
// 	{
//         arsort($array); 
// 	} 
//     return $array;
// }

// var_dump(order($array, 'desc'));
// var_dump(order($array, 'asc')); 


/**
 * Returns odd or even number from given $array
 *
 * @param $array
 * @param string $oddOrEven
 * @return mixed
 */
function oddOrEven($array, $oddOrEven = 'even') {
	$array1 = array();
    $array2 = array();
	for ($i = 0; $i < count($array); $i++) { 
    
    if ($array[$i] % 2 == 0) {
      $array1[] = $array[$i];
    }
    else {
      $array2[] = $array[$i];
    } 
   }
    if($oddOrEven == 'even')
    {
    	$array = $array1;
    }
    if($oddOrEven == 'odd')
    {
    	$array = $array2;
    }
    return $array;
}

var_dump(oddOrEven($array, 'even'));
var_dump(oddOrEven($array, 'odd'));
?>