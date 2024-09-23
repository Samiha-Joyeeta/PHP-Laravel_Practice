<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Registration Form</h1>
<form action="{{url('/')}}/register" method="post">
@csrf
{{--<pre>
@php
print_r($errors->all());
@endphp
</pre>--}}
<div class="container">

  <x-input type="text" name="name" label="Enter Your Name"/>
  <x-input type="email" name="email" label="Email will be visible to you only"/>
  <x-input type="password" name="password" label="Enter Your Password"/>
  <x-input type="password" name="password_confirmation" label="We-write your password"/>

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

  </body>
</html>
