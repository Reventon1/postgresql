<?php

namespace App\Http\Controllers;
use App\Models\CaseModel;
use Illuminate\Http\Request;

class CaseController extends Controller
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

    public function caseShow(){
        $case = CaseModel::all();
        return response()-> json($case);
    }

    public function caseShowOne($id){
        $case = CaseModel::find($id);
        return response()-> json($case);
    }

    public function caseDelete($id){
        $case = CaseModel::find($id);
        $case -> delete();
    }

    public function caseAdd(Request $request){
        $name = $request -> input("name");
        $format = $request -> input("format");
        $price = $request -> input("price");
        $casePost = new CaseModel();
        $casePost -> name = $name;
        $casePost -> format = $format;
        $casePost -> price = $price;
        $casePost -> save();
        return response()-> json($casePost);
    }

    public function caseEdit(Request $request, $id){
        $name = $request -> input("name");
        $format = $request -> input("format");
        $price = $request -> input("price");
        $casePost = CaseModel::find($id);
        $casePost -> name = $name;
        $casePost -> format = $format;
        $casePost -> price = $price;
        $casePost -> save();
        return response()-> json($casePost);
    }
}
