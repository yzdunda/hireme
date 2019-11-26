<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;
use App\Http\Resources\Vacancy as VacancyResource;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Vacancies
        $vacancies = Vacancy::leftJoin('companies', 'companies.id', '=', 'vacancies.company_id')->paginate(15)->makeHidden(['password']);

        return VacancyResource::collection($vacancies);
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
        $vacancy = $request->isMethod('put')  ? Vacancy::findOrFail($request->vacancy_id) : new Vacancy;

        $vacancy->id = $request->input('vacancy_id');
        $vacancy->company_id = $request->input('company_id');
        $vacancy->title = $request->input('title');
        $vacancy->location = $request->input('location');
        $vacancy->salary = $request->input('salary');
        $vacancy->description = $request->input('description');
        $vacancy->responsibilities = $request->input('responsibilities');
        $vacancy->min_qualification = $request->input('min_qualification');
        $vacancy->benefit = $request->input('benefit');

        if ($vacancy->save()) {
            return new VacancyResource($vacancy);
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
        $vacancy = Vacancy::findOrFail($id);
        return new VacancyResource($vacancy);
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
        $vacancy = Vacancy::findOrFail($id);

        if ($vacancy->delete()) {
            return new VacancyResource($vacancy);
        }
    }
}
