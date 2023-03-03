<?php

namespace App\Http\Controllers;
use App\Models\RamModel;
use Illuminate\Http\Request;

class RamController extends Controller
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

    public function ramShow(){
        $ram = RamModel::all();
        return response()-> json($ram);
    }

    public function ramShowOne($id){
        $ram = RamModel::find($id);
        return response()-> json($ram);
    }

    public function ramDelete($id){
        $ram = RamModel::find($id);
        $ram -> delete();
    }

    public function ramAdd(Request $request){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $memory = $request -> input("memory");
        $frequency = $request -> input("frequency");
        $price = $request -> input("price");
        $ramPost = new RamModel();
        $ramPost -> name = $name;
        $ramPost -> memory = $memory;
        $ramPost -> frequency = $frequency;
        $ramPost -> type = $type;
        $ramPost -> price = $price;
        $ramPost -> save();
        return response()-> json($ramPost);
    }

    public function ramEdit(Request $request, $id){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $memory = $request -> input("memory");
        $frequency = $request -> input("frequency");
        $price = $request -> input("price");
        $ramPost = RamModel::find($id);
        $ramPost -> name = $name;
        $ramPost -> memory = $memory;
        $ramPost -> frequency = $frequency;
        $ramPost -> type = $type;
        $ramPost -> price = $price;
        $ramPost -> save();
        return response()-> json($ramPost);
    }
}
