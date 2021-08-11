<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;
use App\Services\CompanyService;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::all();
        return view ('admin.companies.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.companies.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, array(
                'cnpj'              =>  'required|integer|max:14',
                'name'              =>  'required|max:100',
                'telephone'         =>  'required|integer|max:11',
                'cep'               =>  'required|integer|max:8',
                'address'           =>  'required|max:100',
                'address_number'    =>  'required|integer|max:5',
                'state'             =>  'required',
                'city'              =>  'required|max:40'
    
            ));
    
            $data = [];
    
            $company = new CompanyService();
    
            $data['cnpj']               =   $request->cnpj;
            $data['name']               =   $request->name;
            $data['telephone']          =   $request->telephone;
            $data['cep']                =   $request->cep;
            $data['address']            =   $request->address;
            $data['address_number']     =   $request->address_number;
            $data['state']              =   $request->state;
            $data['city']               =   $request->city;
            $data['id']                 =   $request->id;

            if($request->has('id') &&  !empty($request->id)) {
                $message = 'Empresa Atualizada com Sucesso!';
            }else{
                $message = 'Empresa Criada com Sucesso!';
            }
            
            $data['id'] = $request->id;
            $company->save($data);
            return redirect()->route('admin.companies.list')->with('success', $message);
            
        } catch (Exception $e) {
            $message =$e->getMessage();
            return redirect()->back()->withErrors([$message]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Companies::find($id);
        return view('admin.companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
