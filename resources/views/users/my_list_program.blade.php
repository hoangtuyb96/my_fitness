@extends('layout')

@section('title')
  Recommend program
@endsection

@section('content')
<!-- {{$programs}} -->
<div id="fh5co-work-section" class="fh5co-light-grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Recommend program for you</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($programs as $program)
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$program->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$program->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$program->name}}</h3>
              <h5 class="category">{{$program->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <center>{{$programs->links()}}</center>
  </div>
</div>
@endsection
