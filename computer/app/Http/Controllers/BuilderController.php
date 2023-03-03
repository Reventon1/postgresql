<?php

namespace App\Http\Controllers;
use App\Models\Builder;
use Illuminate\Http\Request;

class BuilderController extends Controller
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

    public function cpuShow(){
        $add = Builder::all();
        return response()-> json($add);
    }

    public function cpuShowOne($id){
        $add = Builder::find($id);
        return response()-> json($add);
    }

    public function cpuAdd(Request $request){
        $name = $request -> input("name");
        $frequency = $request -> input("frequency");
        $cores = $request -> input("cores");
        $price = $request -> input("price");
        $socket = $request -> input("socket");
        $addPost = new Builder();
        $addPost -> name = $name;
        $addPost -> frequency = $frequency;
        $addPost -> cores = $cores;
        $addPost -> price = $price;
        $addPost -> socket = $socket;
        $addPost -> save();
        return response()-> json($addPost);
    }

    public function cpuDelete(Request $request, $id){
        $gtable = Builder::find($id);
        $gtable -> delete();
    }

    public function cpuEdit(Request $request, $id){
        $name = $request -> input("name");
        $frequency = $request -> input("frequency");
        $cores = $request -> input("cores");
        $price = $request -> input("price");
        $socket = $request -> input("socket");
        $addPost = Builder::find($id);
        $addPost -> name = $name;
        $addPost -> frequency = $frequency;
        $addPost -> cores = $cores;
        $addPost -> price = $price;
        $addPost -> socket = $socket;
        $addPost -> save();
        return response()-> json($addPost);
    }
}
