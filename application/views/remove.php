<!DOCTYPE html>
<html>
<head>
	<title>Remove Courses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
		#keep {
			margin-right: 70px;
		}
	</style>
</head>
<body>
	<div class='container'>
	  <h2>Are you sure you want to delete the following course?</h2>
	  <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Course Name</th>
	        <th>Course Description</th>
	    </thead>
	    <tbody>
	    
	      <tr>
	        <td><?= $course['course_name'] ?></td>
	        <td><?= $course['description'] ?></td>
	      </tr>
	    </tbody>
	  </table>
	    <a href='/'><button class='btn btn-default' type='submit' id='keep'>No</button></a>
	  	<a href='/welcome/remove/<?= $course['id'] ?>'><button class='btn btn-danger' id='remove'type='submit'>Yes! I want to delete this</button></a>
	</div>  
</body>
</html>