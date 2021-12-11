<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<h1>Register</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action = "{{ route('register') }}" method="post">
    @csrf	
    
    <label>Name</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Password</label>
    <input type="text"  name="password">

    <label>Password</label>
    <input type="text"  name="password_confirmation">

    <button type="submit" >Submit</button>
 </form>

</body>
</html>