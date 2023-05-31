













@if ($errors->any())
<ul class="erros">
    @foreach ($errors->all() as $item)
    <li class="error">{{$item}} </li>
    @endforeach
</ul>
@endif

<form action="{{route('users.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder=""