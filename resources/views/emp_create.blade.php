@extends('layouts.main-layout')


@section('content')
<h1>Insert a New Employee</h1>
  <div class="link">
    <a class="a2roomCreate" href="{{route('index')}}">To HomePage!</a>
  </div>
  <form class="" action="{{route('emp-store')}} " method="post">
    @csrf
    @method('POST')
    <div class="form_cont">
      <div class="form">
        <label for="name">name</label>
        <input type="text" name="name">
      </div>
      <div class="form">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname">
      </div>
        <div class="form">
        <label for="BD">Birth_Day</label>
        <input type="date" name="BD">
      </div>
      <div class="form">
        <label for="location_id">location</label>
        <select name="location_id">
          @foreach ($locs as $loc)
              <option value="{{$loc ->id}} ">{{$loc ->city}}-{{$loc->state}} </option>
          @endforeach
        </select>
      </div>
      <button type="submit" id="btn" name="button">Insert!</button>
    </div>
  </form>

@endsection
