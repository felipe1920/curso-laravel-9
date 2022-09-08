<h1>listagem de usuarios</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{$user->name}} - 
            {{$user->email}}
        </li>
    @endforeach

</ul>
