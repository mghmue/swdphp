
<?php
  echo "Hello World";
  echo "<br>";
  $name = "John";
  echo "Hello $name";
  // variable types
  // string, integer, float, boolean, array
  $age = 20;
  echo "<br>";
  echo "Hello $name, you are $age years old";
  $height = 1.75;
  echo "<br>";
  echo "Hello $name, you are $age years old and $height meters tall";
  $is_married = false;
  echo "<br>";
  echo "Hello $name, you are $age years old and $height meters tall and $is_married";
  $hobbies = array("Coding", "Sleeping", "Eating");
  echo "<br>";
  echo "Hello $name, you are $age years old and $height meters tall and $is_married and your hobbies are $hobbies[0], $hobbies[1], and $hobbies[2]";
  // control flow
  // if, else, elseif, switch
  if($age < 18) {
    echo "<br>";
    echo "You are not allowed to vote";
  } else {
    echo "<br>";
    echo "You are allowed to vote";
  }
  // loops
  // while, do while, for
  while($age < 18) {
    echo "<br>";
    echo "You are not allowed to vote";
    $age++;
  }
  for($i = 0; $i < 5; $i++) {
    echo "<br>";
    echo "Hello $name";
  }
  // functions
  // function name($parameter) {
  //   // code
  // }
  function sayHello($name) {
    echo "<br>";
    echo "Hello $name";;
  }
  sayHello("John");

  // php statements
  // variable and types
  // control flow
  // loops
  // functions

 // swap two numbers without using temp variable
  $a = 10;
  $b = 20;
  $temp = $a; // temp = 10
  $a = $b;  // a = 20
  $b = $temp; //b = 10
  echo "<br>";
  echo $a;
  echo "<br>";
  echo $b;
 
//Check data types using var_dump()
  var_dump($name); // value and type
  var_dump($age);
  var_dump($geight);
  var_dump($is_married);
  var_dump($hobbies);


?>



