<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/loginS.css'); ?>
</head>
<body>

    <div class = "logo"> Tes </div>

    <div class="container">
        <h2>Login</h2>
        <p>Hi there,</p>
        
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <label for="username">Username</label>
            <input type="text" name="name" id="username" placeholder="Type here" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Type here" required>

            <button type="submit">Login</button>
        </form>
        
        <div class="footer">
            <p>Don't have an account?</p>
            <a href="<?php echo e(route('signup')); ?>">Sign up</a>
        </div>
    </div>

</body>
</html>
<?php /**PATH D:\Github\Project-Akhir-PEMWEB-pengeTidur\pengenTidur\resources\views/login.blade.php ENDPATH**/ ?>