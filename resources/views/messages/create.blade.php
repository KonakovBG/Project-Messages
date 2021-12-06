<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action = "{{ route('messages.store') }}" method="post" class="form-group">
    @csrf	

    <label class="form-group">Project ID</label>
    <input type="text" name="project_id">
    
    <label>Author</label>
    <input type="text" name="author">

    <label>Content</label>
    <input type="text"  name="content">

    <button type="submit" value="Add project" >Submit</button>
 </form>

</body>
</html>