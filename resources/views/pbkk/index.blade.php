<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pbkk Project | Home</title>
</head>
<body>
    <h2>Currenly Available Projects</h2>   
  @if($greeting)  
    <p> Hi from inside the statement</p>
 @endif
    <ul>
        @foreach($projects as $projects)
        <li>
            <p>{{$projects['id']}}</p>
            <a href="/pbkk/{{$projects['id']}}">View Details</a>
        </li>
        @endforeach
    </ul>
</body>
</html> 
