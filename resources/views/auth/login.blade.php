<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<h1>Login</h1>

<form action = "{{ route('login') }}" method="post">
    @csrf	
    
    <label>Username</label>
    <input type="text" name="username">

    <label>password</label>
    <input type="text"  name="password">

    <button type="submit" >Submit</button>
 </form>

</body>
</html>