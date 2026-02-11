<?php
echo "<h2>Basic String Functions</h2>";

$str = "Hello World from PHP";

echo "String length: " . strlen($str) . "<br>";
echo "Word count: " . str_word_count($str) . "<br>";
echo "Reverse string: " . strrev($str) . "<br>";

echo "<h2>Case Conversion</h2>";

echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Ucfirst: " . ucfirst(strtolower($str)) . "<br>";
echo "Ucwords: " . ucwords(strtolower($str)) . "<br>";

echo "<h2>Search & Replace</h2>";

echo "Position of 'World': " . strpos($str, "World") . "<br>";
echo "Replace PHP with Programming: " . str_replace("PHP", "Programming", $str) . "<br>";

echo "<h2>Substring & Trimming</h2>";

$spaceStr = "   Hello PHP   ";

echo "Substring: " . substr($str, 6, 5) . "<br>";
echo "Trim: '" . trim($spaceStr) . "'<br>";
echo "Ltrim: '" . ltrim($spaceStr) . "'<br>";
echo "Rtrim: '" . rtrim($spaceStr) . "'<br>";

echo "<h2>String Comparison</h2>";

echo "strcmp: " . strcmp("Hello", "hello") . "<br>";
echo "strcasecmp: " . strcasecmp("Hello", "hello") . "<br>";

echo "<h2>Special Characters & Security</h2>";

$html = "<b>Hello</b>";
echo "HTML Special Chars: " . htmlspecialchars($html) . "<br>";
echo "Add Slashes: " . addslashes("It's PHP") . "<br>";
?>
