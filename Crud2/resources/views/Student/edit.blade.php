@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Adicionar Novo Aluno</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('update',$student->id) }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="nome" class="col-md-2 control-label">Nome</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->first_name }}" name="nome" placeholder="Nome">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="datadenascimento" class="col-md-2 control-label">Data de Nascimento</label>

			      <div class="col-md-10">
			        <input type="number" class="form-control" value="{{ $student->last_name }}" name="datadenascimento" placeholder="Data de Nascimento">
			      </div>
			    </div>

			  	<div class="form-group">
			      <label for="logradouro" class="col-md-2 control-label">Logradouro</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->first_name }}" name="logradouro" placeholder="Logradouro">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="numero" class="col-md-2 control-label">Numero</label>

			      <div class="col-md-10">
			        <input type="number" class="form-control" value="{{ $student->phone }}" name="numero" placeholder="Numero">
			      </div>
					</div>
					
					<div class="form-group">
			      <label for="bairro" class="col-md-2 control-label">Bairro</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->first_name }}" name="bairro" placeholder="Bairro">
			      </div>
					</div>
					
					<div class="form-group">
			      <label for="cidade" class="col-md-2 control-label">Cidade</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->first_name }}" name="cidade" placeholder="Cidade">
			      </div>
					</div>

					<div class="form-group">
			      <label for="estado" class="col-md-2 control-label">Estado</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->first_name }}" name="estado" placeholder="Estado">
			      </div>
					</div>

					<div class="form-group">
			      <label for="cep" class="col-md-2 control-label">CEP</label>

			      <div class="col-md-10">
			        <input type="number" class="form-control" value="{{ $student->phone }}" name="cep" placeholder="CEP">
			      </div>
					</div>					


			    <div class="form-group">
			      <div class="col-md-10 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancelar</button>
			        <button type="submit" class="btn btn-primary">Enviar</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
	</div>
@endsection