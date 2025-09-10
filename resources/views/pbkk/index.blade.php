<x-layout>

<body>
    <h2>Currenly Available Projects</h2>


    <ul>
        @foreach($projects as $projects)
        <li>
            <p>{{$projects['id']}}</p>
            <a href="/pbkk/{{$projects['id']}}">View Details</a>
        </li>
        @endforeach
    </ul>

</x-layout>