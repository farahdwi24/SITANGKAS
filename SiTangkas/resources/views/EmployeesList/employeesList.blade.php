@extends('layouts.admin')

@section('title', 'Employees List')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/employeesList.css') }}"> 
    <div class="table-container">
        <div class="header">
            <h1>Employees Details</h1>
            <button class="insert-btn" onclick="showInsertForm()">Insert Data</button>
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
                        <i class="bi bi-pencil-square" onclick="showEditForm('59', 'Nurniati', 'Female', '011/UN4/...', 'SMA', '04313577...','10000')"></i>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>Nurniati</td>
                    <td>Female</td>
                    <td>SMA</td>
                    <td>
                        <i class="fa-solid fa-eye" onclick="showDetails('Nurniati','Perempuan', '011/UN4/...', 'SMA', '04313577...')"></i>
                        <i class="bi bi-pencil-square" onclick="showEditForm('59', 'Nurniati', 'Female', '011/UN4/...', 'SMA', '04313577...','10000')"></i>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>Nurniati</td>
                    <td>Female</td>
                    <td>SMA</td>
                    <td>
                        <i class="fa-solid fa-eye" onclick="showDetails('Nurniati','Perempuan', '011/UN4/...', 'SMA', '04313577...')"></i>
                        <i class="bi bi-pencil-square" onclick="showEditForm('59', 'Nurniati', 'Female', '011/UN4/...', 'SMA', '04313577...','10000')"></i>
                        <i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div id="insert-form" style="display:none;">
            @include('EmployeesList.InsertEmployees')
        </div>
    
        <div id="edit-form" style="display:none;">
            @include('EmployeesList.EditEmployeesList')
        </div>
    
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
        function showInsertForm() {
            document.getElementById('insert-form').style.display = 'flex';
            document.getElementById('edit-form').style.display = 'none';
            resetInsertForm();
        }
    
        function hideForm() {
            document.getElementById('insert-form').style.display = 'none';
            document.getElementById('edit-form').style.display = 'none';
        }
    
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
    
        function showEditForm(empNo, name, gender, contractNumber, education, accountNumber, salary) {
            document.querySelector('input[name="emp_no1"]').value = empNo;
            document.querySelector('input[name="name1"]').value = name;
            document.querySelector('input[name="gender1"]').value = gender;
            document.querySelector('input[name="contract_number1"]').value = contractNumber;
            document.querySelector('input[name="education1"]').value = education;
            document.querySelector('input[name="account_number1"]').value = accountNumber;
            document.querySelector('input[name="salary1"]').value = salary;


            document.getElementById('edit-form').style.display = 'flex';
            document.getElementById('insert-form').style.display = 'none';
        }
    </script>
@endsection