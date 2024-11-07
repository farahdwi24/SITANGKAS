<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Early Employees</title>
    <link rel="stylesheet" href="{{ asset('styles/late.css') }}">
</head>
<body>
    <button class="back-button" onclick="window.history.back();">&#8592;</button>
    <div class="container">
        <div class="header">Late Employees</div>
        <div class="date">Date : Thu, 4 Oct 2024</div>
        <div class="content">
            <h2>Delay Details</h2>
            <div class="table-container">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Entry Hours</th>
                        <th>Actual Hours</th>
                    </tr>
                </table>
                <hr class="form-divider">
                <table>
                    <tr>
                        <td>1.</td>
                        <td>Nurniati</td>
                        <td>06.30</td>
                        <td class="actual-hours">07.04.11</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Juniati</td>
                        <td>06.30</td>
                        <td class="actual-hours">06.45.30</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
