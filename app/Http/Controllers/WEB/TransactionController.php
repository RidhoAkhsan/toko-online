<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::latest()->get();

        return view('pages.admin.transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        // ! Fungsi yang menampilkan halaman data

        // Get data transaction item
        $transactionItem = TransactionItem::with(['product'])->where('transactions_id', $transaction->id);


        // dd($transactionItem)->get();

        return view('pages.admin.transaction.show', compact('transaction', 'transactionItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('pages.admin.transaction.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        // !Fungsi yang mengupdate data

        // Validasi data
        $request->validate([
            'status' => 'required|in:PENDING,SUCCESS,FAILED,SHIPPING,SHIPPED'
        ]);

        // Update Data
        $transaction->update([
            'status'    =>  $request->status
        ]);

        // redirect ke halaman index
        if ($transaction) {
            return redirect()->route('dashboard.transaction.index')
            ->with('success', 'Data transaksi berhasil di update');
        } else {
            return redirect()->route('dashboard.transaction.index')
            ->with('error', 'Data transaksi gagal di update');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
