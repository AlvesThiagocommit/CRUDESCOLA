<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);
    	return view('welcome',compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nome' => 'required',
    		'datanascimento' => 'required',
    		'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
    		'cidade' => 'required',
    		'estado' => 'required',
    		'cep' => 'required'
        ]);
        
    	$student = new Student;
    	$student->nome = $request->nome;
    	$student->data_nascimento = $request->datanascimento;
    	$student->logradouro = $request->logradouro;
        $student->numero = $request->numero;
        $student->bairro = $request->bairro;
    	$student->cidade = $request->cidade;
    	$student->estado = $request->estado;
    	$student->cep = $request->cep;
    	$student->save();
    	return redirect(route('home'))->with('successMsg','Aluno adicionado com sucesso!');
	}
	
	public function edit($id)
    {
        $student = Student::find($id);
        return view('edit',compact('student'));
	}
	
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nome' => 'required',
    		'datanascimento' => 'required',
    		'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
    		'cidade' => 'required',
    		'estado' => 'required',
    		'cep' => 'required'
        ]);
        $student = Student::find($id);
        $student->nome = $request->nome;
    	$student->data_nascimento = $request->datanascimento;
    	$student->logradouro = $request->logradouro;
        $student->numero = $request->numero;
        $student->bairro = $request->bairro;
    	$student->cidade = $request->cidade;
    	$student->estado = $request->estado;
    	$student->cep = $request->cep;
    	$student->save();
    	return redirect(route('home'))->with('successMsg','Aluno atualizado com sucesso!');
	}
	
	public function delete($id)
    {
       Student::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Aluno deletado com sucesso!');
    }

}