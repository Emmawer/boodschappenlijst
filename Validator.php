<?php
class Validator {

    public static function string($value, $min=1, $max=INF){
        if (!is_numeric($value)){
            $len =strlen(trim($value));
            if ($len<= $max && $len>= $min){
                return true;
            }
        }
        return false;
    }

    public static function integer($value, $min, $max=INF){
        if (is_numeric($value)){
            if ($value <=$max && $value >= $min){
                return filter_var($value, FILTER_VALIDATE_INT) !== false;
            }
        }
        return false;
    }

    public static function decimal($value){
        if (is_numeric($value)){
            return preg_match('/^\d+\.\d{2}$/', $value);
        }
    }
}