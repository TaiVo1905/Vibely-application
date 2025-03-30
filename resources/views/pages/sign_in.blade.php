<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Login</title>
    <link rel="stylesheet" href="{{ asset('assets/Css/signin.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="{{ asset('images/logo.png') }}" alt="Travel Logo" class="logo">
            <h1>Let’s Explore<br>the world together<br><span class="highlight">Join now</span></h1>
            <p>For business inquiries, just call us</p>
            <p class="phone"><strong>+ 23</strong></p>
            <p class="phone"><strong>+ 23</strong></p>
        </div>

        <div class="right-section">
            <div class="login-box">
                <h2>Login</h2>
                <form action="#">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="Thuhien@gmail.com" required>

                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" placeholder="Password" required>
                        <i class="fa fa-eye"></i>
                    </div>

                    <a href="#" class="forgot-password">Forgot password?</a>

                    <button type="submit" class="login-btn">Login</button>
                    
                    <p class="easy-login">Easy login with</p>
                    <div class="social-buttons">
                        <button class="google"><i class="fa fa-google"></i> Google</button>
                        <button class="facebook"><i class="fa fa-facebook"></i> Facebook</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
