<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // $customers = Customer::all();
        $teachers = Teacher::orderBy('cid')->paginate(5);
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher added.');
    }

    public function view(int $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.updated', compact('teacher'));
    }

    public function updates(int $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.updated', compact('teacher'));
    }

    public function update(Request $request, int $id)
    {
        $teacher = Teacher::findOrFail($id);
        $request->validate(['name' => 'required']);
        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher updated.');
    }
       public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted.');
    }
}

