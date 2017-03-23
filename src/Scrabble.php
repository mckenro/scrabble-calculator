<?php
    class Scrabble
    {
        function letterValue($input)
        {
            $lower_input = strtolower($input);
            $sentence_array = str_split($lower_input);
            $letter_value = 0;
            foreach ($sentence_array as $letter) {
                if (($letter == "a") || ($letter == "e") || ($letter == "i") || ($letter == "o") || ($letter == "u") || ($letter == "l") || ($letter == "n") || ($letter == "r") || ($letter == "s") || ($letter  == "t"))
                {
                $letter_value = $letter_value + 1;
                }
                elseif (($letter == "d") || ($letter == "g"))
                {
                  $letter_value = $letter_value + 2;
                }
                elseif (($letter == "b") || ($letter == "c") || ($letter == "m") || ($letter == "p"))
                {
                  $letter_value = $letter_value + 3;
                }
                elseif (($letter == "f") || ($letter == "h") || ($letter == "v") || ($letter == "w") || ($letter == "y"))
                {
                  $letter_value = $letter_value + 4;
                }
                elseif ($letter == "k")
                {
                  $letter_value = $letter_value + 5;
                }
                elseif ($letter == "j" || $letter == "x")
                {
                  $letter_value = $letter_value + 8;
                }
                elseif ($letter == "q" || $letter == "z")
                {
                  $letter_value = $letter_value + 10;
                }
            }
            return ($letter_value);
          }
    }
?>
