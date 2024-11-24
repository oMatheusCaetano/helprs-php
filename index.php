<?php

namespace MatheusCaetano; 

require_once 'vendor/autoload.php';

use DateTime;

class Helprs
{
    /**
     * @param string $date
     * @return string
     */
    public static function formatCpfCnpj($value) {
        if (empty($value)) return '';

        $CPF_LENGTH = 11;
        $cnpj_cpf = trim(preg_replace("/\D/", '', $value));

        if (empty($cnpj_cpf)) return '';


        return strlen($cnpj_cpf) === $CPF_LENGTH
            ? preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf)
            : preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }

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
