<?php

namespace App\Http\Controllers\Web;

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

    public function showValidationForm()
    {
        return view('credit_card_validation_form');
    }

    public function validateCreditCard(Request $request)
    {
        $creditCardNumber = str_replace(' ', '', $request->input('credit_card_number'));
    
        $validationResult = $this->validationStrategy->validate($creditCardNumber);

        return view('validation_result', ['result' => $validationResult]);
    }
}