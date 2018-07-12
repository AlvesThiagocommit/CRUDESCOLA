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
				<h3 class="panel-title">Adicionar Novo Curso</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route(store') }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="idcurso" class="col-md-2 control-label">ID do Curso</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="idcurso" placeholder="Id Course">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="nome" class="col-md-2 control-label">Nome do Curso</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="nome" placeholder="Name">
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-md-10 col-md-offset-2">
			        <button type="button" class="btn btn-default">Calcelar</button>
			        <button type="submit" class="btn btn-primary">Enviar</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
	</div>
@endsection