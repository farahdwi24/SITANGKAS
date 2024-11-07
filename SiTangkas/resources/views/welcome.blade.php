<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SiTangkas</title>
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                <span><img src="{{ asset('images/LogoName.png') }}" alt="LogoName"></span>
            </a>
        </div>
    </nav>

    <div class="login-wrapper">
        <div class="side-image">
            <img src="{{ asset('images/Attendance.png') }}" alt="Attendance">
            <img src="{{ asset('images/Login.png') }}" alt="Illustration" class="register-image">
        </div>

        <div class="form-wrapper">
            <div class="form-container">
                <div class="form-group">
                    <label for="username">Username</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                </div>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/dashboard'" >Sign In</button>
                <div class="register-link">
                    Don’t have an account? <a href="/register" style="text-decoration: none; color:#03a3a3">Register here</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
