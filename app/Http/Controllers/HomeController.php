<?php

namespace App\Http\Controllers;
use App\Reminder;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reminders = Reminder::orderBy('id', 'desc')->get();
        return view('user', ['reminders' => $reminders]);
    }
}
