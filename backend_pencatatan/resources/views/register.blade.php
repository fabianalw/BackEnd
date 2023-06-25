<!DOCTYPE html>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
  <h2>Register Form</h2>
  {{-- @if ($errors->any())
  @foreach ($errors->all() as $err)
  <p class="alert">{{ $err }}</p>
      
  @endforeach
      
  @endif --}}
  <form method="post" action="{{ route('register') }}">
    @csrf
    <div>
      <label>Name : </label>
      <input class="form-control" type="text" name="name" value="{{ old('name') }}"/>
    </div>
    <div>
      <label>Username : </label>
      <input class="form-control" type="text" name="username" value="{{ old('username') }}"/>
    </div>
    <div>
      <label>Password : </label>
      <input class="form-control" type="password" name="password">
    </div>
    <div>
      <label>Password Confirmation : </label>
      <input class="form-control" type="password" name="password">
    </div>
    <div>
      <button type="submit">Register</button>
      <a href="{{ route('home') }}" class="button">Back</a>
    </div>
  </form>
</body>
</html>
