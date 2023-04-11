<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\BookProperty;

use Validator;
use App\Http\Resources\PropertyResource;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BookPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Redirect::route('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'location' => 'required',
        //     'total_rooms' => 'required',
        //     'type' => 'required',
        //     'washroom' => 'required',
        //     'price' => 'required'
        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());
        // }
        //$input['code'] = time();
        $property = BookProperty::create($input);

        $properties = BookProperty::paginate(100);

        return Redirect::route('dashboard')->with('status', 'property-added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function book(Request $request)
    {
        $input = $request->all();

        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'location' => 'required',
        //     'total_rooms' => 'required',
        //     'type' => 'required',
        //     'washroom' => 'required',
        //     'price' => 'required'
        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());
        // }

        $property = Property::create($input);

        $properties = Property::paginate(100);

        return Redirect::route('dashboard')->with('status', 'property-added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);

        if (is_null($property)) {
            return $this->sendError('Property not found.');
        }

        return $this->sendResponse(new PropertyResource($property), 'Property retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'location' => 'required',
            'total_rooms' => 'required',
            'type' => 'required',
            'washroom' => 'required',
            'price' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        Property::find($input['id'])->update($request->all());

        return $this->sendResponse(new PropertyResource($property), 'Property updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return $this->sendResponse([], 'Property deleted successfully.');
    }
}