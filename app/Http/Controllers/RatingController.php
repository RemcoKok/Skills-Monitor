<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use Auth;
use DB;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        
        $ratings = DB::table('ratings')
        ->select('users.id as user_id', 'ratings.id as rating_id', 'empty_forms.id as empty_form_id', 'users.name', 'empty_forms.title as empty_form_title', 'competences.title as competenceTitle', 'ratings.status as status')
        ->where('ratings.users_id_assessor', (int)$id)
        ->join('users', 'ratings.users_id_assessor', '=', 'users.id')
        ->join('empty_forms', 'ratings.emptyForm_id', '=', 'empty_forms.id')
        ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
        ->get();
        return view("ratings.index", compact('ratings'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        
        $ratings = DB::table('ratings')
        ->where('ratings.id', (int)$id)
        ->select('users.*','empty_forms.*', 'competences.title as competence')
        ->join('empty_forms', 'ratings.emptyForm_id', '=', 'empty_forms.id')
        ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
        ->join('users', 'ratings.users_id_rated', '=', 'users.id')
        ->get();

        $rows = DB::table('rows')
        ->where('rows.emptyForm_id', (int)$id)
        ->get();

        $cells = DB::table('cells')
        ->get();

        return view("ratings.show", compact('ratings', 'rows', 'cells'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ratings = DB::table('ratings')
        ->where('ratings.id', (int)$id)
        ->select('users.*', 'ratings.*', 'empty_forms.title as formTitle', 'competences.title as competenceTitle')
        ->join('empty_forms', 'ratings.emptyForm_id', '=', 'empty_forms.id')
        ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
        ->join('users', 'ratings.users_id_rated', '=', 'users.id')
        ->get();

        return view("ratings.edit", compact('ratings'));
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
        DB::table('ratings')
            ->where('id',(int)$id)
            ->update(['status' =>(int)request('status')]);

        return redirect('/rating');
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
