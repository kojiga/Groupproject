<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>

.section{

padding-left: 320px;
padding-top: 100px;
padding-right: 20px;

}
.td1,th {
  width: 200px ;
}
td{
width: 78px ;

}
.table1{

      margin-left: auto;
  margin-right: auto;
}

</style>
<style type="text/css">
        
        .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #004578;
        padding: 10px;
        padding-left:700px;
        color: #fff;
        
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    </style>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/sidenavigation.css">
   <link rel="stylesheet" type="text/css" href="css/stylenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">UOV</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="schedule.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Event Calender</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Class Timetable</span>
          </a>
        </li>
        <li>
          <a href="generatett.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Study plan</span>
          </a>
        </li>
        <li>
          <a href="updateprogress.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Update progress </span>
          </a>
        </li>
        <li>
          <a href="Assignhours.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Assign hours</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Timer</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>



<div class="fixed-header" style = "position:fixed; left:240px;width:100%">
        <div class="container">
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Products</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
            </nav>
        </div>
    </div>

<div class="section">

    <table class="table1">
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
           
            
        </tr>
        <tr>

<?php
                    

                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, 'phpcrud');

                    
              
                    $array=array("monday","tuesday","wednesday","thursday","friday");

                    for($x=0; $x < 5; $x=$x+1){
                        ?>

                        
                            <td class="td1">
                        <?php
                    $query="SELECT $array[$x] FROM student group by $array[$x]";

                     $query_run = mysqli_query($connection, $query);
                     if($query_run)
                     {
                    foreach($query_run as $row)
                    {
                    	$arr[]=$row[$array[$x]];
                        



                    }

}

        $n = sizeof($arr);  
        $temp = 0;  
         for($i=0; $i < $n; $i++){  
                 for($j=1; $j < ($n-$i); $j++){  
                          if(substr($arr[$j-1],5) < substr($arr[$j],5) ){  
                                 //swap elements  
                                 $temp = $arr[$j-1];  
                                 $arr[$j-1] = $arr[$j];  
                                 $arr[$j] = $temp;  
                         }  
                          
                 }  
         } 


         $start=6.00;
$count=0;
for($i=0; $i < $n; $i++){
    $count=$count+1;
    $result=substr($arr[$i], 5);
    $find=substr($arr[$i], 7,1);

    if($count==2){
        $assignhours=0.30;


         
         $start=$start+$assignhours;
         $val=substr($start,2,2);
         
          
        echo "break";
        echo "</br>";
    }

        if($result==4){

                        if($find=="p"){

                            $assignhours=1;

                            
                            

                        }
                        else{
                            
                            $assignhours=1;

                        }

                            


                    }
                    elseif ($result==3) {
                        if($find=="p"){
                            $assignhours=1;


                        }
                        else{

                            $assignhours=1;
                        }
                        
                    }
                    elseif ($result==2) {
                        if($find=="p"){
                            $assignhours=0.30;

                        }
                        else{

                            $assignhours=0.30;
                        }
                        
                    }
                   
                    ?>

                    <table border="1">
                        <tr>
                            
        <td><?php

         $start=number_format($start,2);
         
         $val=substr($start, -2);
         if($val==60){
          $start=$start+0.40;
         }
         echo number_format($start,2);
        

       
        echo ":";
        $start=$start+$assignhours;
        $start=number_format($start,2);


         $val=substr($start, -2);
         if($val==60){
          $start=$start+0.40;
         }
         echo number_format($start,2);

        ?>
          

        </td>
        <td> <?php echo $arr[$i];
        echo "</br>";?></td>

</tr>
</table>

<?php

}







$a2=array();
array_splice($arr,0,$n,$a2);
                

echo"<br>";
?>

</td>
<?php
                }
            ?>
        </tr>
        </table>
        </div>
           
   
   </body>
</html>