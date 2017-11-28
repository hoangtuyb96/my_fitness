<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{asset('css/users.css')}}">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

  <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action="signup" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
        <hr class="colorgraph">
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
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="3">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
        </div>
        <label>Password</label>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Fullname</label>
          <input type="text" name="fullname" id="fullname" class="form-control input-lg" placeholder="Fullname" tabindex="4">
        </div>
        <div class='form-group'>
          <label>Purpose</label>
          <div class="radio">
            <label><input type="radio" name="purpose" value="1" checked>Trainer</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="purpose" value="2">Trainee</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="purpose" value="3">Both</label>
          </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
          <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
