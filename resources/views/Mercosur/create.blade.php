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
                          <h3 class="panel-title">Nuevo Relacion Comercial</
h3>
                </div>
                <div class="panel-body">
                     <div class="table-container">
                          <form method="POST"
action="{{ route('mercosur.store') }}"  role="form">
                                   {{ csrf_field() }}
                                   <div class="row">
                                        <div class="col-xs-6 
col-sm-6 col-md-6">
                                             <div class="form-
group">
                                                  <input 
type="text" name="nombre" id="nombre" class="form-control input-
sm" placeholder="Nombre de la relacion comercial">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 
col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" 
name="paisA" id="paisA" class="form-control input-sm" placeholder="Pais A">
	 	 	 	 	 	 	 	 	    </div>
	 	 	 	 	 	 	 	    </div>
	 	 	 	 	 	 	 </div>
                                   <div class="col-xs-6 
col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" 
name="paisB" id="paisB" class="form-control input-sm" placeholder="Pais B">
	 	 	 	 	 	 	 	 	    </div>
	 	 	 	 	 	 	 	    </div>

                                   <div class="col-xs-6 
col-sm-6 col-md-6">
                                        <div class="form-group">
                                             <select name="tipo" id="tipo" class="form-control input-sm" placeholder="tipo">
                                                  <option value="Seleccione el tipo">Seleccione el tipo</option>
                                                  <option value="Union aduanera">Union aduanera</option>
                                                  <option value="Alcance parcial">Alcance parcial</option>
                                                  <option value="Cooperacion internacional">Cooperacion internacional</option>
                                                  <option value="Libre comercio">Libre comercio</option>
                                                  <option value="Union economica">Union economica</option>
                                             </select>
	 	 	 	 	 	 	 	 	    </div>
	 	 	 	 	 	 	 	    </div>
                                             <div class="col-xs-6 
col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" 
name="producto" id="producto" class="form-control input-sm" placeholder="Producto">
	 	 	 	 	 	 	 	 	    </div>
	 	 	 	 	 	 	 	    </div>
                            
	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 <textarea name="descripcion" 
class="form-control input-sm" placeholder="Descripcion"></textarea>
	 	 	 	 	 	 	 </div>
                             <div class="row">
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 	 <input type="submit" 
value="Guardar" class="btn btn-success btn-block">
                                     <a 
href="{{ route('mercosur.index') }}" class="btn btn-info btn-block" >Atrás</a>
	 	 	 	 	 	 	 	 </div>	 
	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </form>
	 	 	 	 	 </div>
	 	 	 	 </div>
	 	 	 </div>
	 	 </div>
</section>
@endsection