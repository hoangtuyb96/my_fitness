@extends('layout')

@section('title')
  {{$program->name}}
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-4 custom-padding">
      <center><h1>{{$program->name}}</h1></center>
      <table class="table">
        <tr>
          <td>Trainer</td>
          <td>{{$user->fullname}}</td>
        </tr>

        <tr>
          <td>Trainer's Email</td>
          <td>{{$user->email}}</td>
        </tr>

        <tr>
          <td>Birthday</td>
          <td>{{$user->birthday}}</td>
        </tr>

        <tr>
          <td>Address</td>
          <td>{{$user->address}}</td>
        </tr>

        <tr>
          <td>Level</td>
          <td>
            @if($program->level==1)
              Muc do nhe
            @elseif($program->level==2)
              Muc do trung binh
            @else
              Muc do nang
            @endif
          </td>
        </tr>
        
        <tr>
          <td>Training time</td>
          <td>{{$program->schedule->count()}} day</td>
        </tr>
      </table>
    </div>
    <div class="col-sm-8 custom-padding-1">
      <img class="me-image" src="{{$program->images}}">
    </div>
  </div>

  <div class="row custom-padding-2">
    @foreach ($program->schedule as $schedule)
    <div class="clearfix">
      <h1><span class="glyphicon glyphicon-asterisk"></span> {{$schedule->name}}</h1>
        <div>
          @foreach ($schedule->action as $action)
            <div class="col-sm-4">  
              <h3>---{{$action->name}}</h3>
            </div>
          @endforeach
        </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
