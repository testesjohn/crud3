@extends('layout.layout')
@section('title', 'home')
@section('content')

<h1>Home</h1>

@if($users -> count() > 0)
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('edit', $user->id)}}">Edit</a>
                <form action="{{route('destroy', $user->id)}}" method="post">
                    @csrf
                    @method('delete')

                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h4>Não ha usuários criados, <a href="{{route('create')}}">crie já</a></h4>
@endif

@endsection
