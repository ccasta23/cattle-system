<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CowRequest;
use App\Models\Cow;
use App\Enums\Breeds;
use Illuminate\Support\Facades\Mail;

class CowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //var_dump(Cow::all());die;
        //return Cow::all();
        return view('cows.index', [
            'cows' => Cow::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cows.create',[
            'breeds' => Breeds::cases()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CowRequest $request)
    {
        //var_dump($request->all());die;
        //var_dump($request->cow_name);die;
        //$cow = new Cow();
        // $cow->cow_name = $request->cow_name;
        // $cow->cow_alias = $request->cow_alias;
        // $cow->cow_code = $request->cow_code;
        // $cow->cow_birthdate = $request->cow_birthdate;
        // $cow->cow_weight = $request->cow_weight;
        // $cow->cow_height = $request->cow_height;
        // $cow->cow_breed = $request->cow_breed;
        // $cow->save();
        $cow = Cow::create($request->all());

        $cow->load('vaccines');

        //dd($cow);

        Mail::to('carlos.castaneda@ucaldas.edu.co')
            ->send(new \App\Mail\CreateCowMail($cow));

        return redirect('/cows');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cow $cow)
    {
        return view('cows.show', [
            'cow' => $cow
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cow $cow)
    {
        //$cow = Cow::findOrFail($id);
        //var_dump($cow);die;
        return view('cows.edit', [
            'cow' => $cow,
            'breeds' => Breeds::cases()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CowRequest $request, Cow $cow)
    {
        // $cow->cow_name = $request->cow_name;
        // $cow->cow_alias = $request->cow_alias;
        // $cow->cow_code = $request->cow_code;
        // $cow->cow_birthdate = $request->cow_birthdate;
        // $cow->cow_weight = $request->cow_weight;
        // $cow->cow_height = $request->cow_height;
        // $cow->cow_breed = $request->cow_breed;
        $cow->update($request->all());

        return redirect('/cows');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cow $cow)
    {
        $cow->delete();
        return back();
    }
}
