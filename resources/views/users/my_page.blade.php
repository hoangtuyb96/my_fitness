@extends('layout')

@section('title')
  {{$user->fullname}}'s My Page
@endsection

@section('content')
<div id="fh5co-blog-section" class="fh5co-light-grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
        <h1><b>{{$user->fullname}}'s My Page<b></h1>
      </div>
    </div>
    @for ($i=0,$j=1; $i<$following_program->count(),$j<$following_program->count(); $i=$i+2,$j=$j+2)
      <div class="row">
        <div class="col-md-6 col-sm-6 animate-box">
          <a href="#" class="item-grid">
            <div class="image" style="background-image: url({{$following_program->get($i)->images}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$following_program->get($i)->name}}</h3>
                <h5 class="date"><span>{{$following_program->get($i)->created_at}}</span> | <span>4 Comments</span></h5>
                <p>{{$following_program->get($i)->content}}</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-sm-6 animate-box">
          <a href="#" class="item-grid">
            <div class="image" style="background-image: url({{$following_program->get($j)->images}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$following_program->get($j)->name}}</h3>
                <h5 class="date"><span>{{$following_program->get($j)->created_at}}</span> | <span>10 Comments</span></h5>
                <p>{{$following_program->get($j)->content}}</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    @endfor
  </div>
</div>
@endsection
