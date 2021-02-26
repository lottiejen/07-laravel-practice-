<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;
use App\Http\Resources\API\AnimalResource;
use App\Http\Requests\API\AnimalRequest;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner)
    {
        return AnimalResource::collection($owner->animals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request, Owner $owner)
    {
        $data = $request->all();
        // requests data from post

        $animal = new Animal($data); // creates a new animal from post in postman 

        $animal->owner()->associate($owner);

        $animal->save();

        $treatments = $request->get("treatments");

        $animal->setTreatments($treatments); // this should set the treatment on the animals (ISSUE)

        return new AnimalResource($animal);
    }

    public function update(AnimalRequest $request, Owner $owner, Animal $animal)
  {
    // update the animal first
    $data = $request->all();
    
    $animal->fill($data)->save();

    // use the new method - can't chain as save returns a bool
    $animal->setTreatments($request->get("treatments"));
    
    return new AnimalResource($animal);
}

// ...

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(Owner $owner, Animal $animal)
    {
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //public function 
        //
    
    

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
