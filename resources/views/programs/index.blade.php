@extends('layout')

@section('title')
  Programs
@endsection

@section('content')
<div id="fh5co-work-section" class="fh5co-light-grey-section">
  <div class="container">
    @if(session('alert'))
      <div class="alert alert-danger">
        {{session('alert')}}
      </div>
    @endif
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>All Programs</h2>
      </div>
    </div>
    <div class="row">
      @for ($i=0; $i<$programs->count(); $i++)
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($i)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($i)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($i)->name}}</h3>
              <h5 class="category">{{$programs->get($i)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      @endfor
    </div>
      <center>{{ $programs->links() }}
      </center>
      
  </div>
</div>
@endsection
