<?php

namespace App\Http\Controllers;
use App\Models\PowerModel;
use Illuminate\Http\Request;

class PowerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function powerShow(){
        $power = PowerModel::all();
        return response()-> json($power);
    }

    public function powerShowOne($id){
        $power = PowerModel::find($id);
        return response()-> json($power);
    }

    public function powerDelete($id){
        $power = PowerModel::find($id);
        $power -> delete();
    }

    public function powerAdd(Request $request){
        $name = $request -> input("name");
        $power = $request -> input("power");
        $price = $request -> input("price");
        $powerPost = new PowerModel();
        $powerPost -> name = $name;
        $powerPost -> power = $power;
        $powerPost -> price = $price;
        $powerPost -> save();
        return response()-> json($powerPost);
    }

    public function powerEdit(Request $request, $id){
        $name = $request -> input("name");
        $power = $request -> input("power");
        $price = $request -> input("price");
        $powerPost = PowerModel::find($id);
        $powerPost -> name = $name;
        $powerPost -> power = $power;
        $powerPost -> price = $price;
        $powerPost -> save();
        return response()-> json($powerPost);
    }
}
