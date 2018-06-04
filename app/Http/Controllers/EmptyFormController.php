<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmptyForm;
use DB; 

class EmptyFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empty_forms = EmptyForm::all();
        return view('forms.index', compact('empty_forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'competence_id' => 'required'
        ]);

        $empty_form = EmptyForm::create([
            'title' => $request->get('title'),
            'competence_id' => $request->get('competence_id')
        ]);

        $id = $empty_form->id;
        return redirect()->route('form.show', ['id' => $id])->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empty_form = EmptyForm::all()->where('id', '=', $id)->pop();
        return view('forms/show')->with(["empty_form" => $empty_form]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empty_form = EmptyForm::all()->where('id', '=', $id)->pop();
        return view('forms.edit')->with(["empty_form" => $empty_form]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('empty_forms')->where('id', '=', $id)->update([ 
            'title'=>$request->title,
            'competence_id'=>$request->competence_id
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
