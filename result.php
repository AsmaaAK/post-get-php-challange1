<?php
session_start();

// Check if we have form data
if (!isset($_SESSION['form_data'])) {
    // Redirect back to form if no data exists
    header('Location: index.php', true, 303);
    exit;
}

// Get data from session
$name = $_SESSION['form_data']['name'];
$color = $_SESSION['form_data']['color'];

// Clear the session data
unset($_SESSION['form_data']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <!-- Greeting Section -->
            <div class="greeting mb-6 text-center">
                <h1 class="text-3xl font-bold text-gray-800">Hello, <?php echo htmlspecialchars($name); ?>!</h1>
            </div>
            
            <!-- Color Display Section -->
            <div class="color-display p-6 border border-gray-200 rounded-lg mb-6 text-center transition-all duration-300" 
                 style="color: <?php echo htmlspecialchars($color); ?>; background-color: <?php echo htmlspecialchars($color); ?>20;">
                <p class="text-lg font-medium">Your favorite color is: <?php echo htmlspecialchars($color); ?></p>
                <p class="mt-2">This text is displayed in your chosen color!</p>
            </div>
            
            <!-- Back Link -->
            <div class="text-center">
                <a href="index.php" class="inline-block px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    Back to form
                </a>
            </div>
        </div>
    </div>
</body>
</html>