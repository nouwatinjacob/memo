<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;

class CreatesController extends Controller
{
    public function home(){
        $reminders = Reminder::all();
        return view('home', ['reminders' => $reminders]);
    }
}
