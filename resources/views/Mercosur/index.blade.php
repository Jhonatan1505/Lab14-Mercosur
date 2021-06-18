@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCOSUR - Relaciones Comerciales</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/header.css">
</head>

<body>
    <?php ?>
    <main>
        <center>
        <div>MERCOSUR
        <br>     
        <br>
        <br> 
            <div class="row">
            <section class="content">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="pull-left"><h3>Lista de relaciones comerciales</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                        <a href="{{ route('mercosur.create') }}" class="btn 
            btn-info" >Añadir </a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred 
            table-striped">
                        <thead>
                        <th>Nombre</th>
                        <th>paisA</th>
                        <th>paisB</th>
                        <th>tipo</th>
                        <th>producto</th>
                        <th>descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @if($mercosurs->count())  
                        @foreach($mercosurs as $mercosur)  
                        <tr>
                            <td>{{$mercosur->nombre}}</td>
                            <td>{{$mercosur->paisA}}</td>
                            <td>{{$mercosur->paisB}}</td>
                            <td>{{$mercosur->tipo}}</td>
                            <td>{{$mercosur->producto}}</td>
                            <td>{{$mercosur->descripcion}}</td>
                            <td><a class="btn btn-primary btn-xs"
            href="{{action('MercosurController@edit', $mercosur->id)}}" ><span 
            class="glyphicon glyphicon-pencil"></span></a></td>
                            <td>
                            <form action="{{action('MercosurController@destroy', $mercosur->id)}}"method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            
                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon 
                glyphicon-trash"></span></button>
                            </td>
                            </tr>
                            @endforeach 
                            @else
                            <tr>
                            <td colspan="8">No hay registro !!</td>
                            </tr>
                            @endif
                        </tbody>

                        </table> 
                        </div>
                    </div>
                    {{ $mercosurs->links() }}
                </div>
                </div>
            </section>
        </div>
    </main>
    <main>
        <div class="enlaces">
            <div class="row">
            <section class="content">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="pull-left"><h3>Lista de relaciones diplomaticas</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                        <a href="{{ route('mercosur.create') }}" class="btn 
            btn-info" >Añadir </a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred 
            table-striped">
                        <thead>
                        <th>Nombre</th>
                        <th>paisA</th>
                        <th>paisB</th>
                        <th>tipo</th>
                        <th>producto</th>
                        <th>descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @if($mercosurs->count())  
                        @foreach($mercosurs as $mercosur)  
                        <tr>
                            <td>{{$mercosur->nombre}}</td>
                            <td>{{$mercosur->paisA}}</td>
                            <td>{{$mercosur->paisB}}</td>
                            <td>{{$mercosur->tipo}}</td>
                            <td>{{$mercosur->producto}}</td>
                            <td>{{$mercosur->descripcion}}</td>
                            <td><a class="btn btn-primary btn-xs"
            href="{{action('MercosurController@edit', $mercosur->id)}}" ><span 
            class="glyphicon glyphicon-pencil"></span></a></td>
                            <td>
                            <form action="{{action('MercosurController@destroy', $mercosur->id)}}"method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            
                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon 
                glyphicon-trash"></span></button>
                            </td>
                            </tr>
                            @endforeach 
                            @else
                            <tr>
                            <td colspan="8">No hay registro !!</td>
                            </tr>
                            @endif
                        </tbody>

                        </table> 
                        </div>
                    </div>
                    {{ $mercosurs->links() }}
                </div>
                </div>
            </section>
        </div>
        </center>
    </main>
</body>
</html>
@endsection