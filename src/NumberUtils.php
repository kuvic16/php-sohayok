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
    private static $_CRORE_LABEL = 'Crore';    

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
    private static $_LAC_LABEL = 'Lac';


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

        $n_number = 0;
        if($number >= self::$_CRORE) {
            $n_number = $number / self::$_CRORE;
            return round($n_number, 2) . ' ' . self::$_CRORE_LABEL;
        } elseif($number >= self::$_LAC) {
            $n_number = $number / self::$_LAC;
            return round($n_number, 2) . ' ' . self::$_LAC_LABEL;
        }
        return $n_number;
    }
}

//$result = NumberUtils::formatted_number_bn(1110000);
//var_dump($result);