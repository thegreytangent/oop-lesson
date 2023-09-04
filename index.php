<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Add Student</a>
        </li>

   

      
      </ul>
      
    </div>
  </div>
</nav>

<div class="alert alert-success" role="alert">
  New Student has been added!
</div>

<form action="add.php" method="POST">
<div class="mb-3">
  <label class="form-label">ID Number:</label>
  <input type="text" class="form-control" name="id_number" required />
</div>
<div class="mb-3">
  <label class="form-label">Firstname:</label>
  <input type="text" class="form-control" name="firstname" required />
</div>
<div class="mb-3">
  <label class="form-label">Lastname:</label>
  <input type="text" class="form-control" name="lastname" required  />
</div>
<div class="mb-3">
  <label class="form-label">Birthdate:</label>
  <input type="date" class="form-control" name="birthdate" required  />
</div>

<div class="mb-3">
 <button class="btn btn-success" type="submit" name="add_student" value="add_student">Add Student</button>
</div>


</form>


	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>