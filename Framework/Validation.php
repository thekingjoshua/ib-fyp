<?php 

namespace Framework;

use function PHPSTORM_META\type;

class Validation {
    /**
     * Validate a string
     * @param string $value
     * @param int $min
     * @param int $max
     * @return bool
     */

    public static function string($value, $min = 1, $max = INF){
        if(is_string($value)){
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max; 
        }
        return false;
    }

    /**
     * Validate email
     * @param string $value
     * @return mixed
     */
    public static function email($value){
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

        /**
     * Validate user country
     * @param string $value
     * @param int $min
     * @param int $max
     * @return bool
     */

    public static function country($value, $min = 1, $max = INF){
        if(is_string($value)){
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max; 
        }
        return false;
    }

    /**
     * Validate user phone number
     * @param string $value
     * @return mixed
     */
    public static function phone_no($value){
        $value = intval(trim($value));        
        return filter_var($value, FILTER_VALIDATE_INT);
    }
    /**
     * Match a string against another
     * @param string $name1
     * @param string $name2
     *
     * @return bool
     */
    public static function match($value1, $value2){
        $value1 = trim($value1);
        $value2 = trim($value2);

        return $value1 === $value2;
    }
}

