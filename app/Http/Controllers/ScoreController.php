<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use App\Score;
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

        $forms = DB::table('ratings')
        ->select('empty_forms.*', 'ratings.id as ratingId')
        ->where('ratings.id', (int)request('rid'))
        ->join('empty_forms', 'empty_forms.id','=','ratings.emptyForm_id')
        ->get();

        $rows = DB::table('ratings')
        ->select('rows.*')
        ->where('ratings.id',  (int)request('rid'))
        ->join('empty_forms', 'empty_forms.id','=','ratings.emptyForm_id')
        ->join('rows', 'rows.emptyForm_id', '=', 'empty_forms.id')
        ->get();
       

        $cells = DB::table('ratings')
        ->select('cells.*')
        ->where('ratings.id',  (int)request('rid'))
        ->join('empty_forms', 'empty_forms.id','=','ratings.emptyForm_id')
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


        $values = $request->all();
        $id = (int)request('id');
        for($i = 1; $i <= sizeof($values) / 2 -1; $i++){
            $score = new Score;
            $score->cell_id = request('Option'.$i);
            $score->comment = request('comment'.$i);
            $score->rating_id = $id;
            $score->save();
        }

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
