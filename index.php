
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fliptext.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      <link rel="icon" type="image/x-icon" href="images/assets/logopic.png">
     
    <script>

    function myFunction() {
      document.getElementById("demo").innerHTML = "Review successfully submitted \u2713";
    }
    </script>

    <style>   
        audio::-webkit-media-controls-timeline,
        video::-webkit-media-controls-timeline {
            display: none;
        }
    </style>

    <title>Curieux - Home</title>

    <meta name="google-site-verification" content="gA6WQD-z5PkD8Nr6E9itzFTTqs49KgeECrBBfy87dhk" />

</head>

<body>
   













<!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="padding-left: 2vw; padding-right: 2vw;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="images/assets/logopic.png" width="30" height="30" class="d-inline-block align-top" alt="" >
        Curieux</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="event.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faculty.php">Faculty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

<!-- NAVBAR ENDS -->









<!-- HEADER IMAGE AND TEXT -->
<section style="background: black;">
    <div class="headimage">
     <img  id="ppc" src="images/misc/pagepic.jpg">
    </div>
</section>
    
<div id="toptext">
         <p id="tx1" > CURIEUX</p>
      <b><p id="tx1" class="ml3"> Live. Work. Inspire.</p></b>
     <p id="tx3"> The <span style="color: #20a4f3;">Future</span> belongs to the <span style="color: #20a4f3;"> Curious</span>.</p>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <script type="text/javascript">
          
          var textWrapper = document.querySelector('.ml3');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
          .add({
            targets: '.ml3 .letter',
            opacity: [0,1],
            easing: "easeInOutQuad",
            duration: 2250,
            delay: (el, i) => 150 * (i+1)
          });

        </script>
</div>
<!-- HEADER IMAGE AND TEXT ENDS -->

<!--<p style="color: white;"><br>"</p>  
-->



<!-- TECHBLOG SECTION: TEMPORARILY REMOVED -->
<!--         <li class="nav-item">
              <div ><a class="nav-link " href="https://curieuxweb-d6714.web.app/#/curieux-web/homepage" target="_blank">Tech-Blog</a>
              </div> 
            </li> -->

<div class="container">
  <div class="row animate-box" data-animate-effect="fadeInLeft" style="padding: 3%;">

    <div class="col-xs-12 col-sm-12 col-lg-6 " data-aos="fade-right" style="padding-right: 6%;padding: 3%;  padding-top: 5%; ">
      
         <img src="images/banners/techblog-cat3.jpg" class="img-fluid bshadow">

    </div>
    <script>
  AOS.init();
</script>
    <div class="col-xs-12 col-sm-12 col-lg-6 " data-aos="fade-up" style="padding: 3%;  padding-top: 5%;">
      <br><br><br><br>
      <span style="background: lightgrey; color: black; padding: 10px; font-size: 18px;" > About Us </span>
      
      <p><br>
      <!--  
      <span class="head">Everything is designed. Few things are designed well.</span><br><br>
      <span style="color: grey; font-size: 18px; ">
    One stop destination for all the technological updates.<br> Log on here to view the latest advancements in tech world, download code snippets, get the freshest resources and boast off your technical expertise to all the technophiles around
      </span>
        -->
      
    <span class="head">Growth is never by mere chance. It is the result of forces working together.</span><br><br>
      <span style="color: grey; font-size: 18px; ">
      Drifting swiftly through all the snags and glitches, our technophiles are always ready to take up major challenges. With exemplary skills to showcase and passion to work, there is a team that makes one of the top tech societies of Delhi University.
      </span>
      

      <br><br><br><br>
      <a href="aboutus.php" id="techbtn"> 
        Have a look   &nbsp; &#9654 
      </a>
      <br><br>
      </p>
    </div>
  </div>
</div>

<!-- TECH BLOG SECTION ENDS
















<!-- EVENTS SECTION -->
<a href="event.php" id="eventlink">
 <section class="home" >
     <div class="container">
        <div class="row">
            <div class="home-text">
              <hr>
                 <h4 >Technology is best when it brings people together.</h4><br>
                 <p class="animate-text">
                      
                    <span>WEB DEVELOPMENT</span>
                    <span>APP DEVELOPMENT</span>
                    <span>GAMING</span>
                    <span>SEMINARS</span>
                    <span>WEBINARS</span>
                    <span>WORKSHOPS</span>
                    
                 </p>
                 <hr>
            </div>
        </div>
     </div>
 </section>
</a>

<script>
         const txts=document.querySelector(".animate-text").children,
               txtsLen=txts.length;
           let index=0;
          const textInTimer=3000,
                textOutTimer=2800;

         function animateText() {
            for(let i=0; i<txtsLen; i++){
              txts[i].classList.remove("text-in","text-out");  
            }
            txts[index].classList.add("text-in");

            setTimeout(function(){
                txts[index].classList.add("text-out");              
            },textOutTimer)

            setTimeout(function(){

              if(index == txtsLen-1){
                  index=0;
                }
               else{
                   index++;
                 }
                animateText();
            },textInTimer); 
         }
         
         window.onload=animateText;
   
</script>

<!-- EVENTS ENDS -->

<br>


















<!-- FACULTY AND ACHIEVERS SECTION -->

<div class="container"> 
  <div class="row" style=" padding: 3%; margin-top: 2%; margin-bottom: 2%;">
    <div class="col-sm-6 col-xs-12 cont" data-aos="fade-down">
      <a href="faculty.php">
          <img src="images/banners/faculty-cat3cp.jpeg" class="img-fluid bshadow" style="height: 97%; width: 98%; display:block;
          margin:auto;">
          <div id="example" style="left: 8%; ">
          <h4><b>Faculty<br></h4></b>
          The pillars carrying this endeavored project to connect computer science with us. </div>
      </a>
    </div>
    
    
    <div class="col-sm-6 col-xs-12 cont" data-aos="fade-up">
        <a href="aboutus.php#achievers">
        <img src="images/banners/achievers-cat3cp.jpeg" class="img-fluid bshadow" style="height: 97%; width: 98%; display:block;
          margin:auto;">
          <div id="example" style=" right: 8%; ">
          <h4><b>Achievements<br></h4></b>
          The students who have displayed hard-work, skills and have come out meritorious. 
          </div>
        </a>
    </div>
    
  </div>

</div>


<!-- FACULTY AND ACHIEVERS SECTION ENDS -->




















<!-- REVIEWS SECTION -->

<!-- <img src="images/assets/pagebreak.jpg" style="max-width: 100%;"> -->

<section style="background: #F2F8F9;">

<br><br>

  <h1 style="margin-left:7%; margin-top: 2px; font-size:50px; border-left: 2px solid black;" class="mobdisp">&nbsp; Testimonials</h1><br>    

<div class="container mobdisp">

  <div class="row" style=" border:7px solid white;">


  



<!-- DISPLAY REVIEW -->
    <div class="col-sm-6" style=" display:block;
    margin:auto;">

    <div id="carouselExampleControls" class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel" >
    <div class="carousel-inner">

      <?php 

      include ("includes/connection.php");
      $no=1;

      $qy="select * from reviews where disp = '1'";
      $result=mysqli_query($con,$qy);

      $rows=mysqli_fetch_assoc($result);
      ?>

      <div class="carousel-item active"  data-bs-interval="4000" >
        <img src="images/misc/backg4e.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-xs-block" style="padding: auto; color: black;">
          
          <h3 class="mobdisp" style="color: #f4b860;"><?php 
              $no=1;
              while ($no<= $rows['rating']) {
                echo "🟊";
                $no=$no+1;
              }
  
             ?></h3><br>  


          <p style="font-style: italic; color:grey;">" <?php echo $rows['comments'];?> "</p><br>
          <h5 class="mobdisp"><?php echo $rows['name'];?></h5>
          <h6 class="mobdisp"><?php echo $rows['designation'];?></h5><br>
        </div>
      </div>

      <?php
      while ( $rows=mysqli_fetch_assoc($result)) {

       ?>

      <div class="carousel-item "  data-bs-interval="4000">
        <img src="images/misc/backg4e.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-xs-block" style="padding: auto; color: black;">
          
          <h3 class="mobdisp" style="color: #f4b860;"><?php 
              $no=1;
              while ($no<= $rows['rating']) {
                echo "🟊";
                $no=$no+1;
              }

             ?></h3><br>  
             
          <p style="font-style: italic; color:grey;">" <?php echo $rows['comments'];?> "</p><br>
          <h5 class="mobdisp"><?php echo $rows['name'];?></h5>
          <h6 class="mobdisp"><?php echo $rows['designation'];?></h5><br>
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

    </div>
    
<!-- DISPLAY REVIEW ENDS -->






  
<!-- GET REVIEW -->
  <div class="col-sm-5" style=" color: black; background: white;">
      <center><br>
        <h3 >Drop a review</h3>
        <form action="review.php" method="post">
          <br>
          <input type="text" name="name" placeholder="  Name" required>
          <br><br>
          <input type="text" name="desg" placeholder="  Designation" required>
          <br><br>

          <!-- rating -->
          Your Rating<br>

          <div class="wrapper">
            <input type="radio" id="r1" name="rating" value="5">
            <label for="r1">&#128970; </label>
            <input type="radio" id="r2" name="rating" value="4">
            <label for="r2">&#128970; </label> 
            <input type="radio" id="r3" name="rating" value="3" checked>
            <label for="r3">&#128970; </label>
            <input type="radio" id="r4" name="rating" value="2">
            <label for="r4">&#128970; </label>
            <input type="radio" id="r5" name="rating" value="1">
            <label for="r5">&#128970; </label>
          </div>
          

          <BR>
          
          <textarea id="review" name="review"  placeholder=" Enter Comments" required></textarea><br><br>
            <center><input type="submit" name="submit" value="Submit" id="subbt">
              <br><br>
            <span id="submittext" style="color: darkgreen;"></span></center>

        
          <?php
         if(isset($_SESSION['submitted']))
          {
            ?>
            <p id="demo" style="color: lightgreen">Review successfully submitted  &#10003;</p>

            <?php
            unset($_SESSION['submitted']);
          }
          ?>
         
         
        
        </form>
        </center>
    </div>

<!-- GET REVIEW ENDS -->

  </div>
  

</div>



<!-- REVIEW SECTION -->
















<br><br><br>
    
    <!-- FOOTER SECTION -->
    <?php include ("includes/footer.php");?>

</section>


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