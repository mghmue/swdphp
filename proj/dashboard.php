<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();

}   
  //theme setup
  $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
  $bg = $theme == 'dark' ? '#222' : '#fff';
  $color = $theme == 'dark' ? '#fff' : '#222'

?>



<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $theme = $_POST['theme'];
    setcookie("theme", $theme, time() + (86400 * 30), "/");
    header("Location: dashboard.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>">
   Welcome to Dashboard, <?php echo $_SESSION['username']; ?>! |
    <a href="logout.php">Logout</a> |
    <a href="set_theme.php">Switch Theme</a> |
    
     <form action="#" method="post">
        <!-- <label for="theme">Switch Theme</label> -->
        <select name="theme" id="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
        </select>
        <input type="submit" value="Save Theme"> 
    </form> 
    <br><br>
    <!-- Logout -->
    <!-- Theme switch -->
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
     </table>

 
</body>
</html>
