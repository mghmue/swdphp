<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Welcome, dashboard</p>
   <!-- Logout -->
    <!-- Theme switch -->

         <?php
        $students = [
            ["name" => "Aung", "grade" => 85],
            ["name" => "Kyaw", "grade" => 67],
            ["name" => "Maw", "grade" => 45],
            ["name" => "Hla", "grade" => 90],
            ["name" => "Mya", "grade" => 78],
        ];    
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($students as $student):?>
            <tr>
                <td><?= $student["name"]?></td>
                <td><?= $student["grade"]?></td>
            </tr>
        <?php endforeach; ?>
</body>
</html>