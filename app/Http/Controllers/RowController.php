<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmptyForm;
use App\Cell;

class RowController extends Controller
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
    public function create(EmptyForm $form)
    {


        return view('rows.create', compact('rows', 'cells'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, EmptyForm $form)
    {
        //1. een nieuwe row aanmaken
        $row = $form->rows()->create([]);

        //2. voor alle cells in request
        foreach ($request['cell_text'] as $cell_info)
        {
            //2.1 nieuwe cell toevoegen aan row
            $row->cells()->create([$cell_info]);
        }

        //3. redirect naar zelfde pagina
        return redirect('form/show');
    }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public
        function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public
        function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public
        function destroy($id)
        {
            //
        }
    }
