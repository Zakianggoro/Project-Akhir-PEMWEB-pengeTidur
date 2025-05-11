<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    @vite('resources/css/loginS.css')
</head>
<body>

    <div class = "logo"> Tes </div>

    <div class="container">
        <h2>Login</h2>
        <p>Hi there,</p>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="username">Username</label>
            <input type="text" name="name" id="username" placeholder="Type here" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Type here" required>

            <button type="submit">Sign up</button>
        </form>
        
        <div class="footer">
            <p>Already have an account?</p>
            <a href="home.html">Login</a>
        </div>
    </div>

</body>
</html>
