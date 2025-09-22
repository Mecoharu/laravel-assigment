<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <h1> Welcome to the First Page</h1>
    <p>Click the Button Below To Find More!</p>
    <a href="/ninjas" class="btn">
        Find More!
    </a>
</body>
</html>