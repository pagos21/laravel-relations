@extends('layouts.main-layout')


@section('content')
<div class="link">
  <a href="{{route('emp-create')}} " class="a2somWhere"> Create a New Dude!</a>
</div>
  <table>
    <tr>
      <th>EMPLOYEES LIST</th>
    </tr>

    {{-- per verificare subito l'output usare:
    {{json_encode($stanze)}} --}}
    @foreach ($emps as $emp)
    <tr>
    <td> <a href=" {{route('emp-show', $emp -> id)}} "> {{$emp -> name}} {{$emp -> lastname}} </a></td>
    </tr>
  @endforeach
</table>
@endsection
