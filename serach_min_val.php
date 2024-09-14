<?php
$arr = [4,5,6,0,8,1,2,3,4,9,12,28,-1];
// $count = count($arr);
// echo $count;

function findMinimunNumber($arr){
    $start = 0;
    $end = count($arr) - 1;
    $lastItem =  $arr[$end];
    $ans = '';
    while($start <= $end){
        $mid = floor(($start + $end) / 2);
        if($arr[$mid] > $lastItem){
            $start = $mid + 1;
        }else{
            $ans = $mid;
            $end = $mid - 1;
        }
    }
    return $arr[$ans];
}

print (findMinimunNumber($arr));


//CODE EXPLANATION  
//The function findMinimunNumber takes an array as input and returns the minimum number in the 
//array.

// start = 0
// end = 12
// mid = 6
// when mid = 6, then 6 no value = 2, that means 2 > -1
// so, we turn to right, 

// start = 0
// end = 6- 1 - 5
// mid 2
// when mid = 2, then 2 no value = 6, that means 6 > -1
// so, we turn to right,

// start = 0
// end =  2 - 1 = 1
// mid = 0
// when mid = 0, then 0 no value = 4, that means 4 > -1
// so, we turn to right,

// start = 0
// end = 0 - 1 = -1


