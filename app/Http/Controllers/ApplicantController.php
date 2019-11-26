<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Http\Resources\Applicant as ApplicantResource;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Applicant
        $applicants = Applicant::join('vacancies', 'vacancies.id', '=', 'applicants.vacancy_id')->join('users', 'users.id', '=', 'applicants.user_id')->select('applicants.*', 'vacancies.title', 'users.name')->get();

        return ApplicantResource::collection($applicants);
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
        $new_applicant = $request->isMethod('put')  ? Applicant::findOrFail($request->applicant_id) : new Applicant;

        $new_applicant->vacancy_id = $request->input('vacancy_id');
        $new_applicant->user_id = $request->input('user_id');
        $new_applicant->motivation_letter = $request->input('motivation_letter');
        $new_applicant->status = $request->input('status');
        $new_applicant->experience = $request->input('experience');
        $new_applicant->resume = $request->input('resume');

        if ($request->file('resume')) {
            $file = $request->file('resume')->store('resumes', 'public');

            $new_applicant->resume = $file;
        }

        if ($new_applicant->save()) {
            return new ApplicantResource($new_applicant);
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
        $applicant = Applicant::join('vacancies', 'vacancies.id', '=', 'applicants.vacancy_id')->join('users', 'users.id', '=', 'applicants.user_id')->select('applicants.*', 'vacancies.title', 'users.name')->where('applicants.id', '=', $id)->get();

        return ApplicantResource::collection($applicant);
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
        $applicant = Applicant::findOrFail($id);

        if ($applicant->delete()) {
            return new ApplicantResource($applicant);
        }
    }
}
