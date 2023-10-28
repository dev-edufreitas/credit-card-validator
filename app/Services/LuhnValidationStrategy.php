<?php

namespace App\Services;

class LuhnValidationStrategy implements CreditCardValidation
{
    public function validate($number)
    {
        // Remover todos os caracteres não numéricos
        $number = preg_replace('/[^0-9]/', '', $number);

        // Verificar se o número não está vazio e não é apenas zeros
        if (empty($number) || preg_match('/^0+$/', $number)) {
            return [
                'valid' => false,
                'brand' => null
            ];
        }

        $reversedNumber = strrev($number);
        $total = 0;

        for ($i = 0; $i < strlen($reversedNumber); $i++) {
            $digit = (int)$reversedNumber[$i];
            if ($i % 2 == 1) {
                $digit *= 2;

                if ($digit > 9) {
                    $digit -= 9;
                }
            }
            $total += $digit;
        }

        return [
            'valid' => ($total % 10 === 0),
            'brand' => $this->detectCardBrand($number)
        ];
    }


    private function detectCardBrand($number)
    {
        $patterns = [
            'Visa' => '/^4[0-9]{12}(?:[0-9]{3})?$/',
            'MasterCard' => '/^5[1-5][0-9]{14}$/',
            'American Express' => '/^3[47][0-9]{13}$/',
            'Discover' => '/^6(?:011|5[0-9]{2})[0-9]{12}$/'
        ];

        foreach ($patterns as $brand => $pattern) {
            if (preg_match($pattern, $number)) {
                return $brand;
            }
        }

        return 'Desconhecido';
    }
}
