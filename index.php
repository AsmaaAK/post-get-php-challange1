<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Project</title>
    <!-- Include Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans max-w-4xl mx-auto p-5">
    <div class="server-time mb-5 p-3 bg-gray-100 rounded">
        <?php
        // Display current server time
        date_default_timezone_set('UTC');
        echo "Current server time: " . date('Y-m-d H:i:s');
        ?>
    </div>
</body>
</html>