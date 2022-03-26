<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saveData;
use Illuminate\Support\Facades\Storage;

class GrapesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $viewWebPages = saveData::all();
        // foreach ($viewWebPages as $value) {
        //     # code...
        //     $html = $value->storeJSON;
        //     echo $html;
        //     $css = $value->gjs_css;
        //     echo $css;
        // }
        $viewWebPages = saveData::where('id', '=', 30)->get();
        // dd($viewWebPages);
        // foreach ($viewWebPages as $value) {
        //     # code...
            // $html = $value->storeJSON;

            // echo $html;
        //     $css = $value->gjs_css;
        //     echo $css;
        // }
       
        // $viewWebPages[0]->storeJSON;
        // dd();

        return view('indexGrapesjs', compact('viewWebPages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grapesjs');

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
    public function edit($id)
    {
        //
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
        //
    }

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
