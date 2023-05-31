@extends( 'layouts.app' )
@section( 'title','Editar Usuário' )
@section( 'content' )
    <h1>Editar Usuário {{$user->name}}</h1>

    @if ($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $item)
        <li class="errors">{{ $item }}</li>            
        @endforeach
    </ul>
    @endif

    <form action="{{route('users.update', $user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input  type="text"     name="name"     placeholder="Nome"    value="{{"$user->name"}}">
        <input  type="email"    name="email"    placeholder="E-mail"  value="{{"$user->email"}}">
        <input  type="password" name="password" placeholder="Senha">
        <button type="submit">Atualizar</button>        
    </form>
@endsection