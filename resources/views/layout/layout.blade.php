<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <p>Crud and Auth</p>

        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('create')}}">Create</a></li>
                @if (Auth::guest() == true)
                    <li><a href="{{route('login')}}">Login</a></li>
                @else
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @endif
            </ul>
        </nav>
    </header>
    <main>
        @if(Session('msg'))
        <div>
            {{Session('msg')}}
        </div>
        @endif

        <div>@yield('content')</div>
    </main>
</body>
</html>
