@extends('layouts.main-layout')


@section('content')
  <div class="link">
    <a class="a2someWhere" href="{{route('index')}}">To HomePage!</a>
  </div>

<h1>Nome Impiegato: {{$emp -> name}}</h1>
<h2>Cognome:  {{$emp -> lastname}}</h2>
<h2>Data di nascita: {{$emp -> BD}}</h2>
<h2>Lovora presso: {{$emp->location->name}}/{{$emp->location->city}} [{{$emp->location ->state}}] </h2> <br>
<h2>Con le seguenti Mansioni:</h2>
@foreach ($emp -> tasks as $tas)
    <li>
      {{$tas ->name}}
    </li>
@endforeach
<div class="link">
  <a href="{{route('emp-edit', $emp->id)}}">Edit This Dude!</a> <br>
  <a href="{{route('emp-delete', $emp->id)}}">Delete This Dude!</a>

</div>

@endsection
