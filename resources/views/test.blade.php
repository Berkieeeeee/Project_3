<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @vite(['resources/css/app.css'])
</head>
<body class="flex flex-col min-h-screen bg-gray-200">
    <header class="bg-italian-flag-green text-white p-4 flex items-center">
        <div class="logo">
            <img src="PizzaFotos/_09253db4-5f28-4da4-b255-46c05fda052b-removebg-preview.png" alt="StonksFoto" width="100">
        </div>
        <nav class="ml-auto md:hidden">
            <button class="burger flex flex-col items-center">
                <div class="bg-italian-flag-green h-1 w-6 mb-1"></div>
                <div class="bg-italian-flag-white h-1 w-6 mb-1"></div>
                <div class="bg-italian-flag-red h-1 w-6"></div>
            </button>
        </nav>
        <nav class="hidden md:block">
            <ul class="flex">
                <li><a href="/" class="text-white px-2">Homepage</a></li>
                <li><a href="order" class="text-white px-2">Order</a></li>
                <li><a href="dashboard" class="text-white px-2">Dashboard</a></li>
                <li><a href="login" class="text-white px-2">Login</a></li>
                <li><a href="register" class="text-white px-2">Register</a></li>
                <li><a href="contact" class="text-white px-2">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex flex-wrap justify-around p-4 bg-gray-200">
        @foreach(range(1, 4) as $i)
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 h-auto p-4">
                <div class="bg-white rounded-lg shadow-md p-6 h-full">
                    <h2 class="text-2xl font-bold mb-2 text-gray-800">Heading {{$i}}</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</p>
                </div>
            </div>
        @endforeach
    </main>

    <footer class="bg-italian-flag-green text-white p-4 text-center mt-auto">
        <div class="flex justify-center space-x-4 mb-4">
            <a href="https://www.instagram.com/stonkspizza/" class="text-white">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/StonksPizza_NL" class="text-white">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/in/stonks-pizza-36b720252/" class="text-white">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://www.facebook.com/stonkspizza/" class="text-white">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <p>&copy; 2024 Stonkspizza All rights reserved.</p>
    </footer>
</body>
</html>
