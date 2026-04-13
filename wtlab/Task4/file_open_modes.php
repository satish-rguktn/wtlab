<?php
$message = "";
$content = "";
$fileName = "demo.txt";

if(isset($_POST['mode'])) {

    $mode = $_POST['mode'];

    switch($mode) {

        case "r":
            if(file_exists($fileName)) {
                $file = fopen($fileName, "r");
                $content = fread($file, filesize($fileName));
                fclose($file);
                $message = "Opened in READ (r) mode.";
            } else {
                $message = "File does not exist for r mode!";
            }
            break;

        case "w":
            $file = fopen($fileName, "w");
            fwrite($file, "This content is written using w mode.\n");
            fclose($file);
            $message = "Opened in WRITE (w) mode. Old data erased.";
            break;

        case "a":
            $file = fopen($fileName, "a");
            fwrite($file, "Appended using a mode.\n");
            fclose($file);
            $message = "Opened in APPEND (a) mode.";
            break;

        case "x":
            if(!file_exists("newfile.txt")) {
                $file = fopen("newfile.txt", "x");
                fwrite($file, "Created using x mode.");
                fclose($file);
                $message = "New file created using x mode.";
            } else {
                $message = "x mode failed! File already exists.";
            }
            break;

        case "r+":
            if(file_exists($fileName)) {
                $file = fopen($fileName, "r+");
                fwrite($file, "Modified using r+ mode.\n");
                rewind($file);
                $content = fread($file, filesize($fileName));
                fclose($file);
                $message = "Opened in r+ (Read & Write) mode.";
            } else {
                $message = "File does not exist for r+ mode!";
            }
            break;

        case "w+":
            $file = fopen($fileName, "w+");
            fwrite($file, "Fresh content using w+ mode.\n");
            rewind($file);
            $content = fread($file, filesize($fileName));
            fclose($file);
            $message = "Opened in w+ mode. Old data erased.";
            break;

        case "a+":
            $file = fopen($fileName, "a+");
            fwrite($file, "Added using a+ mode.\n");
            rewind($file);
            $content = fread($file, filesize($fileName));
            fclose($file);
            $message = "Opened in a+ mode (Read & Append).";
            break;

        case "x+":
            if(!file_exists("unique.txt")) {
                $file = fopen("unique.txt", "x+");
                fwrite($file, "Created using x+ mode.\n");
                rewind($file);
                $content = fread($file, filesize("unique.txt"));
                fclose($file);
                $message = "New file created using x+ mode.";
            } else {
                $message = "x+ mode failed! File already exists.";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP File Modes Demo</title>
</head>
<body>

<h2>PHP fopen() File Modes Demonstration</h2>

<form method="post">
    <select name="mode" required>
        <option value="">Select Mode</option>
        <option value="r">r - Read Only</option>
        <option value="w">w - Write Only</option>
        <option value="a">a - Append Only</option>
        <option value="x">x - Create New File</option>
        <option value="r+">r+ - Read & Write</option>
        <option value="w+">w+ - Read & Write (Erase)</option>
        <option value="a+">a+ - Read & Append</option>
        <option value="x+">x+ - Create New File (Read & Write)</option>
    </select>
    <button type="submit">Execute</button>
</form>

<h3>Message:</h3>
<p><?php echo $message; ?></p>

<h3>File Content:</h3>
<pre><?php echo $content; ?></pre>

</body>
</html>
