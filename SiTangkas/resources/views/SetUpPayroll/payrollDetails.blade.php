<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Details</title>
    <link rel="stylesheet" href="styles/payrollDetails.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Kontrak</th>
                    <th>Nama</th>
                    <th>Nomor Rekening</th>
                    <th>Pendidikan</th>
                    <th>Upah</th>
                    <th>Jumlah Potongan</th>
                    <th>Upah Mengganti</th>
                    <th>Jumlah Diterima</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>011/UN4. 11/HK.07.00/2024</td>
                    <td>Nurniati</td>
                    <td>0412345678</td>
                    <td>SMA</td>
                    <td>2.000.000</td>
                    <td>0</td>
                    <td>0</td>
                    <td>2.000.000</td>
                </tr>
            </tbody>
        </table>

    <button class="print-btn" onclick="window.print()">
        <i class="bi bi-printer-fill"></i>
        Print</button>
    <button class="back-btn" onclick="backToSetup()">Back</button>


</body>
</html>


