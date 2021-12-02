<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table class="table table-bordered table-striped">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Title</th>
		        <th>Author</th>
		        <th>Description</th>
		        <th>Status</th>
		      </tr>
		    </thead>

		    <tbody>
	    		<div class="project">
	    			<div class="row">
    					{{ $project_single[0]->id }};
    					{{ $project_single[0]->title }};
    					{{ $project_single[0]->author }};
    					{{ $project_single[0]->description }};
    					{{ $project_single[0]->status }};
	    			</div>
	    		</div>

	    		<div class="messages">
	    			<div class="row">

	    				@for($i=0; $i < count($project_messages); $i++)
	    					{{$project_messages[$i]->content}};
	    				@endfor
	    			</div>
	    		</div>		    					    			    					    	 
		    </tbody>
	  </table>

	  <form action = "/insert_message" method="post" class="form-group">
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