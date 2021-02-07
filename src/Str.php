<?php

namespace Hillel\Str;

class Str
{
    public static function after($subject, $after)
    {
        if (strpos($subject, $after) !== false) {
            return substr($subject, strpos($subject, $after) + strlen($after));
        } else {
            return $subject;
        }
    }
}