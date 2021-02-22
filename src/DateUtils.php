<?php

namespace kuvic16\PhpSohayok;

use Carbon\Carbon;

/**
 * DateUtils class for date related
 */
class DateUtils
{
    /**
     * Get date from string
     * 
     * @param string $date_string
     * @param string $format
     * 
     * @return mixed Carbon\Carbon | null
     */
    public static function get_date($date_string, $format= 'd-m-Y H:i')
    {
        $date = $date_string ? Carbon::createFromFormat($format, $date_string) : null;
        return $date && $date->year > 0 ? $date : null;
    }
}