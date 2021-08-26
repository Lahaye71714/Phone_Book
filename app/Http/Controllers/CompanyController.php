<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Company;
use App\Models\Role;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function see(Request $request)
    {
        $all_company = Company::all();
        return view('company', ['all_company'=>$all_company]);
    }

    public function view($id)
    {
        $company = Company::find($id);
        return view('company_view', ['company'=>$company]);
    }

    public function index()
    {
        //dd($company);
    }

    //Création de données
    public function create()
    {
        return view('company_register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'company' => 'required|max:100',
            'adress_street' => 'required|max:100',
            'zip_code' => 'required|min:5|max:5',
            'city' => 'required|max:120',
            'comp_email' => 'email|required|max:100',
        ]);
        $company = new Company();
        $company->company = request('company');
        $company->adress_street = request('adress_street');
        $company->zip_code = request('zip_code');
        $company->city = request('city');
        $company->phone_nb = request('phone_nb');
        $company->comp_email = request('comp_email');
        $company->save();
        
        return view('confirm_comp');
    }


    //Suppression de données - admin
    function list()
    {
        $company = Company::all();
        return view('list_comp_admin', ['company'=>$company]);
    }

    public function delete ($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('company/list');
    }

    //Modification de données
    public function formedit($id)
    {
        $company = Company::find($id);
        return view('edit_comp', ['company'=>$company]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'company' => 'required|max:100',
            'adress_street' => 'required|max:100',
            'zip_code' => 'required|min:5|max:5',
            'city' => 'required|max:120',
            'comp_email' => 'email|required|max:100',
        ]);
        $company = Company::find($request->id);
        $company->company = $request->company;
        $company->adress_street = $request->adress_street;
        $company->zip_code = $request->zip_code;
        $company->city = $request->city;
        $company->phone_nb = $request->phone_nb;
        $company->comp_email = $request->comp_email;
        $company->save();

        return redirect('/company/list');
    }
}
