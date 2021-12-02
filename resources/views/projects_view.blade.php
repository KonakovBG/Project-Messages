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
			    	<a href="{{ route('projects.show', $project->id) }}"></a>
			    		<div class="project">
			    			<div class="row">
		    					{{ $project->id }};
		    					{{ $project->title }};
		    					{{ $project->author }};
		    					{{ $project->description }};
		    					{{ $project->status }};
			    			</div>
			    		</div>
			    	</a>		    					    			    					    	 
			    @endforeach
		    </tbody>
	  </table>
	</div>
</body>
</html>