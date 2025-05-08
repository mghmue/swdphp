<?php
$number = 6;

    
if ($number % 2 !== 0){

    echo  "$number is even";

}else{ 

    echo "$number is odd";

}
?>


//witch 
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
