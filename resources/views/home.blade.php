<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{$name}} </h1>

    @php
      $arr = [1,2,3,4,5];
      print_r($arr);
    @endphp
    @foreach($arr as $i)
        <h2>{{$i}}</h2>
    @endforeach
</body>
</html>