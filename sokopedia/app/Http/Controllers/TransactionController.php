<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function viewTransaction()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        return view('transaction', compact('transactions'));
    }

    public function viewDetail($id)
    {
        $details = DetailTransaction::where('transaction_id', $id)->get();

        return view('detail', compact('details'));
    }
}
