<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script rel='js' src="{{asset('bootstrap/css/bootstrap.min.css')}}"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            {{-- @include('header') --}}
        </div>
        @yield('content')
    </div>
    
</body>
</html>