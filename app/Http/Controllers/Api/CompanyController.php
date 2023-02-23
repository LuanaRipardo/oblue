<?php
namespace App\Http\Controllers\Api;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json(['data' => $companies, 'message' => 'Empresas listadas com sucesso!']);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $company = new Company;
        $company->cnpj = $request->cnpj;
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->save();
        return response()->json(['data' => $company, 'message' => 'Empresa cadastrada com sucesso!']);
    }

    public function show($id)
    {
        $company = Company::find($id);
        return response()->json(['data' => $company, 'message' => 'Empresa recuperada com sucesso!']);
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', ['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->cnpj = $request->cnpj;
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->save();
        return response()->json(['data' => $company, 'message' => 'Empresa atualizada com sucesso!']);
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return response()->json(['data' => $company, 'message' => 'Empresa excluída com sucesso!']);
    }
}

