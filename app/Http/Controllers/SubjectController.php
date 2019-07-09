<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subject;

class SubjectController extends Controller
{

    public function showAdd()
    {
        return view('catatan-add');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::
        has('notes')->get();

        $subjectAll = Subject::all();

        return view('subject-list', compact('subject', 'subjectAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject-list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $subject = new Subject();
        $subject->name = $request->name;
        $subject-> save();

        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $subject = Subject::find($id);

        // // $subject = Subject::find($id)->subject()->first();   

        // return view('subject-edit', compact('subject'));        
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
        // $subject = new Subject();
        // $subject->name = $request->input('name');
        // $subject-> save();

        // return redirect()->route('subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::findorFail($id);
        $subject->delete();
        return redirect()->route('subject');
    }
    
}
