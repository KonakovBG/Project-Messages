<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>   

<!-- Show any errors -->
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Store project in database -->
<form action = "{{ route('projects.store') }}" method="post" class="form-group">
    @csrf
    
    <label class="form-group">Title:</label>
    <input type="text" name="title">
    
    <label>Author</label>
    <input type="text" name="author">

    <label>Description</label>
    <input type="text"  name="description">

    <label>Status</label>
    <input type="text"  name="status">

    <button type="submit" value="Add project" >Submit</button>
 </form>

</body>
</html>