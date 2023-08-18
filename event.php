<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fliptext.css">
    <link rel="stylesheet" type="text/css" href="fadein.css">
    <link rel="stylesheet" type="text/css" href="imgmosaicstyle.css">

    <link rel="icon" type="image/x-icon" href="images/assets/logopic.png"> 

    <title>Curieux - Events</title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
        //$("myModal").attr("width","500");
    });

</script>


    <style>   
        audio::-webkit-media-controls-timeline,
        video::-webkit-media-controls-timeline {
            display: none;
        }



        div.gallery {
          border: 1px solid #ccc;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }

        /*
        *{
          box-sizing: border-box;
        }*/

        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
        }

        @media only screen and (max-width: 500px) {
          .responsive {
            width: 100%;
          }
        }

        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>


  </head>
  <body background="images/misc/backg4b.JPG">

    


                

<!-- UNCOMMENT THIS SECTION TO GIVE AN ON-LOAD PROMPT FOR A NEW UPCOMING EVENT-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h3 class="modal-title " id="exampleModalLabel">PHOENIX'23</h3>
        </button>
      </div>
      <div class="modal-body">
        <h5> EVENTS</h5>
        1. Code Escape 3.0 <br>
        2. Tech Quiz(Team Event)<br>
        <br>
        To register yourself, click <a href="https://linktr.ee/curieux.sgtbkhalsa" style="text-decoration: none;">here</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closemdl" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



    <!-- HEAD IMAGE -->
    <div class="headimage">
     <img  id="ppc" src="images/misc/eventspic.jpg">
    </div>
    <!-- HEAD TEXT -->
    <div id="toptext">
        <h1 class="ml14">
            <span class="letters" id="tx1">Register now</span>
        </h1>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript">
          // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml14 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
          .add({
            targets: '.ml14 .line',
            scaleX: [0,1],
            opacity: [0.5,1],
            easing: "easeInOutExpo",
            duration: 900
          }).add({
            targets: '.ml14 .letter',
            opacity: [0,1],
            translateX: [40,0],
            translateZ: 0,
            scaleX: [0.3, 1],
            easing: "easeOutExpo",
            duration: 800,
            offset: '-=600',
            delay: (el, i) => 150 + 25 * i
          });

        </script>




      <!--<b><p id="tx1" style="margin-bottom: 4%;"> For All Our Upcoming Events</p></b>-->
      <b><p id="tx1" style="margin-bottom: 4%;"> The Annual Phoenix Fest is Live</p></b>
      <b><a href="https://linktr.ee/curieux.sgtbkhalsa" ><span id="tx3" style="padding: 2%; background: white; color: #03191e;"> Click Here</span></b></a>
    </div>
    
<!-- HEAD IMAGE AND TEXT ENDS -->












<!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style="padding-left: 2vw; padding-right: 2vw;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="images/assets/logopic.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Curieux</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <!-- <li class="nav-item">
              <div ><a class="nav-link " href="https://curieuxweb-d6714.web.app/#/curieux-web/homepage" target="_blank">Tech-Blog</a>
              </div> 
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link active" href="event.php">Events</a>
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


 <p style="color: black;">
  <br>"
  </p>  


<br><br>


<section style="background-image: url(images/misc/backg4b.jpg);">



<!-- EVENTS BELOW -->
<div class="container">

<!-- TECH QUIZ -->

  <div class="row" >

    
    <div class="col-xs-12 col-sm-12 col-lg-4 order-lg-second">
      
      <img src="images/phoenix23/techquiz.jpeg" class="img-fluid" style="display:block;
    margin:auto; border:2px solid #c1cfda;">

    </div>


    <div class="col-xs-12 col-sm-12 col-lg-8 order-lg-first" style="padding: 3%;  background: white;">
      <b><span style=" color: #03191e; font-size: 24px; ">TECH QUIZ</span>
      </b>
       <p style="color: grey;">
      
        <b>Date : 17<sup>th</sup>March 2023, 11:00 AM</b><br><br>
       Curieux brings an interesting tech quiz which is sure to make you put your thinking caps on and test your brain powers! as a part of its <br>Annual Tech-Fest PHOENIX. The quiz includes a number of rounds <span style="color: black;       "><b>to test the Sorcerers of Intellect!</b>  
       <br>An opportunity to win  <span style="color: black; "><b>exciting cash prizes! </b> Sharpen your technical knowledge and prepare yourself to bag the prizes by registering now!</span>
        <br><br>
        <span style="color: black; font-size:20px;"> <b> To register, click <a href="https://linktr.ee/curieux.sgtbkhalsa" style="text-decoration:none; color:red;">here</a></b></span>

      <br>
      
      </p>
    </div>

  </div>
 <br>
 <!-- CODE ESCAPE 3.0 -->
 <div class="row" >
        
    <div class="col-xs-12 col-sm-12 col-lg-4 ">
      
      <img src="images/phoenix23/codeescape.jpeg" class="img-fluid" style="display:block;
    margin:auto; border:2px solid #c1cfda;">

    </div>


    <div class="col-xs-12 col-sm-12 col-lg-8 " style="padding: 2%;  background: white;">
 
      <b><span style=" color: #03191e; font-size: 24px; ">Code Escape 3.0</span>
      </b>
       <p style="color: grey;"> 
      
        <b>Date : 17<sup>th</sup> March 2023, 11:00 AM</b><br><br>
        <span style="color: black; "><b>An Ultimate One-day Coding Championship</b></span> going to be conducted by the society for all the coding enthusiasts where all the coders stuck to their computer screens straight for<span                 style="color: black; "><b>  3 hours to decode</b> some of the trickiest problems based on Programming. </span> A coding fiesta for all those out there who can literally type fire and flaunt their coding skills to the world!               <br>An opportunity to win  <span style="color: black; "><b>cash prizes worth Rs 5, 000!</b> Sharpen your coding skills and immerse yourself in the deep ocean of code.</span>
        <br><br>
        <span style="color: black; font-size:20px;"> <b> To register, click <a href="https://linktr.ee/curieux.sgtbkhalsa" style="text-decoration:none; color:red;">here</a></b></span>
      </p>
    </div>

  </div>
<br>

<!-- LANISTERS -->

  <div class="row" >

    
    <div class="col-xs-12 col-sm-12 col-lg-4 order-lg-second">
      
      <img src="images/banners/lanisters2.jpeg" class="img-fluid" style="display:block;
    margin:auto; border:2px solid #c1cfda;">

    </div>


    <div class="col-xs-12 col-sm-12 col-lg-8 order-lg-first" style="padding: 3%;  background: white;">
      <br>
      <b><span style=" color: #03191e; font-size: 24px; ">LANISTERS TOURNAMENT</span>
      </b>
       <p style="color: grey;"> <br>
      
        <b>Date : 27<sup>th</sup> - 28<sup>th</sup> Feburary 2020</b><br><br>
       Lanisters is a LAN gaming event which the society hosts as a part of its <br>Annual Tech-Fest PHOENIX. The event includes a number of competitive games like <span style="color: black; "><b>FPS - COUNTER STRIKE and FIFA Cup with prizes worth Rs 6k!</b> <br> Lanisters'20 saw a participation of 50+ gaming enthusiasts from 10+ institutions across Delhi who competed to prove their prowess in gaming arena. 


      
      <br>
      
      </p>
    </div>

  </div>
 <br>
 <!-- CODE ESCAPE-->
 <div class="row" >
        
    <div class="col-xs-12 col-sm-12 col-lg-4 ">
      
      <img src="images/banners/codesc.jpg" class="img-fluid" style="display:block;
    margin:auto; border:2px solid #c1cfda;">

    </div>


    <div class="col-xs-12 col-sm-12 col-lg-8 " style="padding: 2%;  background: white;">
 
      <b><span style=" color: #03191e; font-size: 24px; ">Code Escape</span>
      </b>
       <p style="color: grey;"> 
      
        <b>Date : 24<sup>th</sup> October 2021</b><br><br>
        <span style="color: black; "><b>An Ultimate One-day Coding Championship</b></span> conducted by the society for all the coding enthusiasts where all the coders stuck to their laptop screens straight for<span style="color: black; "><b>  12 hours to decode</b> some of the trickiest problems based on Programming and Database Management Systems (DBMS).</span> What made the event more exciting were hints being posted as our instagram handle stories, which gave the event a treasure hunt touch. <br>The event saw participation from 80+ coders who competed fiercely towards winning <span style="color: black; "><b>prizes worth Rs 4k!</b> Code Escape was powered by prominent education firms like GeeksforGeeks, CodenLive, InterviewBuddy, FinalRevise and DUclub, which ultimately made it a grand success.</span>

      
      
      </p>
    </div>



  </div>



</div>

</section>
<br><br>

<!-- GAMING SECTION ENDS -->












<!-- EVENTS SECTION -->
<div class="container">
  <div class="row" >


     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/oblivion.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">OBLIVION</span><br>
          A two-day Tech based article writing event. 
      </div>
      </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/memesk.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">MEME SKIRMISH</span><br>
          Online meme making event organised in collaboration with Memeons Society SGTBKC
      </div>
      </div>
    </div>

    
     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/Kryptos.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">KRYPTOS</span><br>
          Annual Treasure Hunt event organised under the Tech Fest PHOENIX
      </div>
      </div>
    </div>



  </div>
  <br>
    <div class="row" style="display: flex; justify-content: center;">


     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/logomaniacp.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">LOGO MANIA</span><br>
          Logo making and quiz event organised under the annual Tech Fest PHOENIX'20
      </div>
      </div>
    </div>

    
     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/confundocp2.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">CONFUNDO</span><br>
          Kryptic hunt event organised under the Tech Fest PHOENIX'19
      </div>
      </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/whizquizcp.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">WHIZ QUIZ</span><br>
          Technical Quiz event organised under the Tech Fest PHOENIX'19
      </div>
      </div>
    </div>

  
  </div>

</div>

<br>
 <!-- EVENTS SECTIONS ENDS -->















<!-- SEMINARS HEADER IMAGE -->
 <section class="home" style="background-image: url(images/misc/seminarpic.jpg);">
     <div class="container">
        <div class="row">
            <div class="home-text">
                 <h4>To Events that Inspire.</h4>
                 
            </div>
        </div>
     </div>
 </section>




<!-- SEMINARS SECTION BEGINS -->
<section style="background-image: url(images/misc/backg4a.jpg);">
<br><br>
 <h1 style="margin-left: 5%;">Seminars and Workshops</h1>
<div class="container">
  
  
  <!--GFG DSA -->
<div class="row"  class="bshadow" style="  padding: 1%;">

    <div class="col-xs-12 col-sm-12 col-lg-6 " style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
     <img src="images/banners/gfgweb.png" class="img-fluid bshadow" style="display:block;
    margin:auto;">
    </div>


    <div class="col-xs-12 col-sm-12 col-lg-6 " style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">DSA Webinar by GeeksForGeeks</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 25<sup>th</sup> November 2021</b></span><br>
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
    Curieux conducted a free workshop on Data Structures and Algorithms in collaboration with one of the most eminent computer science portals for geeks by geeks, GeeksforGeeks. Ms Kirti Gera, who is a DSA course mentor at GeeksforGeeks, shared her insightful journey and some very important tips to ace an interview. <BR>It sure did turn the workshop into an erudite conference giving all the participants an eye opening experience.
      </p> 
    </div>

  </div>
  
  <!--WEBD -->
  <div class="row"  class="bshadow" style="  padding: 1%;">

     <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-second" style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
      
      <img src="images/banners/webd.jpg" class="img-fluid bshadow" style="display:block;
    margin:auto;">

    </div>

    <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-first" style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br><BR>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">Webinar on Web-Development</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 22<sup>nd</sup> June 2021</b></span><br>
       
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
    The webinar on the topic 'Modern Day Web Development' was organised by the society wherein the society President Ekamjit Singh covered some crucial aspects of the field such as wireframing, theme selection, frontend - backend designing and web hosting in detail which encouraged students to look at this field not only as a highly coveted skill but also as a bright career opportunity.
      </p>
      <br>
      
    </div>

  </div>

  <BR>


<!--APPD -->
  <div class="row"  style="  padding: 1%;">

      <div class="col-xs-12 col-sm-12 col-lg-4" style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
        
        <img src="images/banners/appd.jpg" class="img-fluid bshadow" style="display:block;
      margin:auto;">

      </div>


     <div class="col-xs-12 col-sm-12 col-lg-8" style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br><BR>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">Webinar on App-Development</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 30<sup>th</sup> May 2021</b></span><br>
       
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
   The webinar was conducted by Mr Sumit Das, Director at one of the leading tech development firms, Dynamic Futuretech. All the topics crucial to the field were discussed in detail which made it easier for students to expand their perspective about app development and explore all the major career opportunities involved with this field.
      </p>
      <br>
    </div>
  </div>

  <BR>


<!--GSOC -->
  <div class="row" >
    <div class="col-xs-12 col-sm-12 col-lg-4 order-lg-second" style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
      
      <img src="images/banners/precisely.jpg" class="img-fluid bshadow" style="display:block;
    margin:auto;">

    </div>

    <div class="col-xs-12 col-sm-12 col-lg-8 order-lg-first" style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br><BR>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">GitHub and GSOC Seminar</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 28<sup>th</sup> January 2020</b></span><br>
       
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
    Precisely, a platform that helps high school and college students find and apply to the latest international opportunities, competitions etc hosted a seminar on open scource development, GitHub and Google Summer of Code(GSoC).

     </p>
      <br>
      
    </div>
  </div>
</div>












<!-- WORKSHOPS -->
<br><br>
<div class="container">
<div class="row" style="display: flex; justify-content: center; ">

    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/hacknslash.jpeg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 16px; color: #03191e">Hack-N-Slash Workshop</span><br>
         <span style="font-size: 12px;">An Ethical Hacking workshop conducted by Sanchay Singh, founder of HackersVilla Cybersecurity</span>
      </div>
      </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/dnc.JPG" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">Divide and Conquer Workshop</span><br>
          Conducted by Apaar Kamaal, mentor at Coding Blocks
      </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/cmd.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">Linux Command Line Workshop</span><br>
          Conducted by Curieux society senior member Ishaan Arora
      </div>
      </div>
    </div>

  </div>
</div>

<br>

<!-- WORKSHOPS END -->

</section>

<section style="background:white; padding: 5%;">
<center>

<h1> Our Event Partners </h1> <br>
<img src="images/assets/logos/hackersvilla.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/duclub.jpg" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/rosa.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/coden.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/finalrevise.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/gfg.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/interview.jpg" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/compgen.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/cdf.png" style="width:20vh; height:auto; margin:2%;">
</center>
</section>





    <!-- FOOTER SECTION -->
    <?php include ("includes/footer.php");?>








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
