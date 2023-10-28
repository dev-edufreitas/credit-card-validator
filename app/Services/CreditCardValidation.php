<?php

namespace App\Services;

interface CreditCardValidation
{
    public function validate($number);
}