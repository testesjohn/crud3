@extends('layout.layout')
@section('title', 'login')
@section('content')

<form action="{{route('login.do')}}" method="post">
    @csrf
    <h3>Login</h3>

    <div>
        <label>Email:</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Senha:</label>
        <input type="text" name="password">
    </div>
    <button type="submit">Login</button>
</form>

@endsection
