<?php

namespace App\Http\Controllers;
use App\Models\CoolingModel;
use Illuminate\Http\Request;

class CoolingController extends Controller
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

    public function coolingShow(){
        $cooling = CoolingModel::all();
        return response()-> json($cooling);
    }

    public function coolingShowOne($id){
        $cooling = CoolingModel::find($id);
        return response()-> json($cooling);
    }

    public function coolingDelete($id){
        $cooling = CoolingModel::find($id);
        $cooling -> delete();
    }

    public function coolingAdd(Request $request){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $price = $request -> input("price");
        $coolingPost = new CoolingModel();
        $coolingPost -> name = $name;
        $coolingPost -> type = $type;
        $coolingPost -> price = $price;
        $coolingPost -> save();
        return response()-> json($coolingPost);
    }

    public function coolingEdit(Request $request, $id){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $price = $request -> input("price");
        $coolingPost = CoolingModel::find($id);
        $coolingPost -> name = $name;
        $coolingPost -> type = $type;
        $coolingPost -> price = $price;
        $coolingPost -> save();
        return response()-> json($coolingPost);
    }
}
