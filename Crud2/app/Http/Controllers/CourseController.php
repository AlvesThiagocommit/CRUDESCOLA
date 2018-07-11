<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(5);
    	return view('welcome',compact('courses'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'idcurso' => 'required',
            'nome' => 'required',
            'idprofessor' => 'required'
        ]);

    	$course = new Course;
    	$course->id_curso = $request->idcurso;
    	$course->nome = $request->nome;
    	$course->id_professor = $request->idprofessor;
    	$course->save();
    	return redirect(route('home'))->with('successMsg','Professor Successfully Added');
	}
	
	public function edit($id)
    {
        $course = Course::find($id);
        return view('edit',compact('course'));
	}
	
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'idcurso' => 'required',
            'nome' => 'required',
            'idprofessor' => 'required'
        ]);

        $course = new Course;
    	$course->id_curso = $request->idcurso;
    	$course->nome = $request->nome;
    	$course->id_professor = $request->idprofessor;
    	$course->save();
    	return redirect(route('home'))->with('successMsg','Professor Successfully Update');
	}
	
	public function delete($id)
    {
        Course::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Course Successfully Delete');
    }
}
