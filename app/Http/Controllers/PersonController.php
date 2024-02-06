<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:people,email',
            'cell' => 'numeric',
            'message' => 'required'
        ]);

        $person = Person::create([
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'cell' => $request['cell'],
            'message' => $request['message'],
            
        ]);

        //envio de email
        $details = [
            'message'=> "El usuario " . $request['full_name'] . " se ha registrado",
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'cell' => $request['cell'],
            'message' => $request['message'],
            ];
            Mail::to('oviedocode@gmail.com')->send(new SendPost($details));


        return response()->json([
            'message' => 'Se agregó correctamente a la Persona',
            'data' => $person
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $people)
    {
        //
    }
}
