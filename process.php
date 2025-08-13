<?php
// Check if form was submitted using POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $color = isset($_POST['color']) ? $_POST['color'] : '#000000';
    
    // Store data in session
    session_start();
    $_SESSION['form_data'] = [
        'name' => $name,
        'color' => $color
    ];
    
    // Redirect to result page
    header('Location: result.php', true, 303);
    exit;
} else {
    // If accessed directly, show error page with Tailwind CSS
    header('Content-Type: text/html; charset=utf-8');
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Invalid Access</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
            <h1 class="text-2xl font-bold text-red-600 mb-4">Invalid Access</h1>
            <p class="text-gray-700 mb-6">Please submit the form from the homepage.</p>
            <a href="index.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-200">
                Go to Homepage
            </a>
        </div>
    </body>
    </html>
    <?php
    exit;
}