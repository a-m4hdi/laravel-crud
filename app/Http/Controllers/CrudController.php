<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function Read()
    {
        $Getdata = Crud::orderBy('id', 'asc')->get();
        return view('crud', ['data' => $Getdata]);
    }

    public function Create(Request $req)
    {
        $this->validate($req, [
            'Name' => 'required|between:3,40',
            'Lastname' => 'required|between:3,40',
            'Email' => 'required',
            'Phonenumber' => 'required',
            'Description' => 'required',
        ]);

        $Model = new Crud;
        $Model->Name = $req->Name;
        $Model->Lastname = $req->Lastname;
        $Model->Email = $req->Email;
        $Model->Phonenumber = $req->Phonenumber;
        $Model->Description = $req->Description;
        $Model->save();
        return redirect('/')->with('Create', 'Your data was added.');
    }

    public function Delete($id)
    {
        $GetData = Crud::where('id', $id);
        $GetData->delete();
        return redirect('/')->with('Delete', 'Your data was deleted.');
    }

}
