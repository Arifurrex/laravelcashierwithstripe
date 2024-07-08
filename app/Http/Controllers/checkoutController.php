<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = "price_1PZy11Rp02nYW9h77sWpkpUN")
    {
        return $request->user()
        ->newSubscription('prod_QQpgrMiIJngBT3', $plan)
        ->checkout([
            'success_url' => route('success'),
            'cancel_url' => route('dashboard'),
        ]);
    }
}
