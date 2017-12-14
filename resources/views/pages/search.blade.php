@extends('layout')

@section('title')
  Search Result
@endsection

@section('content')
<div id="fh5co-blog-section" class="fh5co-light-grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h1><b>Search Result<b></h1>
        <h2>{{$key}}'s Program</h2>
      </div>
    </div>
    @for ($i=0,$j=1; $i<$programs->count(),$j<$programs->count(); $i=$i+2,$j=$j+2)
      <div class="row">
        <div class="col-md-6 col-sm-6 animate-box">
          <a href="#" class="item-grid">
            <div class="image" style="background-image: url({{$programs->get($i)->images}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$programs->get($i)->name}}</h3>
                <h5 class="date"><span>{{$programs->get($i)->created_at}}</span> | <span>4 Comments</span></h5>
                <p>{{$programs->get($i)->content}}</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-sm-6 animate-box">
          <a href="#" class="item-grid">
            <div class="image" style="background-image: url({{$programs->get($j)->images}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$programs->get($j)->name}}</h3>
                <h5 class="date"><span>{{$programs->get($j)->created_at}}</span> | <span>10 Comments</span></h5>
                <p>{{$programs->get($j)->content}}</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    @endfor
  </div>
</div>
@endsection
