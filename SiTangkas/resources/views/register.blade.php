<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SiTangkas</title>
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
        <div class="form-wrapper">
            <div class="form-container">
                <div class="form-group">
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" required>
                </div>
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
                <div class="form-group">
                    <label for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/'">Register Now</button>
                <div class="register-link">
                    <a href="/" style="text-decoration: none; color:#03a3a3 ">Have an account? Login here</a>
                </div>
            </div>
        </div>
        <div class="side-image">
            <img src="{{ asset('images/AdminRegistration.png') }}" alt="Attendance">
            <img src="{{ asset('images/Register.png') }}" alt="Illustration" class="register-image">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
