@extends('layout.app')

@section('contenido')
   
   @foreach($ver as $pu)
    <div class="row">
       <div class="col-md-12">
          <h1><a href="{{route('post_path',['pu'=>$pu->id])}}">{{$pu->titulo}}</a>
          </h1>
          <!--<p>PUBLICO {{$pu->created_at->diffForHumans()}}</p>
          <h1>{{$pu->descripsion}}</h1>
          <h1>{{$pu->url}}</h1>-->
       </div>
     </div>
     <br>
     @endforeach
     {{$ver->render()}}

@endsection
