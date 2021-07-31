<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

use App\Models\Payment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $clients_count = Client::all()->count();

        $payments_count = Payment::all()->count();

        $latest_transactions = Payment::orderBy('created_at', 'DESC')->get();

        return view('home', compact('clients_count', 'payments_count', 'latest_transactions'));
    }
}
