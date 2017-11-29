@extends('layout')

@section('title')
  Login
@endsection

@section('content')
<div class="div-1">
<div class="container">

  <div class="row" style="margin-top:20px">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action="login" method="post">
        <fieldset>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <h2>Please Log In</h2>
          @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                {{$err}}<br>
              @endforeach
            </div>
          @endif

          @if(session('alert'))
            <div class="alert alert-danger">
              {{session('alert')}}
            </div>
          @endif
          <hr class="colorgraph">
          <div class="form-group">
              <input type="username" name="username" id="username" class="form-control input-lg" placeholder="Username">
          </div>
          <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
          </div>
          <!-- <span class="button-checkbox">
            <button type="button" class="btn" data-color="info">Remember Me</button>
                      <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
          </span> -->
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <input type="submit" class="btn btn-lg btn-success btn-block" 
                  value="Login">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <a href="{{url('signup')}}" class="btn btn-lg btn-primary btn-block">Signup</a>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

</div>
</div>
@endsection
