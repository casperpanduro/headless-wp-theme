<?php

namespace CodeByPanduro\Helpers;

class SentenceCase {
    public static function convert($string) {
        return (new self)->sentenceCase($string);
    }

    public function sentenceCase($input) {
        $sentences = preg_split('/(\.\s+|\?\s+|\!\s+)/', $input, -1, PREG_SPLIT_DELIM_CAPTURE);

        $result = '';
        foreach ($sentences as $sentence) {
            $sentence = trim($sentence);
            if (!empty($sentence)) {
                $words = explode(' ', $sentence);
                foreach ($words as &$word) {
                    $word = ucfirst(strtolower($word));
                }

                // Ensure that a single word is pluralized
                if (count($words) === 1) {
                    $words[0] = $this->pluralize($words[0]);
                }

                $result .= implode(' ', $words);
            }
        }

        return $result;
    }

    public function pluralize($word) {
        // Simple pluralization example - add an 's' to the end of the word
        return $word . 's';
    }
}
