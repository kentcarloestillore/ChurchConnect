<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;

class ReceiptController extends Controller
{
    public function index(){
        $receipts = Receipt::orderBy('id', 'desc');

        $receipts->with('church');

        return view('receipts.receipts', ['receipts' => $receipts->get()]);
    }

}
