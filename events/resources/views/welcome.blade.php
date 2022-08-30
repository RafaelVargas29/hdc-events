@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
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

@endsection

