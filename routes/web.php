<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\CreditCardController;

// Rota para exibir o formulário de validação
Route::get('/', [CreditCardController::class, 'showValidationForm']);

// Rota para processar a validação do cartão de crédito
Route::post('/validate-credit-card', [CreditCardController::class, 'validateCreditCard']);