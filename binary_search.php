<?php 
$arr = [5,9,11,15,17,22,25];
// print_r($arr);

function binarySearch($arr, $target){
    $start = 0;
    $end = count($arr) - 1;

    while($start <= $end){
        $mid = (int)(($start + $end) / 2);
        print $start." ".$end." ".$mid. "\n";
        if($arr[$mid] == $target){
            return $mid;
        }else if($arr[$mid] < $target){
            $start = $mid + 1;
        }else{
            $end = $mid - 1;
        }
    }
    return "no data";
}
print binarySearch($arr , 18);