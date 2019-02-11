<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnersController extends Controller
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
        $owners = Owner::orderBy('created_at', 'desc')->paginate(5);
        return view('Owners.index')-> with('owners',$owners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validation
      $this->validate($request,array(
          'Name' =>'required',
          'RestaurantName' =>'required',
      ));
      //create
      $owners = new Owner;
      $owners['Name'] = $request ->get('Name');
      $owners['RestaurantName'] = $request ->get('RestaurantName');
      $owners->save();
      return redirect('/owners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $owner = Owner::find($id);
      return view('Owners.show', compact('owner' ,'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $owner = Owner::find($id);
      return view('Owners.edit', compact('owner' ,'id'));
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
      //validation
      $this->validate($request,array(
          'Name' =>'required',
          'RestaurantName' =>'required',
      ));
      //create
      $owners = Owner::find($id);
      $owners['Name'] = $request ->get('Name');
      $owners['RestaurantName'] = $request ->get('RestaurantName');
      $owners->save();
      return redirect('/owners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owners = Owner::find($id);
        $owners -> delete();


        return redirect('/owners')->with('success','Owner has been deleted successfully');
    }
}
