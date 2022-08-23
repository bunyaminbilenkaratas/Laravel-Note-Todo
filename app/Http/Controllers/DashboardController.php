<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Note;
use App\Models\Todo;
use App\Models\Task;

class DashboardController extends Controller
{
    public function dash(){

        $data = array ();
        
        $userid = Auth::id();
        $todocount = Todo::where('userid', "$userid")->count();
        $notecount = Note::where('userid', "$userid")->count();
        $totalcount = $todocount + $notecount;

        $counter = $totalcount;

        if($todocount == 0 && $notecount !=0){
            while($notecount !=0){
                $lastnote = Note::where('userid', "$userid")->skip($notecount-1)->take(1)->first();
                
                $lastnotearray = array("note", $lastnote->id, $lastnote->title, $lastnote->content, date('d/m/Y', strtotime($lastnote->date)));
                array_push($data, $lastnotearray);

                $notecount--;
            }
        }

        else if($notecount == 0 && $todocount !=0){
            while($todocount !=0){
                
                $lasttodo = Todo::where('userid', "$userid")->skip($notecount-1)->take(1)->first();

               $checks = array();
               $lasttodoarray = array("todo", $lasttodo->id, $lasttodo->title, date('d/m/Y', strtotime($lasttodo->date)), $lasttodo->image, $checks);

               $allchecks = Task::where('todoid', $lasttodo->todoid)->get();
               
                foreach ($allchecks as $chk) {
                    $newcheckarray = array("check", $chk->id, $chk->content, $chk->isdone);
                    array_push($checks, $newcheckarray);
                }

                array_push($data, $lasttodoarray);

               $todocount--;

            }
            
        }
        
        else{
        while($counter != 0){
            $todolastrecord = Todo::where('userid', "$userid")->orderBy('updated_at')->skip($todocount-1)->take(1)->first()->updated_at;
            //$notelastrecord = Note::where('userid', "$userid")->orderBy('updated_at')->get($notecount)->updated_at;
            $notelastrecord = Note::where('userid', "$userid")->orderBy('updated_at')->skip($notecount-1)->take(1)->first()->updated_at;
            
            if($todolastrecord > $notelastrecord) # hata olabilir. tam tersi de olabilir.
            {
                
                $lasttodo = Todo::where('userid', "$userid")->orderBy('updated_at')->skip($todocount-1)->take(1)->first();
               $checks = array();
               

               $allchecks = Task::where('todoid', $lasttodo->id)->get();

                foreach ($allchecks as $chk) {
                    $newcheckarray = array("check", $chk->id, $chk->content, $chk->isdone);
                    array_push($checks, $newcheckarray);
                }
                $lasttodoarray = array("todo", $lasttodo->id, $lasttodo->title, date('d/m/Y', strtotime($lasttodo->date)), $lasttodo->image, $checks);
                array_push($data, $lasttodoarray);
                
               $todocount--;

            }
            else{
                $lastnote = Note::where('userid', "$userid")->skip($notecount-1)->take(1)->first();
                
                $lastnotearray = array("note", $lastnote->id, $lastnote->title, $lastnote->content, date('d/m/Y', strtotime($lastnote->date)));
                array_push($data, $lastnotearray);

                $notecount--;

            }
            $counter--;
            }
        }

        return view('dashboard', ['data' => $data]);
    }
}
