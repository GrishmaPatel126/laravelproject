<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherValidation;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teachers = DB::table('teachers')->select('teachers.id As id','students.name As Stu_name','students.number As Stu_number','students.email As Stu_email','students.subject As Stu_subject','teachers.name As tech_name','teachers.number As tech_number','teachers.email As tech_email','teachers.subject As tech_subject')->join('students','teachers.subject','=','students.subject')->orderBy('students.name')->get();

        // $teachers = DB::table('teachers')->select('teachers.id As id','students.name As Stu_name','students.number As Stu_number','students.email As Stu_email','students.subject As Stu_subject','teachers.name As tech_name','teachers.number As tech_number','teachers.email As tech_email','teachers.subject As tech_subject')->leftJoin('students','teachers.subject','=','students.subject')->orderBy('teachers.name')->get();

        return view('Teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherValidation $request)
    {
        $input = $request->validated();
        Teacher::create($input);
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('Teacher.show',compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('Teacher.edit',compact('teacher'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $input = $request->all();
        $teacher = Teacher::find($teacher->id);
        $teacher->fill($input)->save();
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
