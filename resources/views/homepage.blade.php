<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<nav>
    <ul>
        <a href="{{ route('projects.create') }}"><li>Insert Project</li></a>
        <a href="{{ route('messages.create')}}"><li>Insert Message</li></a>
        <a href="{{ route('todos.create')}}"><li>Insert ToDo</li></a>
        <a href="{{ route('projects.index') }}"><li>View Projects</li></a>
        <a href="{{ route('messages.index') }}"><li>View Messages</li></a>
        <a href="{{ route('todos.index') }}"><li>View ToDo</li></a>
    </ul>
</nav>

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth

        <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>

        <div class="user">
            <p> User: {{auth()->user()->name}}</p>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="btn btn-secondary btn-sm" type="submit">Logout</button>
        </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

</body>
</html>