<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    @vite('resources/css/signupS.css')
</head>
<body>

    <div class = "logo"> Tes </div>

    <div class="container">
        <h2>Sign up</h2>
        <p>Hi there,</p>
        
        <form method="POST" action="{{ route('signup') }}">
            @csrf

            <label for="gmail">Gmail</label>
            <input type="text" name="email" id="gmail" placeholder="Type here" required>

            <label for="username">Username</label>
            <input type="text" name="name" id="username" placeholder="Type here" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Type here" required>

            <label for="confirm-password">Confirm password</label>
            <input type="password" name="password_confirmation"id="confirm-password" placeholder="Type here" required>

            <button type="submit">Sign up</button>
        </form>
        
        <div class="footer">
            <p>Already have an account?</p>
            <a href="login.html">Login</a>
        </div>
    </div>

</body>
</html>
