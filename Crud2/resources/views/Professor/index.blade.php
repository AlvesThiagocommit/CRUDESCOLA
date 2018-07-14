@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('successMsg'))
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Well done!</strong> {{ session('successMsg') }}
            </div>
        @endif
    <table class="table table-bordered table-striped table-hover ">
  <thead>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Data de Nascimento</th>
    <th>Criado em</th>
    <th class="text-center">Action</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($professors as $professor)
  	<tr>
    	<td>{{ $professor->id }}</td>
        <td>{{ $professor->nome }}</td>
        <td>{{ $professor->data_nascimento }}</td>    	
        <td>{{ $professor->created_at }}</td>        
    	<td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit',$professor->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> || 
          <form method="POST" id="delete-form-{{ $professor->id }}" action="{{ route('delete',$professor->id) }}" style="display: none;"> 
            {{ csrf_field() }}
            {{ method_field('delete') }}
            
          </form>
            
            <button onclick="if(confirm('Tem certeza que deseja deletar?')){
              event.preventDefault();
              document.getElementById('delete-form-{{ $professor->id }}').submit();
            }else{
              event.preventDefault();
            }" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </td>
  	</tr>
    @endforeach
  </tbody>
</table>
{{ $professors->links() }}
</div>
@endsection