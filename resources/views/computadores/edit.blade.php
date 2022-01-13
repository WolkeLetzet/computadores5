@extends('layouts.app')

@section('content')

    <div>

    

    <form action="{{url('/computers/')}}" method="POST">
        @csrf

        <div >
            <input name="oficina" type="text" placeholder="Oficina" value="{{$computer->oficina}}">
        </div>
        <div>
            <input name="responsable" type="text" placeholder="Responsable" value="{{$computer->responsable}}">
        </div>
        <div>
            <input name="tipo_uso" type="text" placeholder="Tipo de Uso" value="{{$computer->tipo_uso}}">
        </div>
        <div>
            <input name="fecha" type="text" placeholder="Fecha" value="{{$computer->fecha}}">
        </div>
        <div>
            <input name="marca" type="text" placeholder="Marca" value="{{$computer->marca}}">

        </div>

        <div>
            <input name="modelo" type="text" placeholder="Modelo" value="{{$computer->modelo}}">
        
        </div>

        <div>
            <input name="ram" type="text" placeholder="RAM" value="{{$computer->ram}}">
        </div>

        <div>
            <input name="almacenamiento" type="text" placeholder="Almacenamiento" value="{{$computer->almacenamiento}}">
        </div>

        <div>
            <input name="so" type="text" placeholder="Sistema Operativo" value="{{$computer->SO}}">
        </div>

        <div>
            <textarea name="comentarios" cols="30" rows="3" placeholder="Comentario" >{{$computer->comentarios}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Guardar Computador</button>
        <a href="{{url('/computers/')}}" class="btn btn-primary">Canelar</a>


    </form>
    </div>
@endsection