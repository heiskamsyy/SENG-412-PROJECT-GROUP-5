<?php
// Employee Data Arrays - 60 Employees
$employee_ids = ['EMP001', 'EMP002', 'EMP003', 'EMP004', 'EMP005', 'EMP006', 'EMP007', 'EMP008', 'EMP009', 'EMP010',
                 'EMP011', 'EMP012', 'EMP013', 'EMP014', 'EMP015', 'EMP016', 'EMP017', 'EMP018', 'EMP019', 'EMP020',
                 'EMP021', 'EMP022', 'EMP023', 'EMP024', 'EMP025', 'EMP026', 'EMP027', 'EMP028', 'EMP029', 'EMP030',
                 'EMP031', 'EMP032', 'EMP033', 'EMP034', 'EMP035', 'EMP036', 'EMP037', 'EMP038', 'EMP039', 'EMP040',
                 'EMP041', 'EMP042', 'EMP043', 'EMP044', 'EMP045', 'EMP046', 'EMP047', 'EMP048', 'EMP049', 'EMP050',
                 'EMP051', 'EMP052', 'EMP053', 'EMP054', 'EMP055', 'EMP056', 'EMP057', 'EMP058', 'EMP059', 'EMP060'];

$employee_names = ['James Wilson', 'Maria Garcia', 'Robert Brown', 'Linda Martinez', 'David Johnson', 
                   'Jennifer Davis', 'Michael Rodriguez', 'Sarah Anderson', 'Christopher Taylor', 'Jessica Thomas',
                   'Daniel Harris', 'Patricia Moore', 'Matthew Jackson', 'Nancy White', 'Joshua Lee',
                   'Sandra Lewis', 'Andrew Walker', 'Ashley Hall', 'Kevin Allen', 'Donna Young',
                   'Brian King', 'Carol Wright', 'George Lopez', 'Michelle Hill', 'Edward Scott',
                   'Betty Green', 'Ronald Adams', 'Deborah Baker', 'Kenneth Nelson', 'Helen Carter',
                   'Steven Mitchell', 'Dorothy Roberts', 'Paul Turner', 'Sharon Phillips', 'Mark Campbell',
                   'Lisa Parker', 'Donald Evans', 'Karen Edwards', 'Gary Collins', 'Ruth Stewart',
                   'Timothy Morris', 'Susan Rogers', 'Jason Reed', 'Angela Cook', 'Jeffrey Morgan',
                   'Debra Bell', 'Ryan Murphy', 'Melissa Bailey', 'Jacob Rivera', 'Stephanie Cooper',
                   'Nicholas Richardson', 'Catherine Cox', 'Eric Howard', 'Rebecca Ward', 'Jonathan Torres',
                   'Laura Peterson', 'Stephen Gray', 'Cynthia Ramirez', 'Larry James', 'Marie Watson'];

$departments = ['IT', 'HR', 'Finance', 'IT', 'Marketing', 'Finance', 'Operations', 'HR', 'IT', 'Marketing',
                'Sales', 'IT', 'Finance', 'HR', 'Operations', 'Marketing', 'Sales', 'IT', 'Finance', 'HR',
                'IT', 'Marketing', 'Operations', 'Finance', 'Sales', 'HR', 'IT', 'Marketing', 'Finance', 'Operations',
                'IT', 'Sales', 'HR', 'Finance', 'Marketing', 'IT', 'Operations', 'Sales', 'HR', 'Finance',
                'IT', 'Marketing', 'Operations', 'Sales', 'Finance', 'HR', 'IT', 'Marketing', 'Operations', 'Sales',
                'Finance', 'IT', 'HR', 'Marketing', 'Operations', 'Sales', 'Finance', 'IT', 'HR', 'Marketing'];

$hours_worked = [160, 170, 155, 168, 162, 175, 158, 165, 172, 160,
                 165, 158, 172, 160, 168, 175, 162, 170, 155, 165,
                 160, 172, 168, 175, 158, 165, 170, 160, 162, 175,
                 168, 155, 165, 172, 160, 170, 175, 162, 158, 165,
                 172, 160, 168, 175, 165, 158, 170, 162, 175, 160,
                 165, 172, 168, 160, 175, 158, 165, 170, 162, 175];

$hourly_rates = [12500, 11000, 14000, 12000, 13000, 15000, 11500, 10500, 13500, 12500,
                 12000, 13000, 14000, 11000, 12500, 15000, 11500, 13500, 10500, 12000,
                 13000, 14000, 12500, 15000, 11000, 12000, 13500, 11500, 13000, 15000,
                 12500, 10500, 12000, 14000, 11000, 13500, 15000, 11500, 13000, 12500,
                 14000, 11000, 12500, 15000, 12000, 10500, 13500, 11500, 15000, 11000,
                 12000, 14000, 12500, 11500, 15000, 10500, 12000, 13500, 11000, 15000];

$deduction_percentages = [15, 12, 18, 15, 14, 20, 13, 12, 16, 15,
                          14, 16, 18, 12, 15, 20, 13, 17, 11, 14,
                          16, 18, 15, 20, 12, 14, 17, 13, 16, 20,
                          15, 11, 14, 18, 12, 17, 20, 13, 16, 15,
                          18, 12, 15, 20, 14, 11, 17, 13, 20, 12,
                          14, 18, 15, 13, 20, 11, 14, 17, 12, 20];

// Calculate Payroll
$payroll_data = [];
$total_gross = 0;
$total_net = 0;

for($i = 0; $i < count($employee_ids); $i++) {
    $gross_pay = $hours_worked[$i] * $hourly_rates[$i];
    $deduction = ($gross_pay * $deduction_percentages[$i]) / 100;
    $net_pay = $gross_pay - $deduction;
    
    $total_gross += $gross_pay;
    $total_net += $net_pay;
    
    $payroll_data[] = [
        'id' => $employee_ids[$i],
        'name' => $employee_names[$i],
        'department' => $departments[$i],
        'hours' => $hours_worked[$i],
        'rate' => $hourly_rates[$i],
        'gross' => $gross_pay,
        'deduction_percent' => $deduction_percentages[$i],
        'deduction' => $deduction,
        'net' => $net_pay
    ];
}

$unique_departments = array_unique($departments);
sort($unique_departments);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .search-filter-container {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .search-box {
            flex: 1;
            min-width: 300px;
        }

        .search-box input {
            width: 100%;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(244, 162, 97, 0.3);
            border-radius: 50px;
            color: var(--light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--gold);
            background: rgba(255, 255, 255, 0.1);
        }

        .search-box input::placeholder {
            color: rgba(238, 241, 245, 0.5);
        }

        .filter-buttons {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.8rem 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(244, 162, 97, 0.3);
            border-radius: 25px;
            color: var(--light);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--gold);
            border-color: var(--gold);
            color: var(--primary);
            transform: translateY(-2px);
        }

        .no-results {
            text-align: center;
            padding: 3rem;
            color: rgba(238, 241, 245, 0.6);
            font-size: 1.2rem;
        }
    </style>
</head>
<body class="page-payroll">
    <div class="background-animation"></div>
    
   
    <div class="particles">
        <?php for($i = 0; $i < 20; $i++): ?>
            <div class="particle" style="left: <?= rand(0, 100) ?>%; animation-delay: <?= rand(0, 20) ?>s;"></div>
        <?php endfor; ?>
    </div>

    <header>
        <h1>Payroll System</h1>
    </header>

    <nav>
        <a href="index.php" class="nav-link">← Back to Home</a>
        <a href="gpa.php" class="nav-link">GPA Calculator →</a>
    </nav>

  
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-label">Total Employees</div>
            <div class="stat-value" id="totalEmployees"><?= count($employee_ids) ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Total Gross Pay</div>
            <div class="stat-value" id="totalGross">₦<?= number_format($total_gross, 2) ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Total Net Pay</div>
            <div class="stat-value" id="totalNet">₦<?= number_format($total_net, 2) ?></div>
        </div>
    </div>

  
    <div class="table-container">
        <div class="table-header">
            <h2 class="table-title">Monthly Payroll Report</h2>
        </div>

        
        <div class="search-filter-container">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="🔍 Search by Employee ID or Name...">
            </div>
            <div class="filter-buttons">
                <button class="filter-btn active" data-department="all">All</button>
                <?php foreach($unique_departments as $dept): ?>
                    <button class="filter-btn" data-department="<?= $dept ?>"><?= $dept ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Hours Worked</th>
                        <th>Hourly Rate</th>
                        <th>Gross Pay</th>
                        <th>Deduction (%)</th>
                        <th>Deduction (₦)</th>
                        <th>Net Pay</th>
                    </tr>
                </thead>
                <tbody id="payrollTableBody">
                    <?php foreach($payroll_data as $employee): ?>
                    <tr data-department="<?= $employee['department'] ?>">
                        <td class="employee-id"><?= $employee['id'] ?></td>
                        <td class="employee-name"><?= $employee['name'] ?></td>
                        <td><span class="department"><?= $employee['department'] ?></span></td>
                        <td><?= $employee['hours'] ?> hrs</td>
                        <td class="currency">₦<?= number_format($employee['rate'], 2) ?></td>
                        <td class="currency">₦<?= number_format($employee['gross'], 2) ?></td>
                        <td><?= $employee['deduction_percent'] ?>%</td>
                        <td class="deduction">-₦<?= number_format($employee['deduction'], 2) ?></td>
                        <td class="currency"><strong>₦<?= number_format($employee['net'], 2) ?></strong></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot id="payrollFooter">
                    <tr>
                        <td colspan="5"><strong>TOTALS</strong></td>
                        <td class="currency"><strong>₦<?= number_format($total_gross, 2) ?></strong></td>
                        <td colspan="2"></td>
                        <td class="currency"><strong>₦<?= number_format($total_net, 2) ?></strong></td>
                    </tr>
                </tfoot>
            </table>
            <div id="noResults" class="no-results" style="display: none;">
                No employees found matching your search criteria.
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 GROUP 5 PROJECT | All Rights Reserved</p>
    </footer>

    <script>
        const searchInput = document.getElementById('searchInput');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const tableBody = document.getElementById('payrollTableBody');
        const tableFooter = document.getElementById('payrollFooter');
        const noResults = document.getElementById('noResults');
        const allRows = Array.from(tableBody.querySelectorAll('tr'));
        
        let currentDepartment = 'all';
        let currentSearch = '';

        // Search functionality
        searchInput.addEventListener('input', function() {
            currentSearch = this.value.toLowerCase();
            filterTable();
        });

        // to filter the department
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentDepartment = this.dataset.department;
                filterTable();
            });
        });

        function filterTable() {
            let visibleRows = [];
            let totalGross = 0;
            let totalNet = 0;

            allRows.forEach(row => {
                const employeeId = row.querySelector('.employee-id').textContent.toLowerCase();
                const employeeName = row.querySelector('.employee-name').textContent.toLowerCase();
                const department = row.dataset.department;

                const matchesSearch = employeeId.includes(currentSearch) || employeeName.includes(currentSearch);
                const matchesDepartment = currentDepartment === 'all' || department === currentDepartment;

                if (matchesSearch && matchesDepartment) {
                    row.style.display = '';
                    visibleRows.push(row);
                    
                    // Calculate totals for visible rows
                    const grossText = row.cells[5].textContent.replace(/[₦,]/g, '');
                    const netText = row.cells[8].textContent.replace(/[₦,]/g, '');
                    totalGross += parseFloat(grossText);
                    totalNet += parseFloat(netText);
                } else {
                    row.style.display = 'none';
                }
            });

            // Update totals
            document.getElementById('totalEmployees').textContent = visibleRows.length;
            document.getElementById('totalGross').textContent = '₦' + totalGross.toLocaleString('en-NG', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            document.getElementById('totalNet').textContent = '₦' + totalNet.toLocaleString('en-NG', {minimumFractionDigits: 2, maximumFractionDigits: 2});

            // Update footer totals
            tableFooter.querySelector('td:nth-child(2)').innerHTML = '<strong>₦' + totalGross.toLocaleString('en-NG', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + '</strong>';
            tableFooter.querySelector('td:nth-child(4)').innerHTML = '<strong>₦' + totalNet.toLocaleString('en-NG', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + '</strong>';

            // Show/hide no results messagein the page!!
            if (visibleRows.length === 0) {
                noResults.style.display = 'block';
                tableFooter.style.display = 'none';
            } else {
                noResults.style.display = 'none';
                tableFooter.style.display = '';
            }
        }
    </script>
</body>
</html>
