<?php 
    require("includes/connection.php");
    require("phpmailer/simple.php");

    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $college=$_POST['college'];
        $course=$_POST['course'];
        $year=$_POST['year'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $event=$_POST['event'];
        $teammate=$_POST['teammate'];
        
        if($event=="Code Escape 3.0")
        {
            $rules="• The contest platform we will be using is HackerRank.
                <br>• Participants will be given a set of coding problems and must provide solutions.
                <br>• Partial scores will also be awarded for sub-optimal solutions.
                <br>• The participant who solves the maximum number of problems the earliest will be the Baazigar!🏆
                <br>• Top 3 winners will grab cash prizes worth ₹5000.💸
                <br>• Lone wolves only.";
            $link="https://chat.whatsapp.com/LdyBOweZNoK5Or7V5Marsh";
        }
        else
        {
            $rules="• The participants will compete in teams of two.👥
                <br>• This contest will be divided into different rounds where each team will compete, and only the top teams from each round will progress to the next. 🎖️
                <br>• The rounds will be based on technology-related topics, and their difficulty will increase subsequently.
                <br>• In the final round, a maximum of four teams will compete in a buzzer round to ferret out & select the winner of the competition.🏆
                <br>• The top two winners will receive cash prizes up to ₹5,000.💰";
            $link="https://chat.whatsapp.com/EjzUSQKXheGHl7rGFKkR4g";
        }
        $checkq= "SELECT * from `register` WHERE `email`='$email'";
        $checkresult= mysqli_query($con,$checkq);
        
        $checkrow= mysqli_fetch_assoc($checkresult);

        $flag=false;
        if($event==$checkrow['event'])
        {
            $flag=true;
        }
        
            if(!$flag)
            {
            $query= "INSERT INTO `register` (`name`, `college`, `course`, `year`, `email`, `phone`, `event`, `teammate`, `time`) VALUES ('$name','$college','$course','$year','$email','$phone','$event','$teammate', current_timestamp())";

            $SUBJECT="Registration confirmation email";
            
            $MESSAGE="Hi there! "."<br>".$name.", this is a confirmation email for your registration on our website." ."<br>"." Following are the details of your registration: "."<br>"."Name: ".$name."<br>"."Email: ".$email."<br>"."College: ".$college."<br>"."Event: ".$event."<br>"."Event Rules: <br>".$rules."<br>"."Join the Whatsapp Group Link: ".$link."<br>"."Thank you for registering in Phoenix'23!";
                    
            $data = mysqli_query($con, $query);

            if($data){
                echo "Thank you for registering in Phoenix'23!  Details will be sent to your registered email address. ";
                smtp_mailer($email, $SUBJECT, $MESSAGE);
            }
            else
                {
                echo "Something went wrong. Try Again!";
                }
            }
            else
            {
                echo "You have already registered in this event. Please check your email for details.";
            }
          
     
        
    }
?>