<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action = "/insert_project" method="post" class="form-group" style="width:70%; margin-left:15%;">

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">	
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