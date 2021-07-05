<?php

namespace App\Http\Controllers;

use App\Models\MessageLivre;
use App\Models\admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class messageController extends Controller
{
    public function create(){
        request()->validate(['pseudo' => 'required', 'message' => 'required']);
        MessageLivre::create([
            'pseudo' => request('pseudo'),
            'message' => request('message')
        ]);

        return redirect('/');
    }

    public function list(Request $request){
        $messageAll = DB::select('SELECT * FROM `message_Livres`');
        return view('message', compact('messageAll'));
    }

    public function form(){
        return view('add');
    }

    public function delete($id){
        DB::table('message_livres')->where('id', $id)->delete();
        return redirect('');
    }

    public function showData($id){
        $data=DB::table('message_livres')->where('id', $id)->get();
        return view('edit', ['data'=>$data]);
    }

    public function update(Request $req)
    {
        $data=MessageLivre::find($req->id);
        $data->message=$req->message;
        $data->pseudo=$req->pseudo;
        $data->save();
        return redirect('/');
    }
}