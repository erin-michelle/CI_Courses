
<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		form {
			margin: 30px 0  30px 30px;
		}

		h1 {
			font-family: futura;
		}

		.course-table {
			margin: 30px;
		}

		.form-control {
			overflow-y: scroll;
		}

	</style>
</head>

<body>
	<div id="container">
		<form action='welcome/add' method='post'>
		  <div class="form-group">
		    <label>Course Name:</label>
		    <input type="text" class="form-control" name='name' style="width: 400px;">
		  </div>
		  <div class="form-group">
		    <label>Description:</label>
		    <input type="text" class="form-control" name='descrip' style="width: 400px; height:300px">
		  </div>
		  <button type="submit" class="btn btn-default">Add</button>
		</form>
		<div class='course-table'>
		  <h2>Courses</h2>
		  <table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Course Name</th>
		        <th>Course Description</th>
		        <th>Date Added</th>
		        <th>Action</th>
		    </thead>
		    <tbody>
<!-- 
		    {% foreach (all_courses as $course) %} -->

		      <tr>
		        <td>course_name </td>
		        <td>'description'</td>
		        <td>'created_at'</td>
		        <td><a href='welcome/destroy/{% course<id> %}'><button class='btn btn-default' type='submit'>Remove</button></a></td>
		      </tr>
		    </tbody>
		  </table>
		</div>  
	</div>
</body>
</html>