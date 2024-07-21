<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function createSubscription(Request $request)
    {
        $user_id = $request->user_id;
        $amount = 69000;
        $adminFee = 0.2 * $amount;
        $netAmount = $amount - $adminFee;

        $subscription = Subscription::create([
            'user_id' => $user_id,
            'amount' => $amount,
            'net_amount' => $netAmount
        ]);

        return response()->json($subscription);
    }
}
