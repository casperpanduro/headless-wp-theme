<?php

namespace CodeByPanduro\Helpers;

/**
 * Convert a string to sentence case
 */
class SentenceCase {

    /**
     * A static helper method to convert a string to sentence case
     * @param string $string
     * @return string
     */
    public static function convert(string $string): string {
        return (new self)->sentenceCase($string);
    }

    /**
     * Convert a string to sentence case
     * @param string $input
     * @return string
     */
    public function sentenceCase(string $input): string {
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

    /**
     * Pluralize a word
     * @param string $word
     * @return string
     */
    public function pluralize(string $word): string {
        // Simple pluralization example - add an 's' to the end of the word
        return $word . 's';
    }
}
