<!DOCTYPE html>
<html>
<head>
  <title>My page</title>
</head>
<body>
  @if(session('alert'))
    <div class="alert alert-danger">
      {{session('alert')}}
    </div>
  @endif

  @if(Auth::check())
    index.blade.php
    <a href="{{url('logout')}}">Logout</a>
  @endif
</body>
</html>
