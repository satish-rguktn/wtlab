
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
