<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Todo;
use App\Models\Task;

class AddItem extends Controller
{
    public function addnote(Request $request){/* bunu yazmayı unutma*/
        $request->validate([
            'title' => 'required|min:1|max:250',
            'content' => 'required|min:1|max:65000'
        ]);

        $userid = Auth::id();
        Note::create([
            'title'=>"$request->title",
            'content'=>"$request->content",
            'userid'=>"$userid"
        ]);

        return redirect('/');
    }

    public function addtodo(Request $request){
        $request->validate([
            'title' => 'required|min:1|max:250',
            'date' => 'required|date',
            'rd' => 'required|min:1|max:7',
            'a1' => 'min:1|max:100',
            'a2' => 'min:1|max:100',
            'a3' => 'min:1|max:100',
            'a4' => 'min:1|max:100',
            'a5' => 'min:1|max:100',
            'a6' => 'min:1|max:100',
            'a7' => 'min:1|max:100',
            'a8' => 'min:1|max:100',
            'a9' => 'min:1|max:100',
            'a10' => 'min:1|max:100'

        ]);
        
        

        $userid = Auth::id();
        Todo::create([
            'userid'=>"$userid",
            'title'=>"$request->title",
            'date'=>"$request->date",
            'image'=>"$request->rd"
        ]);
        $todoid = Todo::where('date', $request->date)->first()->id;

        $counter = 1;
        while($counter<11){
            $contentnumber = 'a'.$counter;

            if($request->$contentnumber !=""){
            Task::create([
                'todoid'=>"$todoid",
                'content'=>$request->$contentnumber,
                'isdone'=>'0'
            ]);
            }

            $counter++;
        }
        return redirect('/');
    }
}
