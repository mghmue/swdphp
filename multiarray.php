<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = [
            ["name" => "Alice", "age" => 30, "grade" => 85],
            ["name" => "Bob", "age" => 40, "grade" => 67],
            ["name" => "Charlie", "age" => 50, "grade" => 45],
            ["name" => "David", "age" => 60, "grade" => 90],
            ["name" => "Eve", "age" => 70, "grade" => 78],
        ];    
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($students as $student):?>
            <tr>
                <td><?= $student['name']?></td>
                <td><?= $student['age']?></td>
                <td><?= $student['grade']?></td>
            </tr>
        <?php endforeach; ?>
    </table>








</body>
</html>