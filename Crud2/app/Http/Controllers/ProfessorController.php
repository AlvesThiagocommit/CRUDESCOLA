<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        $professor = Professor::paginate(5);
    	return view('welcome',compact('professor'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nome' => 'required',
    		'datanascimento' => 'required'
        ]);
        
    	$professor = new Professor;
    	$professor->nome = $request->nome;
    	$professor->data_nascimento = $request->datanascimento;
    	$professor->save();
    	return redirect(route('home'))->with('successMsg','Aluno adicionado com sucesso!');
	}
	
	public function edit($id)
    {
        $professor = Professor::find($id);
        return view('edit',compact('professor'));
	}
	
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nome' => 'required',
    		'datanascimento' => 'required'
        ]);
        $professor = Professor::find($id);
        $professor->nome = $request->nome;
    	$professor->data_nascimento = $request->datanascimento;
    	$professor->save();
    	return redirect(route('home'))->with('successMsg','Aluno atualizado com sucesso!');
	}
	
	public function delete($id)
    {
        Professor::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Aluno deletado com sucesso!');
    }
}
