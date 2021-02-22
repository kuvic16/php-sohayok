<?php

namespace kuvic16\PhpSohayok;

class TextUtils
{
    /**
     * Formatted large text with detecting new line
     * 
     * @param string $large_text
     * 
     * @return string
     */
    public static function formatted_large_text($large_text) {
        $lines = explode("\n", $large_text);
        $large_formatted_text = "";
        foreach($lines as $line) {
           $cs = str_split($line);
           $beg = true; $nline = '';
           foreach($cs as $c) {
                 if($beg && $c == ' ') {
                    $nline .= '&nbsp;';
                 }else {
                    $beg = false;
                    $nline .= $c;
                 }
           }
           $large_formatted_text .= '<p>' . $nline . '</p>';
        }
        return $large_formatted_text;
     }
}