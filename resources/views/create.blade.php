@extends('layout.layout')
@section('title', 'create')
@section('content')

<form action="{{route('store')}}" method="post">
    @csrf
    <h3>Create</h3>

    <div>
        <label>Nome:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Senha:</label>
        <input type="text" name="password">
    </div>
    <button type="submit">Create</button>
</form>

@endsection
