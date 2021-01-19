<!-- load external things -->
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="js/a.js"></script>
    <script src="js/b.js"></script>
    <script src="js/c.js"></script> 

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/npm.js"></script>


<body class="a bg-light">
<div class="container-fluid ">
      <div class="row bg-dark p-3" style="border-bottom: 3px solid red;">
        <div class="col-md-8 ">
          <h1 class="top_h1 text-light"><a class="head_link text-success" href="dashboard.php"><b>Pragathi Book Shop : Dashboard</b></a></h1>
          <a class="nav-link mb-1 mt-3" style="font-size: 30px; color: silver" href="dashboard.php"><i class="fas fa-home"></i> <b>Home</b></a>
        </div>
      </div>
    </div><!-- Nav Bar End -->
    <title>Pragathi Book Shop</title>
<style type="text/css">
    table.student_table_03{
  text-align: center;
  margin-top: -5px;

}
table.student_table_03 th{
  border: 2px solid black;
  text-align: center;
  color: white;
  font-size: 1vw;
  background-color: maroon;
}
table.student_table_03 td{ border: 1px solid black;
  background-color: white;
  font-size: 1vw;
  height : 10px;
  color: black;
}

</style>
<?php
require_once 'connection.php';
  $count=1;
  $viewquery = " SELECT * FROM customer";
  $viewresult = mysqli_query($con,$viewquery);

  echo '
  
  <h1 style= "padding :1%; color:maroon; font-size:3vw; "> <b>Customer Details</b> </h1>


  <table style= "padding :2%; width:99%; margin-left:0.5%;" class="student_table_03"> 
  <tr>
    <th style="width : 10%"> First Name </th>
    <th style="width : 10%"> Last Name </th>
    <th style="width : 8%"> Date of Birth </th>
    <th style="width : 10%"> Phone Number </th>
    <th style="width : 10%"> Email </th>
    <th style="width : 15%"> Addresss </th>

    <th style="width : 5%"> Edit </th>  
    <th style="width : 5%"> Delete </th>  
  </tr>';

  while($row = mysqli_fetch_assoc($viewresult))
  {
  echo '
  <tr>
  <td>'.$row['first_name'].'</td>
  <td>'.$row['last_name'].'</td>
  <td>'.$row['date_of_birth'].'</td>
  <td>'.$row['phone'].'</td>
  <td>'.$row['email'].'</td>
  <td>'.$row['address'].'</td>

  <td><a href="edit.php?customer_id='.$row['customer_id'].'">Edit</a></td>
  <td><a href="delete.php?customer_id='.$row['customer_id'].'">Delete</a></td>
  </tr>
  ';
  $count++;
  }
  echo '</table>';






?>
</body>