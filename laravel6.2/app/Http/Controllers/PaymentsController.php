<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {

        ProductPurchased::dispatch('toy');
        //event(new ProductPurchased('toy'));
        /* request()->user()->notify(new PaymentReceived(900));

        ProductPurchased::dispatch('toy');

        return redirect(route('payments.create'))
            ->with('message', 'Payment made!');
        */    
    }
}
