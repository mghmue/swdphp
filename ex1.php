<?php
$number = 6;

    
if ($number % 2 !== 0){

    echo  "$number is even";

}else{ 

    echo "$number is odd";

}
?>


<!-- //switch statement -->
<?php
$num1 = 10;
$num2 = 5;
$action = "+"; // Change this to "-", "*", or "/"

switch ($action) {
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
     echo $num1/$num2;
     break;
     default:
        echo "error cord";
}
?>

   <!-- //Write a function that calculates the factorial of a number.// -->
<?php
    function factorial($num1) {
        $result = 1;
        for ($num2 = 1; $num2 <= $num1; $num2++) {
            $result *= $num2;
        }
        return $result;
    }
    echo "<br>";
    echo factorial(4); 
?>

<!-- functiuon type in php --> 
<?php
//data type တွေသက်မှတ်လို့ရတယ် // ဘာData type နဲ့ရလာမှာလဲ // default value ထည့်လို့ရတယ်//
function greeting($name = "Guest") {
    return "Hello,$name";
}
$result = greeting();
echo "<br>";
echo $result;
?>


<!-- Arry -->
<!-- Indexed Arry -->
<!-- Associative Array -->
<!-- Multidimensional Array -->
<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[0];

//foreach loop
foreach ($fruits as $fruit) {
    echo "<br>";
    echo $fruit;
}

// Associative Array
$person = array(
"name" => "John", 
"age" => 30,
"city" => "New York");
echo $person["name"];

//foreach loop
foreach ($person as $key => $value) {
    echo "<br>";
    echo $key.":".$value;
}




//Ex
$mark = array(
         "kyaw" => 80,
         "aung" => 40,
         "Hla" => 70,
);

foreach ($mark as $key => $value){
    if ($value >= 50) {
     echo "<br>";
     echo $key . " passed";
    } else {
     echo "<br>";
     echo $key . " failed";
    }
}

//Multidimensional Array
    $user = array(
        array("name" => "Aung", "age" => 30, "city" => "Yangon"),
        array("name" => "Kyaw", "age" => 40, "city" => "Mandalay"),
        array("name" => "Hla", "age" => 50, "city" => "Mandalay"),
    );









?>

<!-- defult valeue -->
<!-- type restriction -->
<!-- scope (local, global) -->

<!-- -->




   <!-- Project Start -->
    <!-- PO - Product Owner -->
    <!-- BA - Business Analyst -->
    <!-- PM - Project Manager -->
    <!-- QA - Quality Assurance -->
    <!-- FE - Front End Developer -->
    <!-- BE - Back End Developer -->
