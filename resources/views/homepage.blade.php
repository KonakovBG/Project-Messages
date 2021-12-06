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
        <a href="{{ route('todoes.create')}}"><li>Insert ToDo</li></a>
        <a href="{{ route('projects.index') }}"><li>View Projects</li></a>
        <a href="{{ route('messages.index') }}"><li>View Messages</li></a>
        <a href="{{ route('todoes.index') }}"><li>View ToDo</li></a>
    </ul>
</nav>

</body>
</html>