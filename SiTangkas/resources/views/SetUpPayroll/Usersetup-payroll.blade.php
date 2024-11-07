@extends('layouts.user')

@section('title', 'User Set Up Payroll')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('styles/payrollDetails.css') }}"> 

<div class="content">

    <div class="topbar">
        <h1 class="dashboard-title">Set Up Payroll</h1>
    </div>

    <div id="dashboard-container" class="dashboard-container">
        <div class="dashboard-cards">
            <div class="card card-late-gohomearly" onclick="showContent('payrollDetails')">
                <h3>
                    <span class="title">Payroll</span>
                    <span class="today-label"> | Details</span>
                </h3>
                <div class="card-content">
                    <img src="{{ asset('images/Late.png') }}" alt="Late Icon" class="card-icon">
                </div>
                <div class="card-link">
                    <a href="javascript:void(0);" class="more-link">more &#10141;</a>
                </div>
            </div>
            <div class="card card-absent-permit" onclick="showContent('payrollAbsent')">
                <h3>
                    <span class="title">Payroll</span>
                    <span class="today-label"> | Absent</span>
                </h3>
                <div class="card-content">
                    <img src="{{ asset('images/AbsentandPermit.png') }}" alt="Permit Icon" class="card-icon">
                </div>
                <div class="card-link">
                    <a href="javascript:void(0);" class="more-link">more &#10141;</a>
                </div>
            </div>
        </div>
    </div>

    <div id="payrollDetailsContent" style="display:none;">
        @include('SetUpPayroll.payrollDetails')
    </div>

    <div id="payrollAbsentContent" style="display:none;">
        @include('SetUpPayroll.payrollAbsent')
    </div>

    <div class="footer">
        <div class="footer-content">
            <img src="{{ asset('images/User.png') }}" alt="Employees" class="footer-icon"> 
        </div>
        <a href="#" class="view-link">View here</a>
    </div>

</div>

<script>
    function showContent(section) {
        document.getElementById('payrollDetailsContent').style.display = 'none';
        document.getElementById('payrollAbsentContent').style.display = 'none';

        if (section === 'payrollDetails') {
            document.getElementById('payrollDetailsContent').style.display = 'block';
            document.getElementById('dashboard-container').style.display = 'none';
        } else if (section === 'payrollAbsent') {
            document.getElementById('payrollAbsentContent').style.display = 'block';
            document.getElementById('dashboard-container').style.display = 'none';
        }
    }

    function backToSetup() {
        document.getElementById('payrollDetailsContent').style.display = 'none';
        document.getElementById('payrollAbsentContent').style.display = 'none';
        document.getElementById('dashboard-container').style.display = 'flex';
    }
</script>
@endsection

</html>

