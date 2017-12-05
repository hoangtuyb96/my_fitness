@extends('layout')

@section('title')
  {{$user->fullname}}'s My Page
@endsection

@section('content')
<div id="fh5co-blog-section" class="fh5co-light-grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h1><b>{{$user->fullname}}'s My Page<b></h1>
      </div>
    </div>
    <div class="row">
      @foreach ($following_program as $program)
        <div class="col-md-6">
          <a href="/programs/{{$program->id}}" class="item-grid custom-block-my-page">
            <div class="image" style="background-image: url({{$program->images}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$program->name}}</h3>
                <h5 class="date"><span>{{$program->created_at}}</span> | <span>4 Comments</span></h5>
                <p>{{$program->content}}</p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
