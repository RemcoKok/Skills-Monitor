<?php

namespace App\Http\Controllers;

use App\forms;
use App\rows;
use App\cells;
use Illuminate\Http\Request;

class formsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view ('form.index');
                      
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forms = forms::all() ;
        $rows = rows::all();
        $cells = cells::all();

        return view ('form.create',compact('forms', 'rows', 'cells'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //create a new form 
        $form = new forms;

        //add the data from the form
        $form->title = request('title');

        //save the new form
        $form->save();

        //return to the home page
        return redirect('/form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function show(forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function edit(forms $forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forms $forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function destroy(forms $forms)
    {
        //
    }
}
