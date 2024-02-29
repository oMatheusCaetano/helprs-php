<?php

namespace MatheusCaetano;

use DateTime;

class Helprs
{
    public static function dateDiff($start, $end)
    {
        return date_diff(new DateTime($start), new DateTime($end));
    }

    /**
     * @param string $date
     */
    public static function year($date)
    {
        return date('Y', strtotime($date));
    }

    /**
     * @param string $date
     */
    public static function month($date)
    {
        return date('m', strtotime($date));
    }

    /**
     * @param string $date
     */
    public static function day($date)
    {
        return date('d', strtotime($date));
    }

    /**
     * @param string $date
     */
    public static function weekDay($date)
    {
        return date('w', strtotime($date));
    }
}
