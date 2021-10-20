<?php

namespace App\Services;

class DateCheck {

    public function isValid($date, $format = "d/m/Y") {
        $d = \DateTime::createFromFormat($format, $date);
        if ($d && (int) $d->format('Y') < 1900) {
          return FALSE;
        }

        return $d && \DateTime::getLastErrors()['warning_count'] == 0 && \DateTime::getLastErrors()['error_count'] == 0;
    }
}
