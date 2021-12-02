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
		    	<a href="#">
		    		<div class="project">
			    		<tr>
					      <td> <a href="">{{ $project->id }}</a></td>
					      <td>{{ $project->title }}</td>
					      <td>{{ $project->author }}</td>
					      <td>{{ $project->description}}</td>
					      <td>{{ $project->status }}</td>
				     	</tr>
			    	</div>
		    	</a>			    			    					    	 
			    @endforeach
		    </tbody>
	  </table>
	</div>
</body>
</html>