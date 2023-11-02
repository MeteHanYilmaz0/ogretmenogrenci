<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class NoteController extends Controller
{
    //
    public function index(){
        //   $loggedInName=Auth::user()->name;
        $user=Auth::user();

        $notlar=Note::get();

        //$notlar=Note::where("user_id",$user->id)->first();   first yazarsan hata veriyor çünkü notlar 1 defa dönüyor
      //  $notlar=Note::where("user_id",$user->id)->latest("updated_at")->paginate(5);   //latest update tarihini almaz create tarihini alır
        //$notlar=Auth::user()->getnotes();

        return view("front.notes.index",compact("notlar"));
    }

    public function createPage(){
        return view("front.notes.create");
    }

    public function addNote(Request $request){
        //

        $request ->validate(
            [
                "vize_1"=>"required|integer|between:0,100 ",
                "vize_2"=>"required|integer|between:0,100 ",
                "final"=>"required|integer|between:0,100 ",

            ],[
                "vize_1.required"=>"Lütfen not giriniz.",
                "vize_2.required"=>"Lütfen not giriniz.",
                "final.required"=>"Lütfen not giriniz.",

            ]
        );



        // dd("han");
        $note= new Note();
        $note->user_id=Auth::user()->id;
        $note->vize_1=$request->vize_1;
        $note->vize_2=$request->vize_2;
        $note->final=$request->final;
        $note->save();
        return redirect()->route("notes.index")->with("success","Başarıyla kaydedildi.");
    }

    public function detail1($id){
        $not=Note::where("id",$id)->first();
        //$not=Note::find($id); Bu kısa hali üsttekinin

        return view("front.notes.detail1",compact("not"));

    }
}
