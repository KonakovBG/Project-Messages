<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action = "/insert_message" method="post" class="form-group" style="width:70%; margin-left:15%;">

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">	

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