<?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="jq/jq.js" type="text/javascript"></script>

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

    <title>Pragathi Book Shop</title>  
  
  </head>
  <body class="a bg-light">
    <!-- ********************** Start Nav Bar ************************ -->
    <div class="container-fluid "> 
      <div class="row  p-3" style="border-bottom: 3px solid red; background-color: black">


        <div class="col-md-8 "><!-- Header Box-->
           <a href="dashboard.php"><img src="img/logo.png" style="width: 25%; float: left; height: 100px; cursor: pointer; padding-right: 5%;"></a>
          <h1 class="top_h1 text-light"><a class="head_link" style="color: silver;" href="dashboard.php"><b> Pragathi Book Shop :  Dashboard</b></a></h1>
          <?php $a = $_SESSION['username'];
              echo '<h2 style="font-size:20PX; text-transform:uppercase; color:white; margin-top: 1%;"><b>Welcome! Hi '.$a.'</b></h2>'; ?>
        </div>

        <div class="col-md-5"> <!-- Search Bar Box-->
          <form class="search_bar" action="dashboard.php" method="POST">
            <input type="search" name="se">
            <button type="submit" name="search"><i class="fas fa-search"></i></button>
            <?php
              if(isset($_POST['search'])){
                $search = $_REQUEST['se'];
                 echo '<script>window.location.href="search.php?search='.$search.'"; </script>';
              }
            ?>
          </form>
        </div>
      </div>
    </div>

<!-- **********************End Nav Bar & Start Setting Pannel ************************ -->

<!-- **********************Start Body Content Pannel ************************ -->

    <div id="container" class="container-fluid">
      <div class="row">
        <div id="section_bar" class="col-md-2" style="background-color: maroon;">
            <ul class="navbar-nav">


<?php 
if($a=='admin'){

?>
<!-- **********************Start Section Pannel ************************ -->
      <li class="nav-item">
          <a class="nav-link mb-1 mt-3" style="font-size: 30px; color: black" href="dashboard.php"><i class="fas fa-home"></i> <b>Home</b></a>
      </li>

      <!-- ................. Customers .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-user mr-3" style="color:black; font-size:35px;"></i><b> Customers</b></a>
          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="view.php">Customers List</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Books .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-file-signature mr-3" style="color:black; font-size:35px;"></i><b>Books</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light"href="dashboard.php?id=16">Add Books</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light"href="dashboard.php?id=2">Books Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Books Categories .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-clock mr-3" style="color:black; font-size:35px;"></i><b> Books Categories</b></a>
          <div id="submenu-1-10" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=17">Add Categories</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=18">View Categories</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Autor .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><i class="fas fa-user-edit mr-3" style="color:black; font-size:35px;"></i><b>Authors</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=32">Add Authors</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=33">View Authors</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Oders .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="far fa-calendar-check mr-3" style="color:black; font-size:35px;"></i><b> Oders</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=8">View Oders</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Book Store .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-6" aria-controls="submenu-1-6"><i class="fas fa-book mr-3" style="color:black; font-size:35px;"></i><b> Book Store</b></a>
          <div id="submenu-1-6" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=10">Add Books for Store</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=10">View Book Store</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Payments.................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px;" aria-expanded="false" data-target="#submenu-1-7" aria-controls="submenu-1-7"><i class="fas fa-credit-card mr-3" style="color:black; font-size:35px;"></i><b>Payments</b></a>
          <div id="submenu-1-7" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=12">View Payments</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Editors .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px;" aria-expanded="false" data-target="#submenu-1-8" aria-controls="submenu-1-8"><i class="fas fa-users-cog mr-3" style="color:black; font-size:35px;"></i><b>Workers</b></a>
          <div id="submenu-1-8" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=14">View Workers List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=15">Add Workers</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:black; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="admin_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

<!-- **********************End Admin Section Pannel ************************ -->

<?php } else{?>

<!-- **********************Start Editor Section Pannel ************************ -->

      <li class="nav-item">
          <a class="nav-link mb-1 mt-3" style="font-size: 30px; color: silver" href="dashboard.php"><i class="fas fa-home"></i> <b>Home</b></a>
      </li>
      <!-- ................. Customers .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-user mr-3" style="color:black; font-size:35px;"></i><b> Customers</b></a>
          <div id="submenu-1-1" class="collapse submenu" style="">
              <ul class="nav flex-column">
                <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="view.php">Customers List</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Books .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-17" aria-controls="submenu-1-17"><i class="fas fa-file-signature mr-3" style="color:black; font-size:35px;"></i><b>Books</b></a>
          <div id="submenu-1-17" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light"href="dashboard.php?id=16">Add Books</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light"href="dashboard.php?id=2">Books Details</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Books Categories .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;"  data-target="#submenu-1-10" aria-controls="submenu-1-10"><i class="fas fa-clock mr-3" style="color:black; font-size:35px;"></i><b> Books Categories</b></a>
          <div id="submenu-1-10" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=17">Add Categories</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=18">View Categories</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

       <!-- ................. Autor .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;"  data-target="#submenu-1-32" aria-controls="submenu-1-32"><i class="fas fa-user-edit mr-3" style="color:black; font-size:35px;"></i><b>Authors</b></a>
          <div id="submenu-1-32" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=32">Add Authors</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=33">View Authors</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
       <!-- ................. Oders .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-5s" aria-controls="submenu-1-5s"><i class="far fa-calendar-check mr-3" style="color:black; font-size:35px;"></i><b> Oders</b></a>
          <div id="submenu-1-5s" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=8">View Oders</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>
      <!-- ................. Book Store .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" aria-expanded="false" style="font-size: 20px;" data-target="#submenu-1-6" aria-controls="submenu-1-6"><i class="fas fa-book mr-3" style="color:black; font-size:35px;"></i><b> Book Store</b></a>
          <div id="submenu-1-6" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=10">Add Books for Store</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=10">View Book Store</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Payments.................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px;" aria-expanded="false" data-target="#submenu-1-7" aria-controls="submenu-1-7"><i class="fas fa-credit-card mr-3" style="color:black; font-size:35px;"></i><b>Payments</b></a>
          <div id="submenu-1-7" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="dashboard.php?id=12">View Payments</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>

      <!-- ................. Settings .................... -->
      <li class="nav-item">
          <a class="nav-link text-light" href="#" data-toggle="collapse" style="font-size: 20px;" aria-expanded="false" data-target="#submenu-1-31" aria-controls="submenu-1-31"><i class="fas fa-cogs mr-3" style="color:black; font-size:35px;"></i><b>Settings</b></a>
          <div id="submenu-1-31" class="collapse submenu" style="">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="editor_pass.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="editor_username_change.php">Username Change</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light ml-3" href="logout.php">Logout</a>
                  </li>
                  <div class="dropdown-divider"></div>
              </ul>
          </div>
      </li>


<!-- **********************End Editor Section Pannel ************************ -->

<?php } ?>
            </ul>
        </div>
        <div class="col-md-10 bg-light" style="padding-bottom:2%; padding-top:1%; height: 100%;">
        <div class="col-md-10 bg-light" style="padding-bottom:2%; padding-top:1%;">
<?php

// <!-- **********************Start Book View Section Pannel ************************ -->

if(isset($_REQUEST['id']))
{

              $id = $_REQUEST['id'];
               if($id==2)
               {
                $count=1;
                $viewquery = " SELECT * FROM books join author on books.author_id = author.author_id join book_cat on books.cat_id = book_cat.cat_id ";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <h1 class="student_h1"> Books Detail </h1>


                <table style="width : 100%;" class="student_table"> 
                  <tr>
                    <th style="width : 15%"> Book Title </th>
                    <th style="width : 10%"> Price </th>
                    <th style="width : 40%"> Description </th>
                    <th style="width : 30%"> Author Name </th>
                    <th style="width : 10%"> Categori </th>
                    <th style="width : 10%"> Quantity </th>
                    <th style="width : 10%"> Edit </th>
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  echo '
                  <tr>
                  <td>'.$row['book_title'].'</td>
                  <td>'.$row['book_price'].'</td>
                  <td>'.$row['description'].'</td>
                  <td>'.$row['author_name'].'</td>
                  <td>'.$row['cat_name'].'</td>
                  <td>'.$row['qnt'].'</td>

                  <td><a href="edit.php?book_id='.$row['book_id'].'">Edit</a></td>
                  <td><a href="delete.php?book_id='.$row['book_id'].'">Delete</a></td>
                  </tr>
  
                  ';
                  $count++;
                }
                echo '</table>';
              }


// <!-- **********************End Book View Section Pannel ************************ -->
// <!-- **********************Start Book Catodories View Section Pannel ************************ -->

            $id = $_REQUEST['id'];
              if($id==18)
              {
                $count=1;
                $viewquery = " SELECT * FROM book_cat";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <h1 class="student_h1"> Book Categories Details </h1>


                <table style="width : 40%;" class="student_table"> 
                  <tr>
                    <th style="width : 10%"> Categori Name </th>
                    <th style="width : 10%"> Edit </th>
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  echo '
                  <tr>
                  <td>'.$row['cat_name'].'</td>

                  <td><a href="edit.php?cat_id='.$row['cat_id'].'">Edit</a></td>
                  <td><a href="delete.php?cat_id='.$row['cat_id'].'">Delete</a></td>
                  </tr>
  
                  ';
                  $count++;
                }
                echo '</table>';
              }

// <!-- **********************End Book Catodories View Section Pannel ************************ -->

            
// <!-- **********************Start View Workers Section Pannel ************************ -->

            $id = $_REQUEST['id'];
              if($id==14)
              {
                $count=1;
                $viewquery = " SELECT * FROM editor";
                $viewresult = mysqli_query($con,$viewquery);
      

                echo '
                <h1 class="student_h1"> Editors Details </h1>


                <table class="student_table"> 
                  <tr>
                    <th style="width : 15%"> Name </th>
                    <th style="width : 15%"> Address </th>
                    <th style="width : 11%"> Phone Number </th>
                    <th style="width : 10%"> Email </th>
                    <th style="width : 8%"> Gender </th>
                    <th style="width : 5%"> Edit </th>  
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  if(!empty($row['full_name'])){

                  echo '
                  <tr>
                  <td>'.$row['full_name'].'</td>
                  <td>'.$row['address'].'</td>
                  <td>'.$row['phone_number'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['gender'].'</td>
                  <td><a href="edit.php?edt_id='.$row['editor_id'].'">Edit</a></td>
                  <td><a href="delete.php?edt_id='.$row['editor_id'].'">Delete</a></td>
                  </tr>
                  ';
                  $count++;
                  }
                }
                echo '</table>';
              }
// <!-- **********************End View Workers Section Pannel ************************ -->
// <!-- **********************Start Add Workers Section Pannel ************************ -->

            $id = $_REQUEST['id'];
               if($id==15)
               {


                echo '<form class="reg_form bg-light" action="dashboard.php?id=15" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a ml-3"><b>Full Name</b></label>
                        <input type="text" class="form-control ml-3" name="name" placeholder="Full Name">
                      </div>
                      <div class="form-group col-md-5">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control ml-3" name="email" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="form-group col-md-10">
                      <label for="address"><b>Address</b></label>
                      <input type="text" class="form-control"  name="address" placeholder="Address">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>

                      <div class="form-group col-md-4">
                        <label for="inputState"><b>Gender</b></label>
                        <select id="inputState" name="gender" class="form-control">
                          <option selected>Male</option>
                          <option>Female</option>
                        </select>
                      </div>

                       <div class="form-group col-md-4">
                      <label for="phone"><b>Usename</b></label>
                      <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Password">
                    </div>

                      <div class="form-group col-md-4">
                      <label for="phone"><b>Password</b></label>
                      <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="phone"><b>Confirm Password</b></label>
                      <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-dark" style="border-radius:20px;">Register</button>
                  ';
                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];
                    $uname = $_REQUEST['uname'];
                    $pass = $_REQUEST['pass'];
                    $conf_pass = $_REQUEST['conf_pass'];


                    if(!empty($fname)){
                      if(!empty($emails)){
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                          if(!empty($address)){
                            if(!empty($phone)){
                              if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                if(!empty($gender)){
                                  if(!empty($uname)){
                                        if(!empty($pass)){
                                          if(!empty($conf_pass)){
                                            if($pass==$conf_pass){
                                                $query2="SELECT * FROM editor WHERE email='$emails'";
                                                    $sql2=mysqli_query($con,$query2);

                                                    if(mysqli_num_rows($sql2)>0){
                                                        echo "Email already Exsisted";
                                                    }else{
                                                        $query3="SELECT * FROM editor WHERE username='$uname'";
                                                        $sql3=mysqli_query($con,$query3);

                                                        if(mysqli_num_rows($sql3)>0){
                                                            echo "Username already Exsisted";
                                                        }else{
                                                              $query3="SELECT * FROM lecture WHERE username='$uname'";
                                                              $sql3=mysqli_query($con,$query3);

                                                              if(mysqli_num_rows($sql3)>0){
                                                                  echo "Username already Exsisted";
                                                              }else{
                                                                    $q1="INSERT INTO editor(full_name,address,phone_number,email,gender,password,username) values('$fname','$address','$phone','$emails','$gender','".md5($pass)."','$uname')";
                                                                          $res1=mysqli_query($con,$q1);
                                                                          if ( $res1) {

                                                                               echo '<script>alert("Data Saved is Scussessfully.");
                                                                               window.location.href="dashboard.php";
                                                                                            </script>';
                                                                              
                                                                          }else{
                                                                            echo "<script>alert(\"Data Save is Not Scussess\");</script>";
                                                                          }
                                                                    }
                                                              }
                                                          }
                                            }else{echo "Password is Not Match";}
                                          }else{ echo "Confirm Password";}
                                        }else{ echo "Enter Password";}
                                  }else{ echo "Enter Username";}
                                }else{ echo "Select Gender";}
                              }else {echo "Enter Valid Phone Number";}
                            }else{ echo "Enter Phone Number";}
                          }else{ echo "Enter Address";}
                        }else {echo "Enter Valid Email Address";}
                      }else{ echo "Enter Email Address";}
                    }else{ echo "Enter Full Name";} 
                }echo '</form>'; //Register Form Validation

            }

// <!-- **********************End Add Workers Section Pannel ************************ -->
// <!-- **********************Start Book Add Section Pannel ************************ -->

             $id = $_REQUEST['id'];
                 $cdate = date("Y/m/d");
               if($id==16)
               {
                


                 echo '<form class="reg_form bg-light" action="dashboard.php?id=16" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="title" class="a ml-3"><b>Book Title</b></label>
                        <input type="text" class="form-control ml-3" name="title" placeholder="Book Title">
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="price"><b>Price</b></label>
                      <input type="text" class="form-control"  name="price" placeholder="Price">
                    </div>

                    <div class="form-group col-md-10">
                      <label for="desc"><b>Description </b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description ">
                    </div>

                      <div class="form-group col-md-3">
                        <label for="inputState"><b>Author</b></label>
                        <select id="inputState" name="author" class="form-control">';
                          $q3 = "SELECT * FROM author";
                            $res3 = mysqli_query($con,$q3);
                            $c=1;
                            while($row=mysqli_fetch_assoc($res3)){
                              echo "<option>".$row['author_name']."</option>";
                              $c++;
                            }
                        echo '</select>
                      </div>

                      <div class="form-group col-md-3">
                        <label for="inputState"><b>Categories</b></label>
                        <select id="inputState" name="cat" class="form-control">';
                          $q3 = "SELECT * FROM book_cat";
                            $res3 = mysqli_query($con,$q3);
                            $c=1;
                            while($row=mysqli_fetch_assoc($res3)){
                              echo "<option>".$row['cat_name']."</option>";
                              $c++;
                            }
                        echo '</select>
                      </div>

                       <div class="form-group col-md-4">
                      <label for="phone"><b>Quantity</b></label>
                      <input type="text" style="text-transform: uppercase;" class="form-control" name="qnt" placeholder="Quantity">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-primary" style="border-radius:20px; font-size :20px;">Save</button>
                  ';

                 
                  if(isset($_POST['submit'])){
                    $title = $_REQUEST['title'];
                    $price = $_REQUEST['price'];
                    $desc = $_REQUEST['desc'];
                    $author = $_REQUEST['author'];
                    $cat = $_REQUEST['cat'];
                    $qnt = $_REQUEST['qnt'];
                    $cdate = date("Y/m/d");

                          if(!empty($title)){
                             if(!empty($price)){
                              if(!empty($desc)){
                                if(!empty($qnt)){


                                    $q4 = "SELECT * FROM author WHERE author_name='$author'";
                                    $res4 = mysqli_query($con,$q4);
                                    $row2 = mysqli_fetch_assoc($res4);
                                    $author_id = $row2['author_id'];

                                    $q4 = "SELECT * FROM book_cat WHERE cat_name='$cat'";
                                    $res4 = mysqli_query($con,$q4);
                                    $row2 = mysqli_fetch_assoc($res4);
                                    $cat_id = $row2['cat_id'];


                                            $query3="SELECT * FROM books WHERE  book_title='$title'";
                                            $sql3=mysqli_query($con,$query3);

                                            if(mysqli_num_rows($sql3)>0)
                                            {
                                              echo '<script>alert("This Book is Alrady Here.");</script>';
                                            }else{

                                                $q1="INSERT INTO books(book_title,book_price,description,author_id,cat_id,qnt,trn_date) values('$title','$price','$desc','$author_id','$cat_id','$qnt','$cdate')";
                                                $res1=mysqli_query($con,$q1);
                                                if ( $res1)
                                                  {
                                                       echo '<script>alert("Book Saved is Scussessfully.");
                                                        </script>';
                                                  }else{
                                                    echo "<script>alert(\"Book Save is Not Scussess\");</script>";
                                                  }
                                            }

                                    }else{ echo "Enter Quantity";}
                                  }else{ echo "Enter Description";}
                                }else{ echo "Enter Price";}
                              }else{ echo "Enter Title";}
                        
            }

            }
// <!-- **********************End Book Add Section Pannel ************************ -->
// <!-- **********************Start Categori Section Pannel ************************ -->
              $id = $_REQUEST['id'];
              $nowdate = date("Y/m/d");
               if($id==17)
               {
                echo '<form class="reg_form bg-light" action="dashboard.php?id=17" method="POST">
                      <div class="form-group col-md-6">

                          <div class="form-group col-md-8">
                      <label for="phone"><b>Categori Name</label>
                      <input type="text" class="form-control" name="cat_name" placeholder="Categori Name">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-5 btn-dark" style="border-radius:20px;">Add Recode</button></br>
                  ';
                  if(isset($_POST['submit'])){
                    $cat_name = $_REQUEST['cat_name'];

                            if(!empty($cat_name)){
                                $q4 = "SELECT * FROM book_cat WHERE cat_name='$cat_name'";
                                $res4 = mysqli_query($con,$q4);

                                if(mysqli_num_rows($res4)>0)
                                {
                                  echo '<script>alert("Book Categori Alrady Saved.");
                                  </script>';
                                }
                                else{
                                  $q1="INSERT INTO book_cat(cat_name) values('$cat_name')";
                                        $res1=mysqli_query($con,$q1);
                                        if ( $res1)
                                        {

                                             echo '<script>alert("Book Categori Saved is Scussessfully.");
                                              </script>';
                                        }else{
                                          echo "<script>alert(\"Book Categori Save is Not Scussess\");</script>";
                                        }
                                }
                            }else{ echo "Please Enter Name";}
                }echo '</form>'; //Register Form Validation

            }

// <!-- **********************End Categori Section Pannel ************************ -->

// <!-- **********************Start Author Section Pannel ************************ -->

              $id = $_REQUEST['id'];
               if($id==32)
               {


                echo '<form class="reg_form bg-light" action="dashboard.php?id=32" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a ml-3"><b>Author Name</b></label>
                        <input type="text" class="form-control ml-3" name="name" placeholder="Author Name">
                      </div>

                      <div class="form-group col-md-5">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control ml-3" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-dark" style="border-radius:20px;">Add</button>
                  ';
                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $phone = $_REQUEST['phone'];

                    if(!empty($fname)){
                      if(!empty($emails)){
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                            if(!empty($phone)){
                              if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
     
                                        $query3="SELECT * FROM author WHERE author_name='$uname'";
                                        $sql3=mysqli_query($con,$query3);

                                        if(mysqli_num_rows($sql3)>0){
                                            echo "Username already Exsisted";
                                        }else{
                                              $q1="INSERT INTO author(author_name,email,phone) values('$fname','$emails','$phone')";
                                                    $res1=mysqli_query($con,$q1);
                                                    if ( $res1) {

                                                         echo '<script>alert("Data Saved is Scussessfully.");
                                                         window.location.href="dashboard.php";
                                                                      </script>';
                                                        
                                                    }else{
                                                      echo "<script>alert(\"Data Save is Not Scussess\");</script>";
                                                    }
                                              }
                                                              
                                                          
                              }else {echo "Enter Valid Phone Number";}
                            }else{ echo "Enter Phone Number";}
                        }else {echo "Enter Valid Email Address";}
                      }else{ echo "Enter Email Address";}
                    }else{ echo "Enter Full Name";} 
                }echo '</form>'; //Register Form Validation

            }

// <!-- **********************End Author Section Pannel ************************ -->
// <!-- **********************Start Author View Section Pannel ************************ -->



            $id = $_REQUEST['id'];
              if($id==33)

              {
                $count=1;
                $viewquery = " SELECT * FROM author";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <h1 class="student_h1"> Authors List </h1><br>


                <table class="student_table" style="width : 80%;"> 
                  <tr>
                    <th style="width : 35%"> Author Name </th>
                    <th style="width : 15%"> Author Email </th>
                    <th style="width : 15%"> Author Phone Number </th>  
                    <th style="width : 5%"> Edit </th>  
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  echo '
                  <tr>
                  <td>'.$row['author_name'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['phone'].'</td>
                  <td><a href="edit.php?author_id='.$row['author_id'].'">Edit</a></td>
                  <td><a href="delete.php?author_id='.$row['author_id'].'">Delete</a></td>
                  </tr>




                  
                  ';
                  $count++;
                }
                echo '</table>';
              }

// <!-- **********************End Author View Section Pannel ************************ -->
}else{ 
// <!-- **********************Start Pie Chart Section Pannel ************************ -->
  $viewquery1 = "SELECT * FROM book_cat";
  $viewresult1 = mysqli_query($con,$viewquery1);

 

  ?>
  <h2>Books Summery</h2>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Task', 'Hours per Day'],

<?php while($row = mysqli_fetch_assoc($viewresult1)){
       $viewquery = " SELECT * FROM books where cat_id = '".$row['cat_id']."'";
      $viewresult = mysqli_query($con,$viewquery);
      $stddata = mysqli_num_rows($viewresult);

        echo "
          ['".$row['cat_name']."',  ".$stddata."],
"; } ?>
        ]);

        var options = {
          title: 'Books Summery Details'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<div class="col-md-10" id="piechart" style=" height: 30vw; float: left;"></div>

// <!-- **********************End Pie Chart Section Pannel ************************ -->

<?php } ?>

<style type="text/css">
  form.reg_form{
    width: 100%;
    margin-top: 2%;
    background-color: gray;
    border-radius: 30px;
    padding: 30px;
  }
  form.reg_form label{
    font-size: 20px;

  }
  form.reg_form input{
    font-size: 20px;
  }


</style>

        </div>
      </div>
    </div>
 </div>
<!-- **********************End Body Content Pannel ************************ -->
  </body>
</html>