<?php

namespace App\Http\Controllers;

use App\Models\testModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class FrontUserController extends Controller
{
    public function homepage(){
        return view('user.homepage');
    }
    public function detail($id){
        $detail=testModel::where('id','=',$id)->first();
        if($detail->status=="publish"){
            return view('user.detail',compact('detail'));
        }
        else{
            return redirect('/');
        }
        
    }
    
}
