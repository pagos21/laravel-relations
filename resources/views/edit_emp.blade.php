
@extends('layouts.main-layout')

@section('content')

  <form class="" action="{{route('emp-update', $emp->id)}} " method="post">
    @csrf
    @method('POST')
    <div class="form_cont">
      <div class="form">
        <label for="name">name</label>
        <input type="text" name="name" value="{{$emp->name}}">
      </div>
      <div class="form">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" value="{{$emp->lastname}}">
      </div>
        <div class="form">
        <label for="BD">Birth_Day</label>
        <input type="date" name="BD" value="{{$emp->BD}}">
      </div>
      <div class="form">
        <label for="BD">location</label>
        <select name="location">
          @foreach ($locs as $loc)
              <option value="{{$loc ->id}} "
                @if ($loc->id == $emp->location->id)
                    selected
                @endif
                
                >{{$loc ->city}}-{{$loc->state}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" id="btn" name="button" >Edit!</button>
    </div>
  </form>

@endsection
