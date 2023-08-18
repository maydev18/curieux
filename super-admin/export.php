 <?php
    session_start();
    include ("../includes/connection.php");
	$sql = "SELECT * FROM `register`"; 
    $setRec = mysqli_query($con, $sql);
    $columnHeader = '';  
    $columnHeader = "SNo." . "\t" . "Name" . "\t" . "College" . "\t" . "Course" . "\t" ."Year" . "\t". "Email" . "\t". "Phone" . "\t". "Event" . "\t". "Team-Mate" . "\t" ."Time" . "\t";  
    $setData = '';  
    while ($rec = mysqli_fetch_row($setRec)) 
    {  
      $rowData = '';  
        foreach ($rec as $value) {  
            $value = '"' . $value . '"' . "\t";  
            $rowData .= $value;  
     }  
      $setData .= trim($rowData) . "\n";  
    }  
  
    header("Content-type: application/octet-stream");  
    header("Content-Disposition: attachment; filename=registration.xls");  
    header("Pragma: no-cache");  
    header("Expires: 0");  
    ob_get_clean();

    echo ucwords($columnHeader) . "\n" . $setData . "\n";  
	?>