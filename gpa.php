<?php
// Sample GPA Data of all group members for 1st Semester
$members_gpa = [
    [
        'rank' => 1,
        'name' => 'Edumoh Hannah Robinson',
        'matric' => '22/0070',
        'total_units' => 25.0,
        'weighted_points' => 122,
        'gpa' => 4.88,
        'classification' => 'First Class'
    ],
    [
        'rank' => 2,
        'name' => 'Daniel Ntakidara Nsubong',
        'matric' => '22/0277',
        'total_units' => 25.0,
        'weighted_points' => 116,
        'gpa' => 4.64,
        'classification' => 'First Class'
    ],
    [
        'rank' => 3,
        'name' => 'Chijioke Chimdiebube Kamsiyochukwu',
        'matric' => '22/0035',
        'total_units' => 25.0,
        'weighted_points' => 113,
        'gpa' => 4.52,
        'classification' => 'First Class'
    ],
    [
        'rank' => 4,
        'name' => 'Dike Kanyitochi Ugonna',
        'matric' => '22/0002',
        'total_units' => 25.0,
        'weighted_points' => 110,
        'gpa' => 4.40,
        'classification' => 'Second Class Upper'
    ],
    [
        'rank' => 5,
        'name' => 'Domingo Iniabasi Patrick',
        'matric' => '22/0063',
        'total_units' => 25.0,
        'weighted_points' => 107,
        'gpa' => 4.28,
        'classification' => 'Second Class Upper'
    ],
    [
        'rank' => 6,
        'name' => 'Doobee Victor Lekia',
        'matric' => '22/0219',
        'total_units' => 25.0,
        'weighted_points' => 104,
        'gpa' => 4.16,
        'classification' => 'Second Class Upper'
    ],
    [
        'rank' => 7,
        'name' => 'Demben Goke Emmanuel',
        'matric' => '22/0103',
        'total_units' => 25.0,
        'weighted_points' => 101,
        'gpa' => 4.04,
        'classification' => 'Second Class Upper'
    ],
    [
        'rank' => 8,
        'name' => 'Durowoju Ayomide Emmanuel',
        'matric' => '22/0301',
        'total_units' => 25.0,
        'weighted_points' => 97,
        'gpa' => 4.03,
        'classification' => 'Second Class Upper'
    ],
    [
        'rank' => 9,
        'name' => 'Ebere Zidane Kenechukwu',
        'matric' => '22/0010',
        'total_units' => 25.0,
        'weighted_points' => 94,
        'gpa' => 4.02,
        'classification' => 'Second Class Upper'
    ],
    [
        'rank' => 10,
        'name' => 'Duru Jesse Arinzechukwu',
        'matric' => '22/0218',
        'total_units' => 25.0,
        'weighted_points' => 91,
        'gpa' => 4.00,
        'classification' => 'Second Class Upper'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="page-gpa">
    <div class="background-animation"></div>
    
    
    <div class="particles">
        <?php for($i = 0; $i < 20; $i++): ?>
            <div class="particle" style="left: <?= rand(0, 100) ?>%; animation-delay: <?= rand(0, 20) ?>s;"></div>
        <?php endfor; ?>
    </div>

    <header>
        <h1>GPA Calculator</h1>
        <p class="subtitle">Academic Performance - 1st Semester</p>
    </header>

    <nav>
        <a href="index.php" class="nav-link">← Back to Home</a>
        <a href="payroll.php" class="nav-link">← Payroll System</a>
        <a href="personal-details.php" class="nav-link">Personal Details →</a>
    </nav>

    <div class="container">
        <div class="section">
            <h2 class="section-title">GPA Summary (Ranked)</h2>
            
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>RANK</th>
                            <th>MATRIC NO.</th>
                            <th>STUDENT NAME</th>
                            <th>TOTAL UNITS</th>
                            <th>WEIGHTED POINTS</th>
                            <th>GPA</th>
                            <th>CLASSIFICATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($members_gpa as $member): ?>
                        <tr>
                            <td><strong><?= $member['rank'] ?></strong></td>
                            <td><?= $member['matric'] ?></td>
                            <td class="employee-name"><?= $member['name'] ?></td>
                            <td><?= number_format($member['total_units'], 1) ?></td>
                            <td><?= $member['weighted_points'] ?></td>
                            <td><strong><?= number_format($member['gpa'], 2) ?></strong></td>
                            <td>
                                <span class="department" style="background: <?= $member['classification'] == 'First Class' ? 'rgba(16, 185, 129, 0.3)' : 'rgba(6, 182, 212, 0.3)' ?>;">
                                    <?= $member['classification'] ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 SENG 412 GROUP 5 PROJECT | All Rights Reserved</p>
    </footer>
</body>
</html>