<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagbe - Login</title>
</head>
<body>
    <div class="content">
        <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
            <span>{{Session::get('success')}}</span>
            @endif
            @if(Session::has('fail'))
            <span>{{Session::get('fail')}}</span>
            @endif
            @csrf
            <h3>Login to Lagbe</h3>
            <input type="text" name="email" placeholder="Enter email" value="{{old('email')}}"><br>
            <span>@error('email') {{$message}} @enderror</span><br>
            <input type="password" name="password" placeholder="Enter password"><br>
            <span>@error('password') {{$message}} @enderror</span><br>
            <button type="submit">Login</button><br><br>
            <a href="register">New user? Register now</a>
        </form>
    </div>
</body>
</html>
