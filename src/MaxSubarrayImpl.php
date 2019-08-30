<?php
//namespace LeadDeskTasks;

include 'MaxSubarray.php';

class MaxSubarrayImpl implements MaxSubarray
{
    public function contiguous($array)
    {
        $size = sizeof($array);

        $max_so_far = PHP_INT_MIN;
        $max_ending_here = 0;
  
        for ($i = 0; $i < $size; $i++) {
            $max_ending_here = $max_ending_here + $array[$i];
            if ($max_so_far < $max_ending_here) {
                $max_so_far = $max_ending_here;
            }
  
            if ($max_ending_here < 0) {
                $max_ending_here = 0;
            }
        }
        return $max_so_far;
    }
}