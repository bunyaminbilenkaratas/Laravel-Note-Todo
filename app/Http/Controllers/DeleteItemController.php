<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
use App\Models\Todo;

use Illuminate\Http\Request;

class DeleteItemController extends Controller
{
    public function deletenote($id){
        $userid = Auth::id();
        if(Note::where('id',"$id")->first()->userid==$userid){
            Note::find($id)->delete();
        }
        return redirect('/');

    }

    public function deletetodo($id){
        $userid = Auth::id();
        if(Todo::where('id',"$id")->first()->userid==$userid){
            Todo::find($id)->delete();
        }
        return redirect('/');
        
    }
}
