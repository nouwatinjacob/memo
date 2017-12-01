<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;

class CreatesController extends Controller
{
    public function home(){
        $reminders = Reminder::orderBy('id', 'desc')->get();
        return view('user', ['reminders' => $reminders]);
    }

    public function adminHome(){
        $reminders = Reminder::orderBy('id', 'desc')->get();
        return view('admin', ['reminders' => $reminders]);
    }

    public function add(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $reminders = new Reminder;
        $reminders->title = $request->input('title');
        $reminders->description = $request->input('description');
        $reminders->save();
        return redirect('/admin')->with('info','Reminder Sucessfully Posted');       
    }

    public function update($id){
        $reminders = Reminder::find($id);
        return view('update', ['reminders' => $reminders]);    
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description'),            
        );
        Reminder::where('id', $id)
        ->update($data);
        return redirect('/admin')->with('info','Reminder Sucessfully Updated'); 
        }

        public function read($id){
            $reminders = Reminder::find($id);
            return view('read', ['reminders' => $reminders]);
        }

        public function user_read($id){
            $reminders = Reminder::find($id);
            return view('reads', ['reminders' => $reminders]);
        }

        public function delete($id){
            Reminder::where('id', $id)
            ->delete();
            return redirect('/admin')->with('info','Reminder Sucessfully Deleted');
        }
}
