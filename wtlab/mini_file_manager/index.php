<?php
$message = "";
$uploadDir = "uploads/";


if(!is_dir($uploadDir)) {
    mkdir($uploadDir);
}


if(isset($_POST['upload'])) {

    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        $message = "File uploaded successfully!";
    } else {
        $message = "File upload failed!";
    }
}


if(isset($_GET['delete'])) {

    $fileName = basename($_GET['delete']);
    $filePath = $uploadDir . $fileName;

    if(file_exists($filePath)) {
        unlink($filePath);
        $message = "File deleted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload System</title>
</head>
<body>

<h2>File Upload and Download System</h2>

<form method="post" enctype="multipart/form-data">
    Select file:
    <input type="file" name="file" required>
    <input type="submit" name="upload" value="Upload">
</form>

<p style="color:green;">
<?php echo $message; ?>
</p>

<h3>Uploaded Files</h3>

<?php
$files = scandir($uploadDir);

foreach($files as $file) {
    if($file != "." && $file != "..") {
        echo $file . " - ";
        echo "<a href='download.php?file=$file'>Download</a> | ";
        echo "<a href='?delete=$file' 
              onclick=\"return confirm('Are you sure you want to delete this file?')\">
              Delete</a><br>";
    }
}
?>

</body>
</html>
