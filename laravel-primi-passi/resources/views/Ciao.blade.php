<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao</h1>

  <a href="{{url('/list1')}}">LINK 1</a>
    @php
        $Number = [1,2,4,7,8,3,4,7];
    @endphp

    @foreach($Number as $Numbers )
        <h3>{{$Numbers}}</h3>
    @endforeach





</body>
</html>
