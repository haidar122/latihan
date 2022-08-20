<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Laravel</title>
</head>
<body>
    @switch($name)
        @case("Programmer Pemula")
            <h1>Halo, aku {{$name}}</h1>
            @break
        @case("")
            @break
        @default
        <h1>Halo, aku bukan Programmer Pemula</h1>
        @endswitch
    {{-- For Loop --}}
    @for ($i = 0; $i < 10; $i++)
        The current value is {{$i}}
    @endfor
    {{-- For Each --}}
    @foreach ($user as $user)
        <p>This is user{{$user->id}}</p>
    @endforeach
    {{-- For Else --}}
    @forelse ($user as $user)
        <li>{{$user->name}}</li>
    @empty
        <p>No user</p>
    @endforelse
    {{-- While Loop --}}
    @while (true)
    <p>I'm lopping forever</p>

    @endwhile
</body>
</html>
