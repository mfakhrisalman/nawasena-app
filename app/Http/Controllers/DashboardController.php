<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();
        $data = [
            'totalUsers' => User::count(),
            'totalProjects' => Project::count(),
            'totalOnProgress' => Transaction::where('created_by',$user->name)
            ->where('status','on progress')->count(),
            'totalOnProgressA' => Transaction::where('status','on progress')->count(),
            'waitingForPayment' => Transaction::where('created_by',$user->name)
            ->where('status','waiting for payment')->count(),
            'waitingForPaymentA' => Transaction::where('status','waiting for payment')->count(),
            'waitingForConfirmation' => Transaction::where('created_by',$user->name)
            ->where('status','waiting for confirmation')->count(),            
            'waitingForConfirmationA' => Transaction::where('status','waiting for confirmation')->count(),            
            'verified' => Transaction::where('created_by',$user->name)
            ->where('status','verified')->count(),            
            'verifiedA' => Transaction::where('status','verified')->count(),            
            'notVerified' => Transaction::where('created_by',$user->name)
            ->where('status','not verified')->count(),   
            'notVerifiedA' => Transaction::where('status','not verified')->count(),   
            'fail' => Transaction::where('created_by',$user->name)
            ->where('status','fail')->count(),            
            'failA' => Transaction::where('status','fail')->count(),            
            'history' => Transaction::where('created_by',$user->name)->count(),
            'historyA' => Transaction::get()->count(),
            
        ];
        
        return view('dashboard', $data);
    }
}
