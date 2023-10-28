<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CreditCardValidation;

class CreditCardController extends Controller
{
    private $validationStrategy;

    public function __construct(CreditCardValidation $validationStrategy)
    {
        $this->validationStrategy = $validationStrategy;
    }

    public function validateCreditCard(Request $request)
    {
        $creditCardNumber = str_replace(' ', '', $request->input('credit_card_number'));
    
        $validationResult = $this->validationStrategy->validate($creditCardNumber);
        
        return response()->json([
            'valid' => $validationResult['valid'],
            'brand' => $validationResult['brand']
        ]);
    }
}
