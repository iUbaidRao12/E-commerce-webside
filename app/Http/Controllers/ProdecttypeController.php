<?php

namespace App\Http\Controllers;

use App\Models\prodecttype;
use Illuminate\Http\Request;

class ProdecttypeController extends Controller
{
  function prodect_type()
  {
    $data = prodecttype::all();
    return view('prodect_type.prodect_type', compact('data'));
  }

  function prodect_type_form()
  {
    return view('prodect_type.prodect_type_form');
  }


  function insertprodtype(Request $req)
  {
    $req->validate(
      ['name' => 'required',],
      ['name.required' => 'Enter Prodect Type Name']
    );
    $data = new prodecttype();
    $data->name = $req->name;
    $data->save();
    return redirect()->route('prodect_type_form')->with('message', 'Prodect Type Saved Successfully');
  }

  function editprodtype($id)
  {
    $data = prodecttype::find($id);
    return view('prodect_type.prodect_update', compact('data'));
  }


  function updateprodtype(Request $req, $id)
  {
    $data = prodecttype::findorfail($id);
    $req->validate(
      ['name' => 'required',],
      ['name.required' => 'Enter Prodect Name']
    );
    $data->name = $req->name;
    $data->save();
    return redirect()->route('prodect_type')->with('message', 'Prodect Type Updated Successfully');
  }

  function deleteprodtype($id)
  {
    $data = prodecttype::find($id);
    $data->delete();
    return redirect()->route('deleteprodtype')->with('message', 'Prodect Type Delete Successfully');
  }
}
