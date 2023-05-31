@extends('layouts.app')
@section('title','Listagem')
@section('content')

<h1> Listagem de usuários 
    <a href="{{route('users.create')}}"> (+) </a> 
</h1>
    <ul>
    @foreach($users as $user)
    <li>
    {{$user->name}}
    <a href="{{ route('users.show', $user->id) }}">- Detalhes</a>
    <a href="{{ route('users.edit', $user->id) }}">- Editar</a>
    </li>
    @endforeach
    <h2> Detalhes do Usuário </h2>
    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->created_at}}</li>
    </ul>
    
    <form action="{{route('users.delete',$user->id }}" method="POST">
        @method('DELETE')
        @csrf
    <button type="submit">Deletar</button>
    </form>
@endsection