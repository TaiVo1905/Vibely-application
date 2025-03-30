<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Sign Up</title>
    <link rel="stylesheet" href="{{ asset('assets/Css/signup.css') }}">

</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="{{ asset('images/logo.png') }}" alt="Travel Logo" class="logo">
            <h1>Let’s Explore<br>the world together<br><span class="highlight">Join now</span></h1>
            <p>For business inquiries, just call us</p>
            <p class="phone"><strong>+12323</strong></p>
            <p class="phone"><strong>+1234</strong></p>
        </div>

        <div class="right-section">
            <div class="login-box">
                <h2>Sign Up</h2>
                <form action="#">
                    <label for="username">Full Name</label>
                    <input type="text" id="username" placeholder="Enter your name" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" placeholder="Enter password" required>
                        <i class="fa fa-eye toggle-password"></i>
                    </div>

                    <label for="confirm-password">Confirm Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="confirm-password" placeholder="Confirm password" required>
                        <i class="fa fa-eye toggle-password"></i>
                    </div>

                    <button type="submit" class="login-btn">Sign Up</button>
                    
                    <p class="easy-login">Or sign up with</p>
                    <div class="social-buttons">
                        <button class="google"><i class="fa fa-google"></i> Google</button>
                        <button class="facebook"><i class="fa fa-facebook"></i> Facebook</button>
                    </div>

                    <p class="already-account">Already have an account? <a href="#">Login here</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/signup.js') }}"></script>

</body>
</html>
