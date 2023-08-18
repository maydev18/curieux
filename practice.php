<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'curieuxweb');

$qy="select * from reviews where disp = '1'";
$result=mysqli_query($con,$qy);
?>
<br>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="pracstyle.css">


<style type="text/css">
	
	#revname{
		background: blue;
  transition-duration: 2s;

	}


</style>
	

</script>

    <title>Hello, world!</title>
  </head>
  <body>
   



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pagepic.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>head</h5>
    <p>some para for 1</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pagepic.jpg" alt="Second slide">
<div class="carousel-caption d-none d-md-block">
    <h5>head</h5>
    <p>some para for 2</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pagepic.jpg" alt="Third slide">
     <div class="carousel-caption d-none d-md-block">
    <h5>head</h5>
    <p>some para for 3</p>
  </div> 
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>















<br><br>
<hr><hr><br><br>

    <h1>Hello, world!</h1>


		<?php
	while($rows=mysqli_fetch_assoc($result))
		{			
					echo $rows['name'];?>
			<script type="text/javascript">		
			 myVar = setTimeout(alertFunc, 3000);
</script>	
		
		<BR><BR>
		<?PHP
		}	
?>
		
<?php /*while($rows=mysqli_fetch_assoc($result))echo $rows['name'];*/?>





   <div class="row" style="padding: 3%;">

    <div class="col-sm-5" style=" display:block;
    margin:auto; padding: 2%;">
      <div class="card">
     	
        <div class="card-header">

          <div class="container">
            
            <div class="row" >
     		 
            <div class="col-3" style="display:block;
    margin:auto; padding: 0;"><img src="images/assets/user.png" class="img-fluid" ></div> 
            <div class="col-9" style="padding: 4%; ">

            	<h5 id="revname"> </h5>
                <h6> Designation</h6></div> 
           
     
            </div>

          </div>

    
        </div>
        <div class="card-body">
          <h5 class="card-title">&#128970; &#128970; &#128970; &#128970; &#128970;</h5>
          <br>
          <p class="card-text">
          With supporting text below as a natural lead-in to additional content.
           I'm web designer, and I'm very passionate and dedicated to my work. With 20 years experience as a professional web developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.
    
          </p>
        </div>
      </div>
    </div>



	
	<script>
	/*	<?php
	/*while($rows=mysqli_fetch_assoc($result))
	{?>
		document.getElementById("revname").innerHTML = "<?php echo $rows['name'];?>";

	<?php } 
	*/?>
	*/
	</script>
 
 
<!-- New Try -->
<br><br>
<hr><hr><br><br>


<!-- 

<div id="carouselExampleControls" class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel" style="max-width: 40%; height: 60%;">
  <div class="carousel-inner">

    <?php 
    $no=1;

    $qy="select * from reviews where disp = '1'";
    $result=mysqli_query($con,$qy);

    $rows=mysqli_fetch_assoc($result);
    ?>

    <div class="carousel-item active"  data-bs-interval="2000" >
      <img src="images/misc/backg4c.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $rows['name'];?></h5>
        <h6><?php echo $rows['designation'];?></h5><br>
        <h3 style="color: #f4b860;"><?php 
            $no=1;
            while ($no<= $rows['rating']) {
              echo "&#128970";
              $no=$no+1;
            }

           ?></h3><br>  


        <p><?php echo $rows['comments'];?></p><br>
      </div>
    </div>

    <?php
    while ( $rows=mysqli_fetch_assoc($result)) {

     ?>

    <div class="carousel-item "  data-bs-interval="2000">
      <img src="images/misc/backg4c.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $rows['name'];?></h5>
        <h6><?php echo $rows['designation'];?></h5><br>
        <h3 style="color: #f4b860;"><?php 
            $no=1;
            while ($no<= $rows['rating']) {
              echo "&#128970";
              $no=$no+1;
            }

           ?></h3><br>  
           
        <p><?php echo $rows['comments'];?></p><br>
      </div>
    </div>
<?php 

$no=$no+1;

}
 ?>
 


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 -->

<!--
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"  data-bs-interval="2000">
      <img src="images/misc/backg4b.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="2000"> 
      <img src="images/misc/backg4b.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="2000">
      <img src="images/misc/backg4b.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





    <?php
  while($rows=mysqli_fetch_assoc($result))
    {     ?>

    <div class="carousel-item active"  data-bs-interval="2000">
      <img src="images/misc/backg4b.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $rows['name'];?></h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <?php
    } ?>










-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>