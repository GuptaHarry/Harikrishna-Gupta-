<?php 

	
$conn = new mysqli("localhost","root","","registered_students"); 
	
	// if error occurs 


	if ($conn -> connect_errno) 
	{ 
	echo "Failed to connect with the databse ! " . $conn -> connect_error; 
	exit(); 
	} 


	$sql = "select * from students"; 
	$result = ($conn->query($sql)); 
	
//array 
	$row = []; 

	if ($result->num_rows > 0) 
	{ 

		$row = $result->fetch_all(MYSQLI_ASSOC); 
	} 
?> 

<!DOCTYPE html> 
<html> 
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
     crossorigin="anonymous"></script>


    </head>
<style> 
	td,th { 
		border: 1px solid black; 
		padding: 10px; 
		margin: 5px; 
		text-align: center; 
	} 
</style> 

<body> 

  <!-- adding bootstrap code
-->
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
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<center>
     <h5 style="color:blue;"><u> Students registered for the Honours scheme.</u></h5><br><br>
	<table> 
		<thead> 
			<tr> 
				<th> First Name</th>
				<th> Last Name</th>
                <th> Gender</th>
                <th> City </th> 
				<th>Email  Id</th> 
				<th>Phone no</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			if(!empty($row)) 
			foreach($row as $rows) 
			{ 
			?> 
			<tr> 

				<td><?php echo $rows['first_name']; ?></td> 
				<td><?php echo $rows['last_name']; ?></td> 
				<td><?php echo $rows['gender']; ?></td>
                <td><?php echo $rows['city']; ?></td> 
                
                <td><?php echo $rows['email']; ?></td> 
                <td><?php echo $rows['phone_no']; ?></td> 

			</tr> 
			<?php } ?> 
		</tbody> 
	</table> 
<br><br>

 
</center>


</body> 
</html> 

<?php 
	mysqli_close($conn); 
?>
