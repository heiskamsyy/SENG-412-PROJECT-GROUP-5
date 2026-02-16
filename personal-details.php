<?php
// Personal Details for Our Group Members 
$members_details = [
    [
        'name' => 'Chijioke Chimdiebube Kamsiyochukwu',
        'blood_group' => 'O+',
        'state' => 'Abia',
        'phone' => '+2347040245637',
        'hobbies' => ['Football', 'Music', 'Gaming'],
        'avatar_color' => 'linear-gradient(135deg, #667eea, #764ba2)'
    ],
    [
        'name' => 'Daniel Ntakidara Nsubong',
        'blood_group' => 'O+',
        'state' => 'Akwa Ibom',
        'phone' => '09158464780',
        'hobbies' => ['Sleeping', 'Badminton', 'Gaming'],
        'avatar_color' => 'linear-gradient(135deg, #f093fb, #f5576c)'
    ],
    [
        'name' => 'Demben Goke Emmanuel',
        'blood_group' => 'A+',
        'state' => 'Cross River',
        'phone' => '07062040624',
        'hobbies' => [ 'Listening to music', 'Chess'],
        'avatar_color' => 'linear-gradient(135deg, #4facfe, #00f2fe)'
    ],
    [
        'name' => 'Dike Kanyitochi Ugonna',
        'blood_group' => 'O+',
        'state' => 'Imo',
        'phone' => '09150778418',
        'hobbies' => ['None'],
        'avatar_color' => 'linear-gradient(135deg, #fa709a, #fee140)'
    ],
    [
        'name' => 'Domingo Iniabasi Patrick',
        'blood_group' => 'O+',
        'state' => 'Akwa Ibom',
        'phone' => '09019008535',
        'hobbies' => [ 'Watching Movies', 'Playing Football'],
        'avatar_color' => 'linear-gradient(135deg, #667eea, #764ba2)'
    ],
    [
        'name' => 'Doobee Victor Lekia',
        'blood_group' => 'O+',
        'state' => 'Rivers',
        'phone' => '09156059171',
        'hobbies' => ['Playing video games', 'Table Tennis'],
        'avatar_color' => 'linear-gradient(135deg, #f093fb, #f5576c)'
    ],
    [
        'name' => 'Durowoju Ayomide Emmanuel',
        'blood_group' => 'O+',
        'state' => 'Lagos',
        'phone' => '08129264637',
        'hobbies' => ['Video Games', 'Listening to music'],
        'avatar_color' => 'linear-gradient(135deg, #4facfe, #00f2fe)'
    ],
    [
        'name' => 'Duru Jesse Arinzechukwu',
        'blood_group' => 'A',
        'state' => 'Imo',
        'phone' => ' 08113322678',
        'hobbies' => ['Drawing', 'Painting', 'Photography'],
        'avatar_color' => 'linear-gradient(135deg, #fa709a, #fee140)'
    ],
    [
        'name' => 'Ebere Zidane Kenechukwu',
        'blood_group' => 'O+',
        'state' => 'Imo',
        'phone' => '08067429279',
        'hobbies' => ['Playing Games', 'Watching Films', 'Listening to Music'],
        'avatar_color' => 'linear-gradient(135deg, #667eea, #764ba2)'
    ],
    [
        'name' => 'Edumoh Hannah Robinson',
        'blood_group' => 'O-',
        'state' => 'Akwa Ibom',
        'phone' => '09154622284',
        'hobbies' => ['listening to music', 'reading'],
        'avatar_color' => 'linear-gradient(135deg, #f093fb, #f5576c)'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="page-personal">
    <div class="mesh-background"></div>
    <div class="scanline"></div>

    <header>
        <h1>Personal Details</h1>
        <p class="tagline">Complete Member Profiles</p>
    </header>

    <nav>
        <a href="index.php" class="nav-link">← Home</a>
        <a href="payroll.php" class="nav-link">Payroll</a>
        <a href="gpa.php" class="nav-link">← GPA Calculator</a>
    </nav>

    <div class="container">
        <div class="profiles-grid">
            <?php foreach($members_details as $member): ?>
                <div class="profile-card">
                    <div class="card-header">
                        <div class="avatar" style="background: <?= $member['avatar_color'] ?>;">
                            <?= substr($member['name'], 0, 1) ?>
                        </div>
                        <h2 class="profile-name"><?= $member['name'] ?></h2>
                    </div>

                    <div class="card-body">
                       
                        <div class="info-section">
                            <h3 class="section-title">📋 Student Information</h3>
                            <div class="info-grid">
                                <div class="info-item">
                                    <span class="info-label">Blood Group:</span>
                                    <span class="info-value"><?= $member['blood_group'] ?></span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">State of Origin:</span>
                                    <span class="info-value"><?= $member['state'] ?></span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Phone Number:</span>
                                    <span class="info-value"><?= $member['phone'] ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- list of hobbies -->
                        <div class="info-section">
                            <h3 class="section-title">🎨 List of Hobbies</h3>
                            <div class="tags-container">
                                <?php foreach($member['hobbies'] as $hobby): ?>
                                    <span class="tag"><?= $hobby ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 GROUP 5 PROJECT | All Rights Reserved</p>
    </footer>
</body>
</html>