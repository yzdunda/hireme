<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Resources\Company as CompanyResource;
use Hash;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Company
        $companies = Company::paginate(15);

        // Return collection of articles as a resource
        return CompanyResource::collection($companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = $request->isMethod('put')  ? Company::findOrFail($request->company_id) : new Company;

        $company->name = $request->input('name');
        $company->descriptions = $request->input('descriptions');
        $company->email = $request->input('email');
        $company->password = \Hash::make($request->get('password'));
        $company->website = $request->input('website');
        $company->address = $request->input('address');

        if ($company->save()) {
            return new CompanyResource($company);
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
        $company = Company::findOrFail($id);
        return new CompanyResource($company);
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
        $company = Company::findOrFail($id);

        if ($company->delete()) {
            return new CompanyResource($company);
        }
    }

    public function login(Request $request)
    {
        $company = Company::where('email', '=', $request->email)->firstOrFail();
        $status = "error";
        $message = "";
        $data = null;
        $code = 401;

        if ($company) {
            // if password correct
            if (Hash::check($request->password, $company->password)) {
                // Generate Token
                // $company->generateToken(); next time aja
                $status = "success";
                $message = "login success";
                $data = $company->toArray();
                $code = 200;
            } else {
                $message = "Login gagal, password salah";
            }
        } else {
            $message = "Login failed, wrong email address";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function register(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        //
    }
}
