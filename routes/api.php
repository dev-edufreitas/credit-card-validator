<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CreditCardController;


Route::post('/validate-credit-card', [CreditCardController::class, 'validateCreditCard']);
