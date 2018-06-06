<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
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
       
        $forms = DB::table('empty_forms')
        ->select('empty_forms.*','competences.title as competenceTitle')
        ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
        ->get();


        return view("ratings.index", compact('forms'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = (int)request('id');
        $forms = DB::table('empty_forms')
        ->select('empty_forms.*','competences.title as competenceTitle')
        ->where('empty_forms.id', $id)
        ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
        ->get();

        $users = DB::table('users')
        ->select('users.*')
        ->get();


        return view("ratings.create", compact('forms', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rating = new Rating;

        $rating->emptyForm_id = request('form_id');
        $rating->users_id_assessor = Auth::user()->id;
        $rating->users_id_rated = request('user');
        $rating->graded = 1;
        $rating->status = 1;

        $rating->save();
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  

        $forms = DB::table('empty_forms')
        ->where('empty_forms.id', (int)$id)
        ->select('empty_forms.*', 'competences.title as competence')
        ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
        ->get();

        $rows = DB::table('rows')
        ->where('rows.emptyForm_id', (int)$id)
        ->get();

        $cells = DB::table('cells')
        ->get();

        return view("ratings.show", compact('forms', 'rows', 'cells'));
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

    public function search(){
        $q = Input::get ( 'q' );
        $forms = DB::table('empty_forms')
            ->select('empty_forms.*', 'competences.title as competenceTitle')
            ->where('empty_forms.title','LIKE','%'.$q.'%')
            ->join('competences', 'empty_forms.competence_id', '=', 'competences.id')
            ->get(); 
        if(count($forms) > 0)
            return view('forms.index')->withDetails($forms)->withQuery ( $q );
        else return redirect('/list');
    }
}
