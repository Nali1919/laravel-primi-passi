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

  <a href="{{url('/ciao2')}}">Vai a ciao2</a>
    @php
        $array = [1,2,3,4,5,6,7,8,9,10];
    @endphp
 <ul>
    @foreach($array as $number )
        <li>{{$number}}</li>
    @endforeach
 </ul>

</body>
</html>
