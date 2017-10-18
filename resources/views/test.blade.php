<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Тестовое Задание</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/../css/mine.css') }}">
</head>
<body class="row" class="text-center">
    <div class="container col-lg-6 ">
      <table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Years</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($tests as $test)
    <tr> 
    	<th>{{ $test->id }}</th>
    	<td>{{ $test->name }}</td>
      	<td>{{ $test->surname }}</td>
      	<td>{{ $test->email }}</td>
      	<td>{{ $test->years }}</td>
      	<td><button type="button" class="btn btn-primary">Edit</button></td>
      	<td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

		<td><button type="button" class="btn btn-success text-center">создать новую запись?</button></td>
    </div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
</body>
</html>
