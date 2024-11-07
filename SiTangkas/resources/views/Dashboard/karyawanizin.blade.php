<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan Izin | SiTangkas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('styles/karyawanizin.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                <span><img src="{{ asset('images/LogoName.png') }}" alt="LogoName"></span>
                <div class="admin-profile" style="color: white;">
                    <span style="margin-right: 10px;">ADMIN</span>
                    <img src="{{ asset('images/AdminProfile.png') }}" alt="Admin Picture" style="width: 40px; height: 40px; border-radius: 10%;">
                </div>
            </a>
    </nav>
    <div class="sidebar">
        <a href="{{ url('/dashboard') }}">
            <img src="{{ asset('images/DashboardIcon.png') }}" alt="Dashboard Icon" style="width: 20px; height: 20px; margin-right: 10px;">
            Dashboard
        </a>
        <a href="#">
            <img src="{{ asset('images/SetUpPayrollIcon.png') }}" alt="Payroll Icon" style="width: 20px; height: 20px; margin-right: 10px;">
            Set Up Payroll
        </a>
        <a href="#">
            <img src="{{ asset('images/EmployeesListIcon.png') }}" alt="Employees Icon" style="width: 20px; height: 20px; margin-right: 10px;">
            Employees List
        </a>
    </div>

    <div class="content">
        <div class="topbar">
            <h1 style="font-weight: normal;">ADMIN DASHBOARD</h1>
        </div>
        <div class="logout-container">
            <button class="btn-logout" onclick="window.location.href='/'">LOG OUT</button>
        </div>

        <div class="form-card">
            <h2>Karyawan Izin</h2>
            <hr class="form-divider"> 
            <form>
                <div class="mb-3">
                    <label for="employeeNumber" class="form-label">Employee Number</label>
                    <input type="text" class="form-control" id="employeeNumber" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="reason" class="form-label">Alasan</label>
                    <input type="text" class="form-control" id="reason" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" onclick="window.location.href='/dashboard'">Tambah</button>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='/dashboard'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <div style="display: flex; align-items: center;">
            <img src="{{ asset('images/User.png') }}" alt="Employees" style="width: 30px; height: 30px; margin-right: 5px;"> 
            <span>17 Employees</span>
        </div>
        <a href="#" style="text-decoration: none; color: #848e8d; font-size: 13px;">View here</a>
    </div>

    <div class="dashboard-image-wrapper">
        <img src="{{ asset('images/Dashboard.png') }}" alt="Footer Image" class="dashboard-image">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
