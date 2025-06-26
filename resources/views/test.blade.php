<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog app </title>
</head>
<body>
<h1> welcome to be in laravel </h1>
<h2> {{ $name }}</h2>
{{-- <h2> {{ $user_name }}</h2> --}}
<h2> {{ $job }}</h2>
<h2> {{ $age }}</h2>
 @foreach($skills as $skill )
{{ $skill }}
@endforeach
</body>
</html>
