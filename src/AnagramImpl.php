<?php
//namespace LeadDeskTasks;

include 'Anagram.php';

class AnagramImpl implements Anagram
{
    private function calword($word)
    {
        $map_letter_number = array("E" => 2, "T" => 3, "A" => 5, "O" => 7, "I" => 11,
            "N" => 13, "S" => 17, "H" => 19, "R" => 23, "D" => 29,
            "L" => 31, "C" => 37, "U" => 41, "M" => 43, "W" => 47,
            "F" => 53, "G" => 59, "Y" => 61, "P" => 67, "B" => 71,
            "V" => 73, "K" => 79, "J" => 83, "X" => 89, "Q" => 97,
            "Z" => 101);

        $multiplier = 1;

        $letters = str_split($word);
        
        foreach ($letters as $letter) {
            if (isset($map_letter_number[$letter])) {
                $multiplier *= $map_letter_number[$letter];
            }
        }

        return $multiplier;
    }
    
    public function isAnagram($word1, $word2)
    {
        if(strlen($word1) !== strlen($word2)){
            return false;
        }
        return $this->calword($word1) % $this->calword($word2) == 0;
    }
}