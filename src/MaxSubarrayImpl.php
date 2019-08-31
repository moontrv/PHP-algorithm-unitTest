<?php
namespace LeadDeskTasks;

include 'MaxSubarray.php';

class MaxSubarrayImpl implements MaxSubarray
{
    public function contiguous($array)
    {
        $size = sizeof($array);

        $max_found = PHP_INT_MIN;
        $max_till_pos = 0;
  
        for ($i = 0; $i < $size; $i++) {
            if(!is_numeric($array[$i])){
                $max_till_pos = 0;
                continue;
            }
            $max_till_pos = $max_till_pos + $array[$i];
            if ($max_found < $max_till_pos) {
                $max_found = $max_till_pos;
            }
            if ($max_till_pos < 0) {
                $max_till_pos = 0;
            }
        }
        return $max_found;
    }
}

//PHP version 7.2
//Command to run tests:  ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests

/*$test = new MaxSubarrayImpl;
//$value = $test->contiguous([-100000,4,5,5,2222,444]);
$value = $test->contiguous([-100000,-1,-2,-3,-4,-4444]);
echo($value);
*/