<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    function add() {
        return view('addStudent');
    }

    function store(Request $request) {
        $request->validate([
            'NIM' => ['required'],
            'Nama' => ['required'],
            'Foto' => ['required', 'image'],
        ]);

        $filename = $request->file('Foto')->getClientOriginalName();
        $request->file('Foto')->storeAs('public/'.$filename);

        Student::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Foto' => $filename,
        ]);

        return redirect('/');
    }

    function read() {
        $students = Student::all();
        return view('welcome', compact('students'));
    }

    function edit($id) {
        $student = Student::find($id);
        return view('editStudent', compact('student'));
    }

    function update(Request $request, $id) {
        $request->validate([
            'NIM' => ['required'],
            'Nama' => ['required'],
            'Foto' => ['required', 'image'],
        ]);

        $filename = $request->file('Foto')->getClientOriginalName();
        $request->file('Foto')->storeAs('public/'.$filename);

        Student::find($id)->update([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Foto' => $filename,
        ]);

        return redirect('/');
    }

    function delete($id) {
        $student = Student::find($id);
        Student::destroy($id);
        Storage::delete('/public'.'/'.$student->Foto);
        return redirect('/');
    }
}
