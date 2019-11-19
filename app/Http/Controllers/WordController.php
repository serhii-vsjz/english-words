<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;


class WordController extends Controller
{
    public $lastResult = [
        'last_russian' => 'слово',
        'last_english' => 'word',
        'last_correctly' => true
    ];

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

        return view("play", $word, $this->lastResult);
    }

    public function check(Request $request, $id)
    {
        $word = Word::find($id);

        if (strcasecmp($word->russian, $request['russian']))
        {
            $word->repetition = $word->repetition - 1;
            $word->save();
            $correctly = false;
        }
        else {
            $word->repetition = $word->repetition + 1;
            $word->save();
            $correctly = true;
        }

        return redirect(route('play',['russian' => '$word->russian', 'english' => '$word->english', 'correctly' => $correctly]));
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
