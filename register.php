
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-register.css">
    <link rel="icon" type="image/x-icon" href="images/assets/logopic.png">



    <title>Event Registration</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 ">
                <!-- heading for query section  -->
                <h2 style="text-align: center; padding-top: 30px;">Register Now</h2>

                <div class="form-container">
                    <form id="query-form">
                        <div class="mb-3 form-input">
                            <input type="text" name="name" id="exampleFormControlInput1" placeholder="Full Name" required>
                        </div>

                        <div class="mb-3 form-input">
                            <input type="text" name="college" id="exampleFormControlInput1" placeholder="College" required>
                        </div>

                        <div class="mb-3 form-input">
                            <input type="text" name="course" id="exampleFormControlInput1" placeholder="Course" required>
                        </div>

                        <div class="mb-3 form-input">
                            <label> Year </label>
                            <select id="exampleFormControlInput1" name="year">
                                <option style="color: black;">Select</option>
                                <option value="1" style="color: black;">First Year</option>
                                <option value="2" style="color: black;">Second Year</option>
                                <option value="3" style="color: black;">Third Year</option>
                                <option value="4" style="color: black;">Fourth Year</option>
                            </select>
                        </div>

                        <div class="mb-3 form-input">
                            <input type="email" name="email" id="exampleFormControlInput1" placeholder="Email" required>
                        </div>

                        <div class="mb-3 form-input">
                            <input type="text" name="phone" id="exampleFormControlInput1" placeholder="Phone" required>
                        </div>

                        <div class="mb-3 form-input">
                            <label> Event </label>
                            <select id="exampleFormControlInput1" name="event" onchange="yesnoCheck()">
                                <option style="color: black;">Select</option>
                                <option value="Code Escape 3.0" style="color: black;">Code Escape 3.0</option>
                                <option value="Tech Quiz" style="color: black;" id="yesCheck">Tech Quiz(Only Leader Has To Register)</option>
                                <!-- <option value="Yell-Out-Loud" style="color: black;">Yell-Out-Loud</option> -->
                                <!-- <option value="Morse Code" style="color: black;">Morse Code</option> -->
                            </select>
                        </div>
                        <div class="mb-3 form-input" id="ifYes" style="display: none;">
                        <label> Team Mate Details </label>
                            <input type="text" name="teammate" id="exampleFormControlInput1" placeholder="Name" required>
                        </div>
                        

                        
                        <div class="submit-button">
                            <button value="Register" id="submit-btn" name="submit" type= "submit" style="border-radius:15px;">Submit</button>
                        </div>

                        <p class="msg"></p>
                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <!-- jquery cdn link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- team-mate js -->
    <script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById("yesCheck").selected) {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
    </script>
    <script> 
        //jquery scripts here
        $(document).ready(function () {
            //script to submit the form
            $('#query-form').submit(function (e) {
                e.preventDefault();
                
                //making a ajax call to register/login a user
                $.ajax({
                    url: "registervalidation.php",
                    cache: false,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    data: new FormData(this),
                    success: function (data) {
                        console.log(data);
                        $('.msg').text(data).show();

                        setTimeout(function () {
                            location.href = "../";
                        }, 10000);
                    }
                });
            })
        });
    </script>

</body>

</html>