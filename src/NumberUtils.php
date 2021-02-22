<?php

namespace kuvic16\PhpSohayok;

class NumberUtils
{

    /**
     * A varibale for crore
     * 
     * @var int $_CRORE
     */
    private static $_CRORE = 10000000;

    /**
     * A varibale for crore label
     * 
     * @var string $_CRORE_LABEL
     */
    private static $_CRORE_LABEL = 'crore';

    /**
     * A varibale for lac
     * 
     * @var int $_LAC
     */
    private static $_LAC = 100000;

    /**
     * A varibale for lac label
     * 
     * @var string $_LAC_LABEL
     */
    private static $_LAC_LABEL = 'lac';


    /**
     * Get formatted number for bangladesh
     * 
     * @param null|double $number
     * 
     * @return string
     */
    public static function formatted_number_bn($number)
    {
        if(!is_numeric($number)) {
            return null;
        }

        $division_by = 0; $label = "";
        if($number >= self::$_CRORE) {
            $division_by = self::$_CRORE;
            $label = self::$_CRORE_LABEL;            
        } elseif($number >= self::$_LAC) {
            $division_by = self::$_LAC;
            $label = self::$_LAC_LABEL;
        }

        if($division_by > 0) {
            $n_number = $number / $division_by;
            $f_number = "";
            if(is_int($n_number)) {
                $f_number = number_format($n_number, 0);
            }else {
                $f_number = number_format(floatval(round($n_number, 2)), 2);
            }
            return $f_number . ' ' . $label;
        }
        return number_format($number, 2);
    }
}

//$result = NumberUtils::formatted_number_bn(12341);
//var_dump($result);