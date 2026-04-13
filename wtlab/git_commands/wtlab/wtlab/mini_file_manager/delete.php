<?php

if(isset($_GET['file'])) {
    $fileName = basename($_GET['file']); 
    $filePath = "uploads/" . $fileName;
    if(file_exists($filePath) && is_file($filePath)) {
       unlink($filePath);
    }
}
header("Location: index.php");
exit();
?>
