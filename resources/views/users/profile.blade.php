@extends('layout')

@section('title')
  {{$user->username}}'s Profile
@endsection

@section('content')
<div class="div-1">
<div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action="profile" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        @if(session('alert'))
          <div class="alert alert-success">
            {{session('alert')}}
          </div>
        @endif
        <h2>{{$user->username}}'s Profile</h2>
        <hr class="colorgraph">        
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" id="username" class="form-control input-lg" value="{{$user->username}}" tabindex="3" disabled>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" id="email" class="form-control input-lg" value="{{$user->email}}"" tabindex="4" disabled>
        </div>
        <div class="form-group">
          <label>Fullname</label>
          <input type="text" name="fullname" id="fullname" class="form-control input-lg" value="{{$user->fullname}}" tabindex="4">
        </div>
        <div class="form-group">
          <label>Birthday</label>
          <input type="date" name="birthday" id="birthday" class="form-control input-lg" tabindex="4">
          <script type="text/javascript">
            var dateControl = document.querySelector('input[type="date"]');
            dateControl.value = '{{$user->birthday}}';
          </script>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
          <label>Weight</label>
            <div class="form-group">
              <input type="text" name="weight" id="weight" class="form-control input-lg" value="{{$user->weight}}" tabindex="5">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <label>Height</label>
            <div class="form-group">
              <input type="height" name="height" id="height" class="form-control input-lg" value="{{$user->height}}" tabindex="6">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Job</label>
          <input type="text" name="job" id="job" class="form-control input-lg" value="{{$user->job}}" tabindex="4">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" id="address" class="form-control input-lg" value="{{$user->address}}" tabindex="4">
        </div>
        <div class='form-group'>
          <label>Purpose</label>
          <div class="radio">
            <label><input type="radio" name="purpose" value="1" <?php if($user->purpose==1) echo "checked"; ?>/>Trainer</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="purpose" value="2" <?php if($user->purpose==2) echo "checked"; ?>/>Trainee</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="purpose" value="3" <?php if($user->purpose==3) echo "checked"; ?>/>Both</label>
          </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-md-offset-3 col-md-6"><input type="submit" value="Update profile" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
