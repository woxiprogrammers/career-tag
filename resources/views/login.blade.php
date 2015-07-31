<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="cache-control" content="must-revalidate" />
    <meta http-equiv="expires"       content="0" />
    <meta http-equiv="expires"       content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma"        content="no-cache" />

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<!--<form method="POST" action="login">-->
<!--    {!! csrf_field() !!}-->
<!---->
<!--    <div>-->
<!--        Email-->
<!--        <input type="email" name="email" value="{{ old('email') }}">-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        Password-->
<!--        <input type="password" name="password" id="password">-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <input type="checkbox" name="remember"> Remember Me-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <button type="submit">Login</button>-->
<!--    </div>-->
<!--</form>-->


<div class="container">
    <h2>Welcome To Career Tag</h2>
    <form role="form" method="POST" action="login">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
        </div>
<!--        <div class="checkbox">-->
<!--            <label><input type="checkbox"> Remember me</label>-->
<!--        </div>-->
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="reset" class="btn btn-success">Reset</button>
    </form>
</div>
</body>
</html>