@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/computadores/resources/css/app.css">


    <table class="table table-striped">
        <thead>
            <tr>
                <th style="font-size: smaller">ID</th>
                <th style="font-size: smaller">Oficina</th>
                <th style="font-size: smaller">Responsable</th>
                <th style="font-size: smaller">Tipo de Uso</th>
                <th style="font-size: smaller">Fecha</th>
                <th style="font-size: smaller">Marca</th>
                <th style="font-size: smaller">Modelo</th>
                <th style="font-size: smaller">RAM</th>
                <th style="font-size: smaller">HDD</th>
                <th style="font-size: smaller">SO</th>
                <th style="font-size: smaller">Comentario</th>
                <th style="font-size: smaller">Acciones</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($computers as $item)
        <tr>
            <th class="id" style="font-size: smaller">
                {{$item->id}}
            </th>
            <th style="font-size: smaller">
                {{$item->oficina}}
            </th style="font-size: smaller">
            <th style="font-size: smaller">
                {{$item->responsable}}
            </th>
             <th style="font-size: smaller">
                {{$item->tipo_uso}}
            </th>
            <th style="font-size: smaller">
                {{$item->fecha}}

            </th>            
            <th style="font-size: smaller">
                {{$item->marca}}
            </th>
            <th style="font-size: smaller">
                {{$item->modelo}}
            </th>
            <th style="font-size: smaller">
                {{$item->ram}}
            </th>
            <th style="font-size: smaller">
                {{$item->almacenamiento}}
            </th>
            <th style="font-size: smaller">
                {{$item->SO}}
            </th>
            <th class="comentario">
                {{$item->comentarios}}
            </th>

            <th>
                <div>
                    <a href="{{url('/computers/'.$item->id.'/edit/')}}" class= "btn btn-primary">Editar</a>
                    <form action="{{url('/computers/'.$item->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Borrar" onclick="return confirm('¿Estas Seguro de que Quieres borrar este registro?')" class="btn btn-danger"> 
                    </form>
                    
                </div>
            </th>

            
        </tr>
    
            
        @endforeach
        </tbody>
    </table>
    

    <style>}
       

    </style>
@endsection
