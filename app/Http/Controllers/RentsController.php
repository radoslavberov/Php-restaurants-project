<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;

class RentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rents = Rent::all();
      return view('Rents.index')-> with('rents',$rents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,array(
          'RestaurantName' =>'required',
          'Price' =>'required',
          'Available' =>'required',
      ));
      //create
      $rents = new Rent;
      $rents['RestaurantName'] = $request ->get('RestaurantName');
      $rents['Price'] = $request ->get('Price');
      $rents['Available'] = $request ->get('Available');
      $rents->save();
      return redirect('/rents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $rent = Rent::find($id);
      return view('Rents.show', compact('rent' ,'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $rent = Rent::find($id);
      return view('Rents.edit', compact('rent' ,'id'));
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
      $this->validate($request,array(
          'RestaurantName' =>'required',
          'Price' =>'required',
          'Available' =>'required'
      ));
      //create
      $rents = Rent::find($id);
      $rents['RestaurantName'] = $request ->get('RestaurantName');
      $rents['Price'] = $request ->get('Price');
      $rents['Available'] = $request ->get('Available');
      $rents->save();
      return redirect('/rents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $rents = Rent::find($id);
      $rents -> delete();
      return redirect('/rents')->with('success','Rent has been deleted successfully');
    }
}
