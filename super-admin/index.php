


<!DOCTYPE html>
<html lang="en">
 <head>	
	<title>
	Curieux Web Admin
	</title>

    <!--    DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<style type="text/css">
		td{
			padding: 10px;
		}

		input,textarea{
			width: 45%;
			padding: 1%;
		}

		body{
			font-family: 'Montserrat', sans-serif;
		}
	</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
 
 <body style="background-image: url(images/misc/backg4c.jpg);">


<?php
session_start();

include ("../includes/connection.php");

$qy="select * from reviews";
$result=mysqli_query($con,$qy);
?>


 <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="padding-left: 2vw; padding-right: 2vw;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../images/assets/logopic.png" width="30" height="30" class="d-inline-block align-top" alt="" >
        Curieux Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../techblog.php">Tech-Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../event.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../faculty.php">Faculty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contactus.php">Contact Us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

<section style="padding: 3%;">
<?php
session_start();

include ("../includes/connection.php");

$query="select * from register";
$register=mysqli_query($con,$query);
?>
<section style="padding: 3%;">
<h1>View Registerations</h1><br>

	<table border="1" style="background: white;" id="reg_table">	
    <thead>
	<tr >
		 
		<TD >NAME</TD>
		<TD >COLLEGE</TD>
		<TD >COURSE</TD>
		<TD >YEAR</TD>
		<TD >EMAIL</TD>
        <TD >PHONE</TD>
        <TD >EVENT</TD>
        <TD >TEAM-MATE</TD>
        <TD >DATE OF REG.</TD>
	</tr>
    </thead>
    <tbody>
	<?php			
	while($rows=mysqli_fetch_assoc($register))
	{

		?>
		<tr >
		 
		<TD ><?php echo $rows['name'];?>
		</TD>
		<TD ><?php echo $rows['college'];?>
		</TD>
		<TD ><?php echo $rows['course'];?>
		</TD>
		<TD ><?php echo $rows['year'];?>
		</TD>
        <TD ><?php echo $rows['email'];?>
		</TD>
        <TD ><?php echo $rows['phone'];?>
		</TD>
        <TD ><?php echo $rows['event'];?>
		</TD>
        <TD ><?php echo $rows['teammate'];?>
		</TD>
        <TD ><?php echo $rows['time'];?>
		</TD>
		</tr>
	<?php
	}
	?>	
    </tbody>
	</table><br>
			<form action="export.php" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>
   
    <br><br>




<h1>Manage reviews</h1><br>

	<table border="1" style="background: white;">	
	<tr >
		 
		<TD >NAME</TD>
		<TD >DESIGNATION</TD>
		<TD >RATING</TD>
		<TD >COMMENTS</TD>
		<TD >DISPLAY</TD>
	</tr>
	<?php			
	while($rows=mysqli_fetch_assoc($result))
	{

		?>
		<tr >
		 
		<TD ><?php echo $rows['name'];?>
		</TD>
		<TD ><?php echo $rows['designation'];?>
		</TD>
		<TD ><?php echo $rows['rating'];?>
		</TD>
		<TD ><?php echo $rows['comments'];?>
		</TD>
		<!-- <TD ><?php echo $rows['disp'];?>
		</TD> -->

		<form action="reviewvalidation.php" method="post">
			
			<input name="id" value="<?php echo $rows['id']?>" type="hidden">
			<td >
			<input type="text" name="disp" value="<?php echo $rows['disp']?>" >
			</td>
			<td style="padding: 0px; background: ; width: 10%;">
				
				<input type="submit" name="save" value="save">
			</td>
		</form>

		</tr>
	<?php
	}
	?>	
	</table>

<br>
<h1>Enter Achievement</h1>
	<form action="achieversvalidation.php" method="post">
	<br>
	<input type="text" name="ename" placeholder="  Enter Event Name" required >
	<br><br>
	<input type="text" name="date" placeholder="  Enter date" required>
	<br><br>
	<input type="text" name="result" placeholder="  Enter result" required>
	<br><br>
	<textarea type="text" name="description" placeholder="  Enter description" required></textarea>

	<br><br>
	<input type="submit" name="submit" value="submit">
	</form>

</section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () { //Initialising table using DataTable
            $('#reg_table').DataTable();
        } );
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


