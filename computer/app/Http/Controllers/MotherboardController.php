<?php

namespace App\Http\Controllers;
use App\Models\MotherboardModel;
use Illuminate\Http\Request;

class MotherboardController extends Controller
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

    public function mbShow(){
        $mb = MotherboardModel::all();
        return response()-> json($mb);
    }

    public function mbShowOne($id){
        $mb = MotherboardModel::find($id);
        return response()-> json($mb);
    }

    public function mbDelete($id){
        $mb = MotherboardModel::find($id);
        $mb -> delete();
    }

    public function mbAdd(Request $request){
        $name = $request -> input("name");
        $socket = $request -> input("socket");
        $format = $request -> input("format");
        $price = $request -> input("price");
        $mbPost = new MotherboardModel();
        $mbPost -> name = $name;
        $mbPost -> format = $format;
        $mbPost -> socket = $socket;
        $mbPost -> price = $price;
        $mbPost -> save();
        return response()-> json($mbPost);
    }

    public function mbEdit(Request $request, $id){
        $name = $request -> input("name");
        $socket = $request -> input("socket");
        $format = $request -> input("format");
        $price = $request -> input("price");
        $mbPost = MotherboardModel::find($id);
        $mbPost -> name = $name;
        $mbPost -> format = $format;
        $mbPost -> socket = $socket;
        $mbPost -> price = $price;
        $mbPost -> save();
        return response()-> json($mbPost);
    }
}
