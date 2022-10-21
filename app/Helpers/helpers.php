<?php

if (!function_exists('check_cpf')) {
    function check_cpf($value)
    {
        if (mb_strlen($value) === 11) {
//      $cpfBlacklist = [
//        '00000000000',
//        '11111111111',
//        '22222222222',
//        '33333333333',
//        '44444444444',
//        '55555555555',
//        '66666666666',
//        '77777777777',
//        '88888888888',
//        '99999999999'
//      ];
//
//      // Check if it is blacklisted
//      if (in_array($value, $cpfBlacklist)) {
//        return true;
//      }

            for ($i = 0, $j = 10, $sum = 0; $i < 9; $i++, $j--) {
                $sum += $value[$i] * $j;
            }

            $result = $sum % 11;
            if ($value[9] !== ($result < 2 ? 0 : 11 - $result)) {
                return false;
            }

            for ($i = 0, $j = 11, $sum = 0; $i < 10; $i++, $j--) {
                $sum += $value[$i] * $j;
            }

            return $value[10] === ($result < 2 ? 0 : 11 - $result);
        }
        return false;
    }
}
