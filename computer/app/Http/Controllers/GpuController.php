<?php

namespace App\Http\Controllers;
use App\Models\GpuModel;
use Illuminate\Http\Request;

class GpuController extends Controller
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

    public function gpuShow(){
        $gpu = GpuModel::all();
        return response()-> json($gpu);
    }

    public function gpuShowOne($id){
        $gpu = GpuModel::find($id);
        return response()-> json($gpu);
    }

    public function gpuAdd(Request $request){
        $name = $request -> input("name");
        $memory = $request -> input("memory");
        $price = $request -> input("price");
        $gpuPost = new GpuModel();
        $gpuPost -> name = $name;
        $gpuPost -> memory = $memory;
        $gpuPost -> price = $price;
        $gpuPost -> save();
        return response()-> json($gpuPost);
    }
    public function gpuEdit(Request $request, $id){
        $name = $request -> input("name");
        $memory = $request -> input("memory");
        $price = $request -> input("price");
        $gpuPost = GpuModel::find($id);
        $gpuPost -> name = $name;
        $gpuPost -> memory = $memory;
        $gpuPost -> price = $price;
        $gpuPost -> save();
        return response()-> json($gpuPost);
    }
    public function gpuDelete(Request $request, $id){
        $gputable = GpuModel::find($id);
        $gputable -> delete();
    }
}
