<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Make;
use App\Mail\BudgetRequest;
use Illuminate\Support\Facades\Mail;

class BudgetController extends Controller
{

    public function request()
    {
        $services = Service::all();
        $makes = Make::all();

        return view('budget.request', compact('services', 'makes'));
    }

    public function store()
    {
        Mail::to(request('email'))
            ->send(new BudgetRequest);
        return redirect()->home();
    }

}
