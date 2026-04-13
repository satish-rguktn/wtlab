<?php
$name = "Satish";
echo "String value: $name<br>";

$age = 19;
echo "Integer value: $age<br>";

$height = 5.9;
echo "Float value: $height<br>";

$isStudent = true;
echo "Boolean value: ";
var_dump($isStudent);
echo "<br>";

$colors = array("Red", "Green", "Blue");
echo "Array values:<br>";
print_r($colors);
print_r($colors[1])
?>
<?php
echo "<h2>Task A3: Variable Scope</h2>";

function localScope() {
    $localVar = 10;
    echo "<b>Local Scope:</b> Local variable value = $localVar <br>";
}

localScope();

$globalVar = 20;

function globalScope() {
    global $globalVar;
    echo "<b>Global Scope:</b> Global variable value = $globalVar <br>";
}

globalScope();

function staticScope() {
    static $count = 0;
    $count++;
    echo "<b>Static Scope:</b> Count value = $count <br>";
}

staticScope();
staticScope();
staticScope();
?>
