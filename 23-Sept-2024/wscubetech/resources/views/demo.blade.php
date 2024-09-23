



<!DOCTYPE HTML>
<html>
<head>
<title>Welome Home</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



</head>
<body>


<h1>
    Welcome to home page of Shohoz, Dear {{$name ?? "Guest"}}
</h1>



@php
  $con = [1,2,3,3];
  $cod = array("afghanistan","India","China");
@endphp

<select>
    @foreach($cod as $key => $c)
    <option value="{{$key}}"> {{$c}} </option>
    @endforeach

</select>

@php
$numbers = [1, 3, 5, 7, 9, 11];
@endphp

@foreach ($numbers as $number)
    @if ($loop->iteration == 4)
    {{--If iteration is 4, loop stops --}}
        @break
        @else
        {{$number}}
    @endif
@endforeach


</body>
</html>



