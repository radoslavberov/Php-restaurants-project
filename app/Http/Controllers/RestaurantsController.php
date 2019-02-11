<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Owner;

class RestaurantsController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $restaurants = Restaurant::all();
      return view('Restaurants.index')-> with('restaurants',$restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::all();
        return view('Restaurants.create', compact('owners'));
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
          'Address' =>'required',
          'Capacity' =>'required',
          'Owner_id' => 'required'
      ));
      //create
      $restaurants = new Restaurant;
      $restaurants['RestaurantName'] = $request ->get('RestaurantName');
      $restaurants['Address'] = $request ->get('Address');
      $restaurants['Capacity'] = $request ->get('Capacity');
      $restaurants['Owner_id'] = $request ->get('Owner_id');
      $restaurants->save();
      return redirect('/restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $restaurant = Restaurant::find($id);
      if(!$restaurant) {
        abort(404); //Not found
      }
      return view('Restaurants.show', compact('restaurant' ,'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $restaurant = Restaurant::find($id);
      return view('Restaurants.edit', compact('restaurant' ,'id'));
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
          'Address' =>'required',
          'Capacity' =>'required'
      ));
      //create
      $restaurants = new Restaurant;
      $restaurants['RestaurantName'] = $request ->get('RestaurantName');
      $restaurants['Address'] = $request ->get('Address');
      $restaurants['Capacity'] = $request ->get('Capacity');
      $restaurants->save();
      return redirect('/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $restaurants = Restaurant::find($id);
      $restaurants -> delete();
      return redirect('/restaurants')->with('success','Restaurant has been deleted successfully');
    }
}
