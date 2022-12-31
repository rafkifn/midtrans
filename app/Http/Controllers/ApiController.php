<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class ApiController extends Controller
{
    public function payment_handler(Request $request){
        $json = json_decode($request->getContent());
        $signature_key=hash("sha512", $json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));
        if ($signature_key !=$json->signature_key){
            return abort(404);
        }
        $order = Order::where('order_id', $json->order_id)->first();
        $order->update(['status'=>$json->transaction_status]);
    }
}
