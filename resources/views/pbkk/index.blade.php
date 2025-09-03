<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pbkk Project | Home</title>
</head>
<body>
    <h2>Currenly Available Projects</h2>
<p>{{ $greeting}}</p>
    <ul>
        <li> 
            <a href="/projects/{{ $projects[0]['id'] }} - {{ $projects[0]['description'] }}">
                {{ $projects[0]['name'] }} - {{ $projects[0]['description'] }}
            </a>
        </li>
        <li> 
            <a href="/projects/{{ $projects[1]['id'] }} - {{ $projects[1]['description'] }}">
                {{ $projects[1]['name'] }} - {{ $projects[1]['description'] }}
            </a>
        </li>
    </ul>
</body>
</html> 