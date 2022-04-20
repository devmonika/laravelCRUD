<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showData(){
        $showData = Crud::all();
        return view ('show_data' , compact('showData'));
    }

    public function addData(){
        return view ('add_data');
    }

    public function storeData(Request $request){
        $crud= new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        return redirect()->back();
    }

    public function editData($id=null){
        $editData= Crud::find($id);
        return view('edit_data', compact(('editData')));
    }

    public function updateData(Request $request, $id){
        $crud= Crud::find($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData= Crud::find($id);
        $deleteData->delete();
        return redirect('/');

    }
}
