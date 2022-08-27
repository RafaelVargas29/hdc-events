<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(10 > 5)
            <p>É true</p>
        @endif

        <p>{{ $nome }}</p>

        @if ($nome ==  'Pedro')
            <p>O nome é Pedro!</p>
        @else
            <p>O nome não é Pedro</p>
        @endif
        
        @for($i=0; $i< count($arr); $i++)
            <p> {{ $arr[$i] }}</p>
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            echo "";
            $name = "Rafael";   
            echo $name;
        @endphp
    </body>
</html>
