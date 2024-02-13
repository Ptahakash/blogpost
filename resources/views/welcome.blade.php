<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/dark-mode-toggle@2.0.0/dist/dark-mode-toggle.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>

<body class="bg-white dark:bg-gray-800">

    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-end"
            aria-label="Global">

            <div class="hidden md:block md:pr-4 md:space-x-8">
                <!-- Other parts of your HTML document remain unchanged -->

                <a href="{{ route('destination') }}"
                    class="font-medium text-gray-500 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 py-2 px-4 rounded">Destination</a>
                <a href="{{ route('blog') }}"
                    class="font-medium text-gray-500 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 py-2 px-4 rounded">Blog</a>
                <a href="{{ route('about-us') }}"
                    class="font-medium text-gray-500 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 py-2 px-4 rounded">About
                    Us</a>
                <a href="{{ route('login') }}"
                    class="font-medium text-gray-500 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 py-2 px-4 rounded">Login</a>

                <!-- Other parts of your HTML document remain unchanged -->
            </div>
        </nav>
    </div>

</body>

</html>
