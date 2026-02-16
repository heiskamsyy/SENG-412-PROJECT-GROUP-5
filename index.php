<?php
// All courses that every member is registered for
$courses = [
    ['code' => 'COSC430', 'title' => 'Hands-on JAVA training'],
    ['code' => 'SENG402', 'title' => 'Software Quality Engineering and Testing'],
    ['code' => 'SENG404', 'title' => 'Human Computer Interaction and Emerging Technologies'],
    ['code' => 'GEDS002', 'title' => 'Citizenship Orientation'],
    ['code' => 'SENG204', 'title' => 'Software Security Engineering'],
    ['code' => 'SENG406', 'title' => 'Formal Methods Specifications in Software Engineering'],
    ['code' => 'SENG412', 'title' => 'Internet Technologies and Web Applications Development'],
    ['code' => 'COSC408', 'title' => 'Modeling and Simulations'],
    ['code' => 'SENG490', 'title' => 'Research Project'],
    ['code' => 'GEDS420', 'title' => 'Biblical Principles in Personal and Professional Life']
];

// Group Members with their matric numbers
$members = [
    [
        'name' => 'Chijioke Chimdiebube Kamsiyochukwu',
        'matric' => '22/0035'
    ],
    [
        'name' => 'Daniel Ntakidara Nsubong',
        'matric' => '22/0277'
    ],
    [
        'name' => 'Demben Goke Emmanuel',
        'matric' => '22/0103'
    ],
    [
        'name' => 'Dike Kanyitochi Ugonna',
        'matric' => '22/0002'
    ],
    [
        'name' => 'Domingo Iniabasi Patrick',
        'matric' => '22/0063'
    ],
    [
        'name' => 'Doobee Victor Lekia',
        'matric' => '22/0219'
    ],
    [
        'name' => 'Durowoju Ayomide Emmanuel',
        'matric' => '22/0301'
    ],
    [
        'name' => 'Duru Jesse Arinzechukwu',
        'matric' => '22/0218'
    ],
    [
        'name' => 'Ebere Zidane Kenechukwu',
        'matric' => '22/0010'
    ],
    [
        'name' => 'Edumoh Hannah Robinson',
        'matric' => '22/0070'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROUP 5 PROJECT - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="page-home">
    <div class="background-animation"></div>
    
    <div class="particles">
        <?php for($i = 0; $i < 20; $i++): ?>
            <div class="particle" style="left: <?= rand(0, 100) ?>%; animation-delay: <?= rand(0, 20) ?>s;"></div>
        <?php endfor; ?>
    </div>

    <header>
        <h1>Group 5 Project</h1>
        <p class="subtitle">SENG 412- Internet Technologies and Web Applications Development</p>
    </header>

    <nav>
        <a href="index.php" class="nav-link">🏠 Home</a>
        <a href="payroll.php" class="nav-link">💰 Payroll System</a>
        <a href="gpa.php" class="nav-link">📊 GPA Calculator</a>
        <a href="personal-details.php" class="nav-link">👤 Personal Details</a>
    </nav>

    <div class="container">
        <div class="section">
            <h2 class="section-title">Group Members & Registered Courses</h2>
            <div class="members-grid">
                <?php foreach($members as $member): ?>
                    <div class="member-card">
                        <div class="member-header">
                            <div class="info-row">
                                <span class="info-label">Matric Number:</span>
                                <span class="info-value"><?= $member['matric'] ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Name of Student:</span>
                                <span class="info-value member-name"><?= $member['name'] ?></span>
                            </div>
                        </div>
                        
                        <div class="courses-section">
                            <h3 class="courses-label">Courses Registered:</h3>
                            <div class="courses-list">
                                <?php foreach($courses as $course): ?>
                                    <div class="course-item">
                                        <span class="course-code"><?= $course['code'] ?></span>
                                        <span class="course-separator">-</span>
                                        <span class="course-title"><?= $course['title'] ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 SENG 412 GROUP 5 PROJECT | All Rights Reserved</p>
    </footer>
</body>
</html>
