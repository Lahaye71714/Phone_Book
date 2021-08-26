<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Employees;
use App\Models\Company;
use Carbon\Factory;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function see(Request $request)
    {
        $all_employees = Employees::all();
        return view('employees', ['all_employees'=>$all_employees]);
    }

    public function view($id)
    {
        $employees = Employees::find($id);
        return view('employees_view', ['employees'=>$employees]);
    }

    public function index()
    {
        //dd($employees);
    }

    //Création de données
    public function create()
    {
        $companies = Company::all();
        return view('employees_register', ['companies'=>$companies]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'adress_street' => 'required|max:100',
            'zip_code' => 'required|min:5|max:5',
            'city' => 'required|max:120',
            'email' => 'required|max:100',
            'company' => 'required|max:100',
        ]);

        $employees = new Employees();
        $employees->firstname = request('firstname');
        $employees->lastname = request('lastname'); 
        $employees->civility = request('civility');
        $employees->adress_street = request('adress_street');
        $employees->zip_code = request('zip_code'); 
        $employees->city = request('city');
        $employees->email = request('email');
        $employees->phone_nb = request('phone_nb');
        $employees->company = request('company');
        $employees->save();    
        
        return view('confirm_emp');
    }

    //Suppression de données - admin
    function list()
    {
        $employees = Employees::all();
        return view('list_admin', ['employees'=>$employees]);
    }

    public function delete ($id)
    {
        $employees = Employees::find($id);
        $employees->delete();
        return redirect('employees/list');
    }

    //Modification de données
    public function formedit($id)
    {
        $employees = Employees::find($id);
        return view('edit_emp', ['employees'=>$employees]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'adress_street' => 'required|max:100',
            'zip_code' => 'required|min:5|max:5',
            'city' => 'required|max:120',
            'email' => 'required|max:100',
            'company' => 'required|max:100',
        ]);
        
        $employees = Employees::find($request->id);
        $employees->firstname = $request->firstname;
        $employees->lastname = $request->lastname;
        $employees->civility = $request->civility;
        $employees->adress_street = $request->adress_street;
        $employees->zip_code = $request->zip_code;
        $employees->city = $request->city;
        $employees->email = $request->email;
        $employees->phone_nb = $request->phone_nb;
        $employees->company = $request->company;
        $employees->save();

        return redirect('/employees/list');
    }
}
