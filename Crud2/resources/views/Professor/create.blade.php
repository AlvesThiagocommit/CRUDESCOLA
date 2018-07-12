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
				<h3 class="panel-title">Adicionar Novo Professor</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('store') }}" method="POST"> //Falta configurar a rota que leva a função store do controller Professor
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="idprofessor" class="col-md-2 control-label">ID do Professor</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="idprofessor" placeholder="ID do Professor">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="nome" class="col-md-2 control-label">Nome</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="nome" placeholder="Nome">
			      </div>
					</div>
					
			    <div class="form-group">
			      <label for="datanascimento" class="col-md-2 control-label">Data de Nascimento</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="Nascimento" placeholder="Data de Nascimento">
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