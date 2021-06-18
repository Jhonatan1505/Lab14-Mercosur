@extends('layouts.layout')
@section('content')
<div class="row">
     <section class="content">
          <div class="col-md-8 col-md-offset-2">
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                    <strong>Error!</strong> Revise los campos 
obligatorios.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-info">
                     {{Session::get('success')}}
                </div>
                @endif
                
                <div class="panel panel-default">
                     <div class="panel-heading">
                          <h3 class="panel-title">Nuevo Relacion comercial</
h3>
                     </div>
                     <div class="panel-body">
                          <div class="table-container">
                               <form method="POST"
action="{{ route('mercosur.update',$mercosur->id) }}"  role="form">
                                   {{ csrf_field() }}
                                   <input name="_method"
type="hidden" value="PATCH">
                                    <div class="row">
                                         <div class="col-xs-6 
col-sm-6 col-md-6">
                                              <div class="form-
group">
                                                    <input 
type="text" name="nombre" id="nombre" class="form-control input-
sm" value="{{$mercosur->nombre}}">
                                              </div>
                                         </div>
                                         <div class="col-xs-6 
col-sm-6 col-md-6">
<div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text" 
name="paisA" id="paisA" class="form-control input-sm" value="{{$mercosur->paisA}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 <input type="text"
name="paisB" id="paisB" class="form-control input-sm" value="{{$mercosur->paisB}}">
	 	 	 	 	 	 	 </div>
<div class="row">
                                        <div class="col-xs-6 
col-sm-6 col-md-6">
                                        <div class="form-group">
                                             <select name="tipo" id="tipo" class="form-control input-sm" value="{{$mercosur->tipo}}">
                                                  <option value="Seleccione el tipo">Seleccione el tipo</option>
                                                  <option value="Union aduanera">Union aduanera</option>
                                                  <option value="Alcance parcial">Alcance parcial</option>
                                                  <option value="Cooperacion internacional">Cooperacion internacional</option>
                                                  <option value="Libre comercio">Libre comercio</option>
                                                  <option value="Union economica">Union economica</option>
                                             </select>
	 	 	 	 	 	 	 	 	    </div>
	 	 	 	 	 	 	 	    </div>
<div class="col-xs-6 col-sm-6 col-md-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text" 
name="producto" id="producto" class="form-control input-sm" value="{{$mercosur->producto}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>	 	 	 	 	 	 	 </div>
<div class="form-group">
	 	 	 	 	 	 	 	 <textarea name="descripcion" 
class="form-control input-sm" placeholder="descripcion">{{$mercosur->descripcion}}</textarea>
	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 	 <input type="submit" 
value="Actualizar" class="btn btn-success btn-block">
<a href="{{ route('mercosur.index') }}" class="btn btn-info btn-block" >Atrás</a>
	 	 	 	 	 	 	 	 </div>	 

	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </form>
	 	 	 	 	 </div>
	 	 	 	 </div>
	 	 	 </div>
	 	 </div>
</section>
@endsection