@extends('layouts.admin')

@section('title', 'Set Up Payroll')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/setuppayroll.css') }}"> 
<link rel="stylesheet" href="{{ asset('styles/payrollDetails.css') }}"> 
    <div class="main-content" id="setupPayrollContent">
        <div class="date-picker">
            <div class="date-display">
                <span class="month"></span>
                <div class="divider"></div>
                <span class="year"></span>
            </div>
            <div class="search-button" onclick="toggleDropdown()">
                <i class="bi bi-search"></i>
            </div>
        </div>
        <div id="dropdownMenu" class="dropdown-menu">
            <ul>
                <li><a href="javascript:void(0);" onclick="showContent('payrollDetails')">Payroll Details</a></li>
                <li><a href="javascript:void(0);" onclick="showContent('payrollAbsent')">Payroll Absent</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Set Up Payroll</h1>
            <p>UPLOAD DOCUMENT CSV FROM COMPUTER</p>
            <button class="upload-btn">Upload CSV
                <i class="bi bi-file-earmark-arrow-up"></i>
            </button>
        </div>
    </div>

    <div id="payrollDetails" style="display:none;">
        @include('SetUpPayroll.payrollDetails')
    </div>

    <div id="payrollAbsent" style="display:none;">
        @include('SetUpPayroll.payrollAbsent')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            const now = new Date();
            const month = monthNames[now.getMonth()];
            const year = now.getFullYear();

            document.querySelector('.month').textContent = month;
            document.querySelector('.year').textContent = year;
        });

        function backToSetup() {
            document.getElementById('setupPayrollContent').style.display = 'block';
            document.getElementById('payrollDetails').style.display = 'none';
            document.getElementById('payrollAbsent').style.display = 'none';
        }
        document.querySelector('.upload-btn').addEventListener('click', function() {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = '.csv';
            
            input.onchange = e => {
                const file = e.target.files[0];
                if (file) {
                    alert(`File selected: ${file.name}`);
                }
            };
            
            input.click();
        });

        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        function showContent(section) {
            document.getElementById('payrollDetails').style.display = 'none';
            document.getElementById('payrollAbsent').style.display = 'none';
            document.getElementById('setupPayrollContent').style.display = 'none';

            if (section === 'payrollDetails') {
                document.getElementById('payrollDetails').style.display = 'block';
            } else if (section === 'payrollAbsent') {
                document.getElementById('payrollAbsent').style.display = 'block';
            }
        }
    </script>
@endsection
