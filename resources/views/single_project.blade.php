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
</body>
</html>