
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>
<style>
    #alert{
    display:none;
    color:red;
}
</style>
<body class="reg1" data-bs-theme>
    <div id="alert"></div>
    <div class="main" data-aos="fade-right" data-aos-delay="150">
        <h1>Register</h1>
        <form class="register" method="POST" action="reg_process.php">
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                <label for="Email" class="lblname ms-2">Email</label>
                <input type="email" class="input-box" name="email" id="email" placeholder="Type your email" required>
            </div>
            <div class="input-field">
                <i class="fa-solid fa-user"></i>
                <label for="Username" class="lblname ms-2">Username</label>
                <input type="text" class="input-box" name="Username" id="Username" placeholder="Type your username"
                    required>
            </div>
            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <label for="Password" class="lblname ms-2">Password</label>
                <input type="password" class="input-box" name="Password" id="Password" placeholder="Type your password"
                    required>

            </div>
            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <label for="confirmPassword" class="lblname ms-2">Confirm Password</label>
                <input type="password" class="input-box" name="confirmPassword" id="confirmPassword"
                    placeholder="Type your password" required minlength="8">

            </div>
            <button class="reg-btn" type="submit" value="submit">Sign-up</button>
            <p class="reg">Dont have an account?</p>
            <a href="../html/login.php">&nbsp; Sign-In</a>
        </form>

    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>