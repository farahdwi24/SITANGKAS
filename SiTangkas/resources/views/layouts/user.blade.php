<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User Dashboard')</title> 
    <link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                <span><img src="{{ asset('images/LogoName.png') }}" alt="LogoName"></span>
                <div class="admin-profile" style="color: white;">
                    <span style="margin-right: 10px;">USER</span>
                    <img src="{{ asset('images/AdminProfile.png') }}" alt="Admin Picture" style="width: 40px; height: 40px; border-radius: 10%;">
                </div>
            </a>
        </div>
    </nav>

    <div class="sidebar">
        <a href="{{ route('Userdashboard') }}">
            <img src="{{ asset('images/DashboardIcon.png') }}" alt="Dashboard Icon" class="sidebar-icon">
            Dashboard
        </a>
        <a href="{{ route('Usersetup-payroll') }}">
            <img src="{{ asset('images/SetUpPayrollIcon.png') }}" alt="Payroll Icon" class="sidebar-icon">
            Set Up Payroll
        </a>
        <a href="{{ route('Useremployees-list') }}">
            <img src="{{ asset('images/EmployeesListIcon.png') }}" alt="Employees Icon" class="sidebar-icon">
            Employees List
        </a>
    </div>

    <div class="content">
        @yield('content') 
    </div>

    <img src="{{ asset('images/Dashboard.png') }}" alt="Footer Image" class="dashboard-image">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
