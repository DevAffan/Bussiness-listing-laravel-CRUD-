<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input = $request->validate([
            'name' => 'required' ,
            'email' => 'required | email' ,
            'website' => 'required' ,
            'bio' => 'required' ,
            'address' => 'required' ,
            'phone' => 'required | integer' ,
        ]);
        // dd($request);

        $list = new Listing($input);
        $list->user_id = Auth::user()->id;
        $list->save();

         return redirect()->route('home')->with('success' , 'List Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('show' , compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Listing::find($id);

        return view('edit')->with('list' , $list);
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


        $input = $request->validate([
            'name' => 'required' ,
            'email' => 'required | email' ,
            'website' => 'required' ,
            'bio' => 'required' ,
            'address' => 'required' ,
            'phone' => 'required | integer' ,
        ]);
        // dd($request);

        $list = Listing::find($id);
        $list->update($input);
        $list->save();

         return redirect()->route('home')->with('success' , 'List Edit Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Listing::find($id)->delete();
        return back()->with('danger' , 'List Deleted Successfuly');
    }
}
