<?php

namespace App\Http\Controllers;
use App\Models\ConfigModel;
use Illuminate\Http\Request;

class ConfigController extends Controller
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

    public function configShow(){
        $config = ConfigModel::all();
        return response()-> json($config);
    }

    public function configShowOne($id){
        $config = ConfigModel::find($id);
        return response()-> json($config);
    }

    public function configDelete($id){
        $config = ConfigModel::find($id);
        $config -> delete();
    }

    public function configAdd(Request $request){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $memory = $request -> input("memory");
        $frequency = $request -> input("frequency");
        $price = $request -> input("price");
        $configPost = new ConfigModel();
        $configPost -> name = $name;
        $configPost -> memory = $memory;
        $configPost -> frequency = $frequency;
        $configPost -> type = $type;
        $configPost -> price = $price;
        $configPost -> save();
        return response()-> json($configPost);
    }
}

