<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appModel;
use Illuminate\Support\Facades\DB;

class appController extends Controller
{
    public function storeData(Request $request){

        $this-> validate($request,[
            'surname'=>'required',
            'firstname'=>'required',
            'nic'=>'required|max:12|min:10',
            'mobile'=>'required|max:12',
            'email'=>'required',
            'qualification'=>'required',
            'experience' => 'required',
            
       ]);
       $table = new appModel();

       $table->surname    = $request-> input('surname');
       $table->firstname  = $request-> input('firstname');
       $table->nic        = $request-> input('nic');
       $table->mobile     = $request-> input('mobile');
       $table->email      = $request-> input('email');
       $table->qualification   =  $request-> input('qualification');
       $table->experience      = $request-> input('experience');
       
       $table->save();
    return view('show')->with('message','Created Successfully');

      }


    //   public function deleterecord($surname){
    //       $table= appModel::find($surname);
    //       $table-> delete();
    //       return redirect()->back();
    //   }
}
