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
   
    <h2 class="text-2xl font-bold mb-6 text-gray-800">User Information Form</h2>
    <!-- Using POST for form submission to protect sensitive data 
     POST with Redirect is preferred because it protects data, prevents double submissions when updating, improves user experience, 
     and makes the result page saveable or shareable via a link (PRG).-->

    <form method="POST" action="process.php" class="space-y-6 max-w-md mx-auto">
    <div class="space-y-2">
        <label for="name" class="block text-sm font-medium text-gray-700">Your Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Enter your name">
    </div>
    
    <div class="space-y-2">
        <label for="color" class="block text-sm font-medium text-gray-700">Favorite Color:</label>
        <div class="flex items-center space-x-4">
            <input 
                type="color" 
                id="color" 
                name="color" 
                value="#160d0dff" 
                required
                class="h-10 w-16 cursor-pointer">
            <span id="color-value" class="text-sm text-gray-600">#ff0000</span>
        </div>
    </div>
    
    <button 
        type="submit"
        class="w-full px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
        Submit
    </button>
    </form>

<script>
    // Update color value display when color changes
        document.getElementById('color').addEventListener('input', function(e) {
        document.getElementById('color-value').textContent = e.target.value;
    });
</script>
</body>
</html>