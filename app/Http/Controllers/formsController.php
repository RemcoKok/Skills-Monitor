<?php

namespace App\Http\Controllers;

use App\Forms;
use App\Rows;
use App\Cells;
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
        $forms = Forms::all();

        return view ('forms.index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forms = Forms::all();
        $rows = Rows::all();
        $cells = Cells::all();
        
        return view('forms.create', compact('forms', 'rows', 'cells'));
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
        $form = new Forms;

        //add the data from the form
        $form->title = request('title');

        //save the new form
        $form->save();

        $array = request('formBox');
        
                $id = $form->id;

                foreach($array as $key => $value){
                    $row = new Rows;
                    
                    $row->id = $value;
        
                    $row->form_id = $id;
                    
                    $row->save();
                }
        
        return redirect('/forms');
        
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
        return view('forms.destroy');
    }

    public function delete(){
        return view('forms.destroy');
    }
}
