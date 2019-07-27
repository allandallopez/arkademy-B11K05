<?php
    function count_vowels($word){
        $arr = str_split($word);
        $vocal = ['a', 'i', 'u', 'e', 'o'];
        $found = array_intersect($arr, $vocal);
        $count = count($found);
        
        return $count;
    }

        print(count_vowels('programmer'));
?>