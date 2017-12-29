<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Make;
use App\Mail\AppointmentRequest;
use Illuminate\Support\Facades\Mail;

class AppointmentsController extends Controller
{

    public function request()
    {
        $services = Service::all();
        $makes = Make::all();

        return view('appointments.request', compact('services', 'makes'));
    }

    public function store()
    {
        Mail::to(request('email'))
            ->send(new AppointmentRequest);
        return redirect()->home();
    }

}
