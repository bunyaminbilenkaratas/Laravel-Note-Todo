<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\Todo;

use Illuminate\Http\Request;

class CheckBoxCheckedController extends Controller
{
    public function checked($id){
        $userid = Auth::id();
        $todoid = task::where('id',"$id")->first()->todoid;

        if(Todo::where('id',"$todoid")->first()->userid==$userid){
            $update = Task::find($id);
            $update->isdone = 1;
            $update->save();
        }
        return redirect('/');

    }

    public function unchecked($id){
        $userid = Auth::id();
        $todoid = task::where('id',"$id")->first()->todoid;

        if(Todo::where('id',"$todoid")->first()->userid==$userid){
            $update = Task::find($id);
            $update->isdone = 0;
            $update->save();
        }
        return redirect('/');

    }

}
