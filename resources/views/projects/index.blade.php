<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="projects">
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
		    		@foreach ($projects as $project)
			    		<tr>
			    			<td><a href="{{ route('projects.show', $project) }}">{{$project->id}}</a></td>
	    					<td>{{$project->title}}</td>
	    					<td>{{$project->author}}</td>
	    					<td>{{$project->description}}</td> 	
			    		</tr>   					    	 
	    			@endforeach	
		    </tbody>
	  	</table>
	</div>
</body>
</html>