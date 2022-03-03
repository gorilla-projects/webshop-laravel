<?php

namespace App\Http\Controllers;

use App\Models\UserOrders;
use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    public function index()
    {
        dd(Auth()->user()->orders);
        return view('orders', [
            'orders'    => Auth()->user()->orders(),
        ]);
    }
}
