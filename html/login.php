
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body class="reg1" data-bs-theme>
    <div class="main" data-aos="fade-right" data-aos-delay="150">
        <h1>Login</h1>
        <form class="container" method="POST" action="login_process.php">
            <div class="input-field">
                <i class="fa-solid fa-user"></i>
                <label for="email" class="lblname ms-2">Email</label>
                <input type="email" class="input-box" name="email" id="email" placeholder="Type your email" required>
            </div>
            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <label for="Password" class="lblname ms-2">Password</label>
                <input type="Password" class="input-box" name="Password" id="Password" placeholder="Type your password"
                    required>
            </div>
            <div class="input-field">
                <a href="#">Forgot Password?</a>
            </div>
            <button class="reg-btn mt-4" type="submit" value="submit">Login</button>
        </form>
        <p class="reg">Dont have an account?<a href="../html/registration.php">&nbsp; Register</a></p>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>