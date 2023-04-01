<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="./assets/style.css">
    <title>CDN - Antasia</title>
    <link rel="icon" href="./assets/logo.png" type="image/png">
<body>
<div class="container">
    <div class="case">
        <h1><a href="#" style='text-decoration: none; color: inherit;'>CDN Antasia</a></h1>
        <?php
        $dir = "hosted_file";
        $files = scandir($dir);

        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $icon = is_file("$dir/$file") ? "📰" : "📁";
                echo "<p>$icon <a href='$file_path/$dir/$file' style='color: aqua;'>$file</a></p>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
