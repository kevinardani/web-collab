<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;


class DonationController extends Controller
{
    public function __construct()
    {
    \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
    \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
    \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
    \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function index()
    {
        return view('donation');
    }

    public function store(Request $request)
    {
        \DB::transaction(function() use ($request) {
            $donation = Donation::create([
                'donor_name' => $request->donor_name,
                'donor_email' => $request->donor_email,
                'donation_type' => $request->donation_type,
                'amount' => floatval($request->amount),
                'note' => $request->note
            ]);

            $payload = [
                'transaction_details' => [
                    'order_id'      => 'SANDBOX-' . uniqid(), 
                    'gros_amount' => $donation->amount, 
                ],
                'customer_details' => [
                    'first_name' => $donation->donor_name, 
                    'email' => $donation->donor_email,
                ],
                'item_details' => [
                    [
                        'id' => $donation->donation_type,
                        'price' => $donation->amount,
                        'quantity' => 1,
                        'name' => ucwords(str_replace('_', '', $donation->donation_type))
                    ]
                ]
            ];

            $snapToken =  \Midtrans\Snap::getSnapToken($payload);
            $donation->snap_token = $snapToken;
            $donation->save();

            $this->response['snap_token'] = $snapToken;
        });

        return response()->json($this->response);
    }
}
