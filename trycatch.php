<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero");
    }
    return $a / $b;      //echo ထုတ်ရင် return မလို // function ထဲမှာ return လုပ်ရတယ်
    }
    try {
        echo divide(10, 0);
    } catch (Exception $e) {
        echo "Caught exception: ",  $e->getMessage() . "\n";
    
    }
?>