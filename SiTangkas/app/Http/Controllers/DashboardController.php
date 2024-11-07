<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Dashboard.dashboard');
    }

    public function setupPayroll()
    {
        return view('SetUpPayroll/setup-payroll'); 
    }

    public function employeesList()
    {
        return view('EmployeesList/employeesList'); 
    }

    public function indexUser()
    {
        return view('Dashboard.dashboarduser');
    }

    public function setupPayrollUser()
    {
        return view('SetUpPayroll/Usersetup-payroll'); 
    }

    public function employeesListUser()
    {
        return view('EmployeesList/UseremployeesList'); 
    }
}
