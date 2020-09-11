<?php

namespace App\Http\Controllers;

use App\Persons;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persons = Persons::orderBy("id", "DESC")->paginate(6);
        return view("persons", compact("persons"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persons = Persons::orderBy("id", "DESC")->paginate(6);
        return view("personstable", compact("persons"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //    $this->validate($request, ["firstname" => "required","lastname" => "required","names" => "required"]);
        $persons = new Persons;

        $persons->firtsname = $request->firstname;
        $persons->lastname = $request->lastname;
        $persons->names = $request->names;

        $persons->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $persons = Persons::find($request->id);
        return $persons;
        //  return view("personstable", compact("persons"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $persons = Persons::find($request->id);

        $persons->firtsname = $request->firstname;
        $persons->lastname = $request->lastname;
        $persons->names = $request->names;
        $persons->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Persons::find($request->id)->delete();
        return $this->create();
    }
}
