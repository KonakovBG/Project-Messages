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
	    	<tr>
	    		<th>
	    			<td>{{ $project_single[0]->id }};</td>
					<td>{{ $project_single[0]->title }};</td>
					<td>{{ $project_single[0]->author }};</td>
					<td>{{ $project_single[0]->description }};</td>
					<td>{{ $project_single[0]->status }};</td>
	    		</th>		    		
	    	</tr>
		</tbody>
	</table>	

	<table>
		<thead>
			<th>Messages</th>
		</thead>

		<tbody>
			<tr>
				<td>
					@for($i=0; $i < count($project_messages); $i++)
						{{$project_messages[$i]->content}};
					@endfor
				</td>					
			</tr>
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