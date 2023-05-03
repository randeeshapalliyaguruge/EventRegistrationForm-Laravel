@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Events</title>

    <script>
        alert("Welcome {{ Auth::user()->name }}");
        </script>

</head>
<body>
    <div class="text-center">
    <p>Welcome to My Events {{ Auth::user()->name }}</p>
    </div>
</body>
</html>
@endsection
