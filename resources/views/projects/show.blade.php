<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<!-- Return single projects -->	
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
    			<td>{{$project->id}}</td>
    			<td>{{$project->title}}</td>
    			<td>{{$project->author}}</td>
    			<td>{{$project->description}}</td>
    		</th>		    		
    	</tr>
	</tbody>
</table>

<!-- Return project messages -->		

<table>
	<thead>
		<thead>
			<tr>
		   		<th>Messages</th>
		    </tr>
	    </thead>
	</thead>

	<tbody>			
		@foreach($project->messages as $message)
			<tr>
				<td>{{$message->author}}.----><td>
				<td>{{$message->content}}<td>				
			</tr>
		@endforeach				
	</tbody>
</table>

<!-- Return project todos -->	
<table>
	<thead>
		<th>ToDo-es</th>
	</thead>

	<tbody>			
			@foreach($project->toDoEs as $todo)
				<tr>
					<td>{{$todo->title}}.----><td>
					<td>{{$todo->author}}<td>
					<td>{{$todo->content}}<td>
					<td>{{$todo->status}}<td>
					<form action="{{ route('todos.update', $todo )}}" method="post">
						@csrf

						<button type="submit" >Finish</button>
					</form>	
				</tr>
			@endforeach</td>							
	</tbody>
</table>

<!-- Message store form -->	  
<form action="{{ route('messages.store') }}" method="post" class="form-group">
    @csrf

    <input type="hidden" name="project_id" value="{{ $project->id }}" />

    <label>Author</label>
    <input type="text" name="author">

    <label>Content</label>
    <input type="text"  name="content">

    <button type="submit">Submit</button>
</form>

</body>
</html>