<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="text-xl font-bold">Student Management</a>
                <div class="flex space-x-4">
                    <a href="/" class="hover:bg-blue-700 px-3 py-2 rounded">Students</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-center text-gray-800">Student Management System</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white mt-8 py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Student Management System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>