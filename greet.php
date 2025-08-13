<?php
// Page that accepts a name via GET parameter
$name = isset($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : 'Guest';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Greeting Page</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-md overflow-hidden p-6">
        <div class="text-center space-y-4">
            <!-- Greeting with animated welcome -->
            <h1 class="text-3xl font-bold text-gray-800 animate-pulse">
                Hello, <span class="text-blue-600"><?php echo $name; ?></span>!
            </h1>
            
            <!-- Description -->
            <p class="text-gray-600">
                This page demonstrates the use of GET parameters.
            </p>
            
            <!-- GET Example -->
            <div class="bg-gray-100 p-3 rounded-lg">
                <p class="text-sm text-gray-700 mb-1">Try this in URL:</p>
                <code class="bg-gray-200 px-2 py-1 rounded text-blue-800 font-mono">
                    ?name=<?php echo $name === 'Guest'?'YourName' : $name; ?>
                </code>
            </div>
            
            <!-- Back link -->
            <div class="pt-4">
                <a href="index.php" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Back to home
                </a>
            </div>
        </div>
    </div>
</body>
</html>