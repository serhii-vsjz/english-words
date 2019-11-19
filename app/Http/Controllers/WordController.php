<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;


class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $words = Word::all();
        $ran = mt_rand(1, $words->count());
        $word = Word::find($ran);
        return view('word', compact('word'));
    }

    public function check(Request $request, $id)
    {
        $word = Word::find($id);
        if ($word->russian == $request['russian'])
        {
            $word_res = [
                'repetition' => $word->repetition - 1,
                ];


        }
        else
        {
            $word_res = [
                'repetition' => $word->repetition + 1,
            ];
        }
        Word::where('id', $id)->update($word_res);

        return redirect(route('word'));


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
