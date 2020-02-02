<?php

namespace App\Http\Controllers;

use App\selling_info;
use Illuminate\Http\Request;

class SellingInfoController extends Controller
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
        //
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $selling_info = new selling_info([
            'name' => $request->get('item-name'),
            'category' => 1,
            'description' => $request->get('descriptions'),
            'price' => $request->get('price'),
        ]);
        $selling_info->save();
        // print_r($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\selling_info  $selling_info
     * @return \Illuminate\Http\Response
     */
    public function show(selling_info $selling_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\selling_info  $selling_info
     * @return \Illuminate\Http\Response
     */
    public function edit(selling_info $selling_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\selling_info  $selling_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, selling_info $selling_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\selling_info  $selling_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(selling_info $selling_info)
    {
        //
    }
}
