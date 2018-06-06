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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;

        $forms = DB::table('ratings')
        ->where('empty_forms.id', 1)
        ->join('empty_forms', 'ratings.emptyForm_id', '=', 'empty_forms.id')
        ->get();

        $rows = DB::table('empty_forms')
        ->select('rows.*')
        ->where('empty_forms.id', 1)
        ->join('rows', 'rows.emptyForm_id', '=', 'empty_forms.id')
        ->get();
       

        $cells = DB::table('empty_forms')
        ->select('cells.*')
        ->where('empty_forms.id', 1)
        ->join('rows', 'rows.emptyForm_id', '=', 'empty_forms.id')
        ->join('cells', 'cells.row_id', '=', 'rows.id')
        ->get();
        //->where('id', $ratingID)->get()
        // $ratingID = Rating::all();

        // $forms = emptyForm::all();

        // $rows = Row::all();

        return view('score.create', compact('forms','rows', 'cells'));
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
