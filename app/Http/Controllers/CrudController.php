<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\School;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    // for create
    function addData(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required | min:5',
            'contact'=>'required | max:10'
        ]);

        $user = new Employee;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->contact=$req->contact;
        $user->save();
        return redirect('/');

    }

    //for read
    function showData()
    {
        $data = Employee::all();
        return view('index',['users'=>$data]);

    }

    //for update
    //directs user to edit page
    function editData($id)
    {
 
        $data = Employee::find($id);
        return view('edit',['data'=>$data]);
    }

    function updateData(Request $req)
    {
               //validation user entry
               $req->validate([
                'name'=>'required',
                'email'=>'required',
                'address'=>'required | min:5',
                'contact'=>'required | max:10'
            ]);
              //updates entry after edit
            $data = Employee::find($req->id);
            $data->name=$req->name;
            $data->email=$req->email;
            $data->address=$req->address;
            $data->contact=$req->contact;
            $data->save();
            // redirect user to the index page after the update
            return redirect('/');
    }

    function deleteData($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect('/');
    }

    
     function showSchools($id)
    {
            $data=School::with('getEmployee')->where('employee_id', $id)->get();
            return view('employeeProfile',compact('data'));
    }
}
