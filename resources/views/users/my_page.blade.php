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
      <div class="col-md-3">
          <form method="post" action="/{{$user->username}}/list_program">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Age</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                   <input type="numberic" name="age" id="age" class="txt" tabindex="1" placeholder="50" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Weigh</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="numberic" name="weigh" id="weigh" class="txt" tabindex="1" placeholder="50" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Heigh</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="numberic" name="height" id="height" class="txt" tabindex="2" placeholder="170" required>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Find Program</button>
          </form>
      </div>
      <div class="col-md-9">
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
</div>
@endsection
