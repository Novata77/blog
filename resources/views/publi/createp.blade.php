@extends('layout.app')

@section('contenido')
@if(count($errors)>0)
<div  class="alert alert-warning" role="alert">
   <<ul>
      @foreach($errors->all() as $error)
       <li>{{$error}}</li>
      @endforeach 
   </ul>
	
</div>
@endif
    <h2>Formualrio</h2>

    <form action="{{route('formulario_store')}}" method="POST">
         {{csrf_field()}}
    	<div class="form-group">
    		<label for="titulo">TITULO</label>
    		<input type="text" name="titulo" class="form-control" value="{{old('titulo')}}" >
    		
    	</div>

    	<div class="form-group">
    		<label for="descripsion">DESCRPICION</label>
    		<textarea rows="5" name="descripsion" class="form-control" >{{old('descripsion')}}</textarea>
    		
    	</div>

    	<div class="form-group">
    		<label for="url">URL</label>
    		<input type="text" name="url" class="form-control" value="{{old('url')}}">
    		
    	</div>
    	<div class="form-group">
    		<button type="submit" class="btn btn-primary">registrar</button>
    	</div>
    	
    </form>
@endsection