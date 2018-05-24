<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use Auth;
use DB;

class ScoreController extends Controller
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

    public function create()
    {

        if(request()->has('rid')) {
            
        

        $forms = DB::table('empty_forms')
        ->select('empty_forms.*')
        ->where('empty_forms.id', (int)request('rid'))
        ->get();

        $rows = DB::table('empty_forms')
        ->select('rows.*')
        ->where('empty_forms.id',  (int)request('rid'))
        ->join('rows', 'rows.emptyForm_id', '=', 'empty_forms.id')
        ->get();
       

        $cells = DB::table('empty_forms')
        ->select('cells.*')
        ->where('empty_forms.id',  (int)request('rid'))
        ->join('rows', 'rows.emptyForm_id', '=', 'empty_forms.id')
        ->join('cells', 'cells.row_id', '=', 'rows.id')
        ->get();
        }
        return view('score.create', compact('forms', 'form', 'rows', 'cells'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return $request->all(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
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
