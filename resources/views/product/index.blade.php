@extends('layouts.layout')
<title>@section('title','aqui index')</title>
@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Existencias</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pro as $prod)
            <tr>
                <td>{{$prod->name}}</td>
                <td>{{$prod->description}}</td>
                <td>{{$prod->stock}}</td>
                <td>{{$prod->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$prod->links()}}
</div>

@endsection