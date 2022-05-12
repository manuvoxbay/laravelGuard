<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="{{route('login')}}" name="login_form">
        @csrf
        Login <br/>
        User name 
        <input type="email" name="email" placeholder="Enter you username"/>
        Password
        <input type="password" name="password" placeholder="Enter you password"/>
        <input type="submit" value="Login" name="login"/>
    </form>
</body>
</html>