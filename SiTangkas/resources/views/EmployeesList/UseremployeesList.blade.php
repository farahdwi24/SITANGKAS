@extends('layouts.user')

@section('title', 'Employees List')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/employeesList.css') }}"> 
    <div class="table-container">
        <div class="header">
            <h1>Employees Details</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>EMP.NO</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>Education</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>59</td>
                    <td>Nurniati</td>
                    <td>Female</td>
                    <td>SMA</td>
                    <td>
                        <i class="fa-solid fa-eye" onclick="showDetails('Nurniati','Perempuan', '011/UN4/...', 'SMA', '04313577...')"></i>
                    </td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>Nurniati</td>
                    <td>Female</td>
                    <td>SMA</td>
                    <td>
                        <i class="fa-solid fa-eye" onclick="showDetails('Nurniati','Perempuan', '011/UN4/...', 'SMA', '04313577...')"></i>
                    </td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>Nurniati</td>
                    <td>Female</td>
                    <td>SMA</td>
                    <td>
                        <i class="fa-solid fa-eye" onclick="showDetails('Nurniati','Perempuan', '011/UN4/...', 'SMA', '04313577...')"></i>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div id="employee-details" class="overlay-details" style="display: none;">
            <div class="details-content">
                <h2>Employee Details</h2>
                <div class="profile-pic">
                    <i class="fa-solid fa-user-circle fa-5x"></i>
                    <h3 id="employee-name"></h3>
                </div>
                <div class="info-box">
                    <p>Gender: <span id="gender"></span></p>
                    <p>Contract Number: <span id="contract-number"></span></p>
                    <p>Latest Education: <span id="education"></span></p>
                    <p>Account Number: <span id="account-number"></span></p>
                </div>
                <button class="close-btn" onclick="hideDetails()">Close</button>
            </div>
        </div>
    </div>

    <script>
        function showDetails(name, gender, contract, education, account) {
            document.getElementById('employee-name').textContent = name;
            document.getElementById('gender').textContent = gender;
            document.getElementById('contract-number').textContent = contract;
            document.getElementById('education').textContent = education;
            document.getElementById('account-number').textContent = account;
            document.getElementById('employee-details').style.display = 'flex';
        }
        function hideDetails() {
            document.getElementById('employee-details').style.display = 'none';
        }
    </script>
@endsection