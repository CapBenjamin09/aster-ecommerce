<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
        return view('client.payment.index');
    }

    public function orderCompletion(){

        return view ('client.payment.orderCompletion');

    }
}
