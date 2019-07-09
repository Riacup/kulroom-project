<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Note;

class CatatanController extends Controller
{
    //
    public $catatan;

    public function __construct()
    {
        $this->catatan = [
            [ 'title' => 'kalkulus', 'topic' => 'integral', 'message' => 'pertemuan_1' ],
            [ 'title' => 'basis_data', 'topic' => 'tipe_data', 'message' => 'pertemuan_1' ],
            [ 'title' => 'matdis', 'topic' => 'logika', 'message' => 'pertemuan_2' ],
            [ 'title' => 'pemrograman', 'topic' => 'oop', 'message' => 'pertemuan_3' ],
        ];
    }

    public function showAll()
    {
        // dd($this->catatan);
        
        return view('catatan_list')->with(['catatan' => $this->catatan]);
    }

    public function showAdd()
    {
        $subjectAll = Subject::all();
        return view('catatan-add', compact('subjectAll'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $note = new Note();
        $note->title = $request->title;
        $note->message = $request->message;
        $note->subject_id = $request->subject_id;
        $note->save();

        return redirect()->route('subject.index');
    }

    public function simpan(SimpanCatatanRequest $request){
        $course = new Course;
        $course->id = $request->id;
        $course->name = $request->name;
        $course->save();

        $pesan = "Mata kuliah ".$request->name.'berhasil disimpan';
    }
}
