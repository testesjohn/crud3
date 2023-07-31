@extends('layout.layout')
@section('title', 'edit')
@section('content')

<form action="{{route('update', $user->id)}}" method="post">
    @csrf
    @method('put')
    <h3>Edit</h3>

    <div>
        <label>Nome:</label>
        <input type="text" name="name" value="{{$user->name}}">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{$user->email}}">
    </div>
    <div>
        <label>Senha:</label>
        <input type="text" name="password">
    </div>
    <button type="submit">Edit</button>
</form>

@endsection
