<?php
    class Hangman {
        private $word;

        function __construct($word) {
            $this->word = $word;
        }

        function getWord() {
            return $this->word;
        }

        function wordToDashes($word) {
            $wordArray = str_split($word);
            $dashWord = str_replace($wordArray, "-");
            return $dashWord;
        }

        // function checkletteragainst word {
        //
        //
        // }
        //
        // function insertletterinword {
        //
        // }
        //
        // function addbodypart/output aka wrong {
        //     if (6 guesses = true) {
        //         game over
        //     }
        // }


    }

    function randomWord() {
        $wordList = array("guitar", "drums", "timpani", "french horn", "oboe", "bassoon", "cello", "triangle", "clarinet", "flute", "trumpet", "tuba");
        shuffle($wordList);
        $chosen_word = $wordList[0];
        return $chosen_word;
    }

// "      O     "
// "     -|-     "
// "      |     "
// "     /\     "
// "    /  \    "
 ?>
