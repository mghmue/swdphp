<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>   
        <div>
            <label for="Age">Age:</label>
            <input type="number" id="Age" name="Age">
        </div>
        <div>
            <button> Submit</button>
        </div>

        <?php
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
                echo "Name: $name";
                echo "<br>";
            }
        ?>


        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $age = $_POST["Age"];
                echo "Name: $name<br>";
                echo "Age: $age<br>";
            } else {
                echo "No data submitted.";
            }
        ?>


    
    </form>
</body>
  
</html>