
<form method="post" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Username
        <input type="text" name="username" id="username">
    </div>
    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember">Remember me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

