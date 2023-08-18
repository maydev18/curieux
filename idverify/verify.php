<?php

function vigenere_decode($ciphertext, $key)
{
    /*
    Decodes ciphertext that was encoded with the Vigenere cipher using a given key.
    Assumes that ciphertext and key consist of only alphanumeric characters.
    */
    // Convert ciphertext and key to uppercase and remove any non-alphanumeric characters
    $ciphertext = preg_replace('/[^A-Za-z0-9]/', '', strtoupper($ciphertext));
    $key = preg_replace('/[^A-Za-z0-9]/', '', strtoupper($key));

    // Generate a Vigenere square
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $vigenere_square = array();
    for ($i = 0; $i < 36; $i++) {
        for ($j = 0; $j < 36; $j++) {
            $vigenere_square[$i][$j] = $alphabet[($i + $j) % 36];
        }
    }

    // Decode the ciphertext with the key using the Vigenere square
    $plaintext = '';
    $key_index = 0;
    $ciphertext_len = strlen($ciphertext);
    for ($i = 0; $i < $ciphertext_len; $i++) {
        $col = strpos($alphabet, $key[$key_index]);
        $row = array_search($ciphertext[$i], $vigenere_square[$col]);
        $plaintext .= $alphabet[$row];
        $key_index = ($key_index + 1) % strlen($key);
    }

    return $plaintext;
}
$key = "rhoishmwoetp";
$cid = $_GET['c'];
$id = vigenere_decode($cid,$key);

$servername="sql107.epizy.com";
$username="epiz_32153738"; 
$password="1YXhWlEEPRKZeSe";  
$database="epiz_32153738_curieuxweb"; 


$conn = mysqli_connect($servername, $username, $password, $database);  
if (!$conn) {
    die("Couldn't connect to DB. Error =>" . mysqli_connect_error());
}



?>
<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="verify.css">
 <title>Curieux - ID Verification</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="padding-left: 2vw; padding-right: 2vw;">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <img src="../images/assets/logopic.png" width="30" height="30" class="d-inline-block align-top" alt="" >
        Curieux</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Home</a>
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
    <?php
    $query = "SELECT * FROM members WHERE ID = '$id'";
    $result = mysqli_query($conn,$query);


    $row = mysqli_fetch_assoc($result);

    if($row){

        echo '
        <div class="card mx-auto verify-card" style="width: 18rem;">
          <img src="tick.png" class="card-img-top tick mx-auto .mt-10" alt="...">
          <div class="card-body">
            <h5 class="card-title mx-auto card-heading">Card is Valid.</h5>
            <p class="card-text mx-auto"> </p>
            <div class="mx-auto details">
            <a href="#" class="btn btn-primary mx-auto" id="showBtn">Show Details</a>
            </div>
                </div>
            </div>
    <br>
    <center>
    <div class="hide details-table-div" id="table">
        <table class="mx-auto details-table">
            <tr>
                <td colspan="2" align="center">
                    <img src="'.$row["img"].'" class="member-img">
                </td>
            </tr>
            <tr>
                <td>ID No:</td>
                <td>'.$row["ID"].'</td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>'.$row["name"].'</td>
            </tr>
            <tr>
                <td>Roll No:</td>
                <td>'.$row["roll"].'</td>
            </tr>
            <tr>
                <td>Designation:</td>
                <td>'.$row["desig"].'</td>
            </tr>
            <tr>
                <td>Event Name:</td>
                <td>'.$row["event"].'</td>
            </tr>
        </table>
    </div>
     </center>
        ';
    }else{
        echo '
        <div class="card mx-auto verify-card" style="width: 18rem;">
  <img src="cross.png" class="card-img-top tick mx-auto .mt-10" alt="...">
  <div class="card-body">
    <h5 class="card-title mx-auto card-heading">Card is Invalid.</h5>
    <p class="card-text mx-auto"> </p>
    <div class="mx-auto details">
    <a href="../index.php" class="btn btn-primary mx-auto">Return to Home</a>
    </div>
        </div>
</div>
        ';
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        btn = document.getElementById('showBtn');
        table = document.getElementById('table');
        btn.onclick = function(e) {
            e.preventDefault();
            if (table.classList.contains('hide')) {
                table.classList.remove('hide');
                btn.innerText = "Hide Details";
            }else{
                table.classList.add('hide');
                btn.innerText = "Show Details";
            }
        };
    </script>
</body>
</html>
