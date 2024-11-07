@extends('layouts.user')

@section('title', 'User Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">

    <div class="content">

        <div class="topbar">
            <h1 class="dashboard-title">USER DASHBOARD</h1>
        </div>

        <div class="logout-container">
            <button class="btn-logout" onclick="window.location.href='/'">LOG OUT</button>
        </div>

        <div class="dashboard-container">
            <div class="dashboard-cards">
                <div class="card card-late-gohomearly">
                    <h3>
                        <span class="title">Late</span>
                        <span class="today-label"> | Today</span>
                    </h3>
                    <div class="card-content">
                        <img src="{{ asset('images/Late.png') }}" alt="Late Icon" class="card-icon">
                        <p class="card-text">5 employees</p> 
                    </div>
                    <div class="card-link">
                        <a href="{{ url('/late') }}" class="more-link">more &#10141;</a>
                    </div>
                </div>
                <div class="card card-absent-permit">
                    <h3>
                        <span class="title">Absent</span>
                        <span class="today-label"> | Today</span>
                    </h3>
                    <div class="card-content">
                        <img src="{{ asset('images/AbsentandPermit.png') }}" alt="Permit Icon" class="card-icon">
                        <p class="card-text">2 employees</p> 
                    </div>
                    <div class="card-link">
                        <a href="{{ url('/absent') }}" class="more-link">more &#10141;</a>
                    </div>
                </div>
                <div class="card card-late-gohomearly">
                    <h3>
                        <span class="title">Go Home Early</span>
                        <span class="today-label"> | Today</span>
                    </h3>
                    <div class="card-content">
                        <img src="{{ asset('images/GoHomeEarly.png') }}" alt="Gohomearly Icon" class="card-icon">
                        <p class="card-text">1 employees</p> 
                    </div>
                    <div class="card-link">
                        <a href="{{ url('/gohomearly') }}" class="more-link">more &#10141;</a>
                    </div>
                </div>
                <div class="card card-absent-permit">
                    <h3>
                        <span class="title">Permit</span>
                        <span class="today-label"> | Today</span>
                    </h3>
                    <div class="card-content">
                        <img src="{{ asset('images/AbsentandPermit.png') }}" alt="Permit Icon" class="card-icon">
                        <p class="card-text">1 employees</p> 
                    </div>
                    <div class="card-link">
                        <a href="{{ url('/permit') }}" class="more-link">more &#10141;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-content">
                <img src="{{ asset('images/User.png') }}" alt="Employees" class="footer-icon"> 
                <span>17 Employees</span>
            </div>
            <a href="#" class="view-link">View here</a>
        </div>

    </div>
@endsection

</html>
