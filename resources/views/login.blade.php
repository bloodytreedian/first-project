<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Login
        </div>
        <div>
            <input type="text" name="email" class="email input" placeholder="Email">
            <input type="password" name="password" class="password input" placeholder="password">
        </div>
        <div class="submit_div">
            <button>Submit</button>
            <a type="button" href="/register">Register</a>
        </div>
    </div>
</div>
</body>
</html>
<style>

</style>
