<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->is_admin) {
        $transaction = Transaction::where('status', 'on progress')->get();
        } else {
        $transaction = Transaction::where('status', 'on progress')
            ->where('created_by', $user->name)
            ->get();
    }

        return view('transaction.index', ['transaction' => $transaction]);
    }
    public function rent()
    {
        return view('transaction.rent');
    }

    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            $validatedData = $request->validate([
                'company' => 'required',
                'nohp' => 'required',
                'date' => 'required',
                'time' => 'required',
                'duration' => 'required',
                'price' => 'required',
                'status' => 'required',
                'bank' => 'required',
                'BAN' => 'required',
            ]);
    
            $validatedData['name'] = $user->name;
            $validatedData['created_by'] = $user->name;
    
            Transaction::create($validatedData);
            return redirect('/transaction')->with('success', 'Silahkan Menunggu Proses Selanjutnya');
        } catch (\Exception $e) {
            return redirect('/transaction/rent')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function edit(Transaction $transaction)
    {
        return view('transaction.edit',[
            'transaction' => $transaction
        ]);
    }
    public function update(Request $request, Transaction $transaction)
    {
        $validatedData = $request->validate([
            'status' => 'required',
        ]);

        // Perbarui data pada database
        $transaction->update($validatedData);
    
        return redirect('/transaction')->with('success', 'Data Berhasil Diperbarui');
    }
    public function payment()
    {
            $user = Auth::user();

        if ($user->is_admin) {
        $transaction = Transaction::where('status', 'waiting for payment')->get();
        } else {
        $transaction = Transaction::where('status', 'waiting for payment')
            ->where('created_by', $user->name)
            ->get();
        }
        return view('transaction.payment', ['transaction' => $transaction]);
    }
    public function pay(Transaction $transaction)
    {
        return view('transaction.pay',[
            'transaction' => $transaction
        ]);
    }
    public function updatePay(Request $request, Transaction $transaction)
    {
        $validatedData = $request->validate([
            'receipt' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'status' => 'required',
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('receipt')) {
            $imagePath = $request->file('receipt')->store('history_images', 'public');
            $validatedData['receipt'] = $imagePath;
        }
    
        // Perbarui data pada database
        $transaction->update($validatedData);
    
        return redirect('/payment')->with('success', 'Data Berhasil Diperbarui');
    }
    public function listPayment()
    {
        $user = Auth::user();

        if ($user->is_admin) {
        $transaction = Transaction::where('status', 'waiting for confirmation')->get();
        } else {
        $transaction = Transaction::where('status', 'waiting for confirmation')
            ->where('created_by', $user->name)
            ->get();
        }

        return view('transaction.listPayment', ['transaction' => $transaction]);
    }
    public function valid(Transaction $transaction)
    {
        return view('transaction.valid',[
            'transaction' => $transaction
        ]);
    }
    public function updateValid(Request $request, Transaction $transaction)
    {
        $validatedData = $request->validate([
            'linkmeet' => '',
            'status' => 'required',
        ]);
    
        // Perbarui data pada database
        $transaction->update($validatedData);
    
        return redirect('/list-payment')->with('success', 'Data Berhasil Diperbarui');
    }
    public function history()
    {
        $user = Auth::user();

        if ($user->is_admin) {
        $transaction = Transaction::get();
        } else {
        $transaction = Transaction::where('created_by', $user->name)
            ->get();
        }

        return view('transaction.history', ['transaction' => $transaction]);
    }
}
