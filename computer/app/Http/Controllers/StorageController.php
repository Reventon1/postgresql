<?php

namespace App\Http\Controllers;
use App\Models\StorageModel;
use Illuminate\Http\Request;

class StorageController extends Controller
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

    public function storageShow(){
        $storage = StorageModel::all();
        return response()-> json($storage);
    }

    public function storageShowOne($id){
        $storage = StorageModel::find($id);
        return response()-> json($storage);
    }

    public function storageDelete($id){
        $storage = StorageModel::find($id);
        $storage -> delete();
    }

    public function storageAdd(Request $request){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $memory = $request -> input("memory");
        $price = $request -> input("price");
        $storagePost = new StorageModel();
        $storagePost -> name = $name;
        $storagePost -> memory = $memory;
        $storagePost -> type = $type;
        $storagePost -> price = $price;
        $storagePost -> save();
        return response()-> json($storagePost);
    }

    public function storageEdit(Request $request, $id){
        $name = $request -> input("name");
        $type = $request -> input("type");
        $memory = $request -> input("memory");
        $price = $request -> input("price");
        $storagePost = StorageModel::find($id);
        $storagePost -> name = $name;
        $storagePost -> memory = $memory;
        $storagePost -> type = $type;
        $storagePost -> price = $price;
        $storagePost -> save();
        return response()-> json($storagePost);
    }
}
