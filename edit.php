<?php
  require_once 'connection.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/c.css">

    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <script type="text/javascript" src="bootstrap/js/npm.js"></script>

    <title>Pragathi Book Shop</title>
  </head>
  <body class="a bg-light">
    <div class="container-fluid ">
      <div class="row p-3" style="border-bottom: 3px solid red; background-color: black;">
        <div class="col-md-8 ">
          <a href="dashboard.php"><img src="img/logo.png" style="width: 25%; float: left; height: 100px; cursor: pointer; padding-right: 5%;"></a>
          <h1 class="top_h1 text-light"><a class="head_link text-light" href="dashboard.php">Pragathi Book Shop</a></h1>
        </div>
      </div>
    </div><!-- Nav Bar End -->


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 bg-light" style="padding-bottom: 2%;">
<?php
if(isset($_REQUEST['author_id']))
{
            $id = $_REQUEST['author_id'];
            $q2 = "SELECT * FROM author WHERE author_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['author_id'];

              if($id==$row1['author_id'])
               {
                echo '<form class="reg_form bg-dark text-light" action="edit.php?author_id='.$id.'" method="POST">
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
                      <input type="text" class="form-control" name="phone"  placeholder="Phone Number">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-3 btn-success" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-4 btn-success"  onclick="window.location.href=\'dashboard.php?id=33\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $phone = $_REQUEST['phone'];

                    if(!empty($fname))
                      {
                        $query3="UPDATE author SET author_name='$fname' WHERE author_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";
                      }
                      if(!empty($emails))
                      {
                        $query3="UPDATE author SET email='$emails' WHERE author_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";
                      }
                       if(!empty($phone))
                      {
                        $query3="UPDATE author SET phone='$phone' WHERE author_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=33\";</script>";
                      }

                }echo '</form>'; //Register Form Validation

            }   
}else if(isset($_REQUEST['cat_id']))
{
            $id = $_REQUEST['cat_id'];
            $q2 = "SELECT * FROM book_cat WHERE cat_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['cat_id'];

              if($id==$row1['cat_id'])
               {
                echo '<form class="reg_form bg-dark text-light" action="edit.php?cat_id='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">


                      <div class="form-group col-md-8">
                      <label for="phone"><b>Categori Name</label>
                      <input type="text" class="form-control" name="cat_name" placeholder="Categori Name">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-3 btn-success" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-4 btn-success"  onclick="window.location.href=\'dashboard.php?id=18\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $cat_name = $_REQUEST['cat_name'];

                      if(!empty($cat_name))
                      {
                        $query3="UPDATE book_cat SET cat_name='$cat_name' WHERE cat_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=18\";</script>";
                      }

                }echo '</form>'; //Register Form Validation

            }   
}
else if(isset($_REQUEST['book_id']))
{
            $id = $_REQUEST['book_id'];
            $q2 = "SELECT * FROM books WHERE book_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['book_id'];

              if($id==$row1['book_id'])
               {
                echo '<form class="reg_form bg-dark text-light" action="edit.php?book_id='.$id.'" method="POST">
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
                   <button type="submit" name="submit" class="btn col-md-3 btn-success" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-4 btn-success"  onclick="window.location.href=\'dashboard.php?id=2\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit']))
                  {
                    $title = $_REQUEST['title'];
                    $price = $_REQUEST['price'];
                    $desc = $_REQUEST['desc'];
                    $author = $_REQUEST['author'];
                    $cat = $_REQUEST['cat'];
                    $qnt = $_REQUEST['qnt'];


                    $q4 = "SELECT * FROM author WHERE author_name='$author'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    $author_id = $row2['author_id'];

                    $q4 = "SELECT * FROM book_cat WHERE cat_name='$cat'";
                    $res4 = mysqli_query($con,$q4);
                    $row2 = mysqli_fetch_assoc($res4);
                    $cat_id = $row2['cat_id'];


                      if(!empty($title))
                        {
                          $loginsql="SELECT * FROM books WHERE book_id='".$id."'";
                            $result=mysqli_query($con,$loginsql);
                            $rows=mysqli_fetch_assoc($result);
                            $a = $rows['book_title'];

                            if($a==$title)
                            {
                                echo "<script type=\"text/javascript\"> alert(\"Subject Code already Here\");</script>";
                              }else{ 
                                $query3="UPDATE books SET book_title ='$title' WHERE book_id='".$id."'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                          }
                      }

                      if(!empty($price))
                      {
                        $query3="UPDATE books SET book_price='$price' WHERE book_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                      if(!empty($desc))
                      {
                        $query3="UPDATE books SET description ='$desc' WHERE book_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                      if(!empty($author))
                      {
                        $query3="UPDATE books SET author_id='$author_id' WHERE book_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                     if(!empty($cat))
                      {
                        $query3="UPDATE books SET cat_id='$cat_id' WHERE book_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                      if(!empty($qnt))
                      {
                        $query3="UPDATE books SET qnt='$qnt' WHERE book_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=2\";</script>";
                      }
                    }

                }echo '</form>'; //Register Form Validation

}  
else if(isset($_REQUEST['edt_id']))
{
            $id = $_REQUEST['edt_id'];
            $q2 = "SELECT * FROM editor WHERE editor_id='$id '";
            $res2 = mysqli_query($con,$q2);

              $row1 = mysqli_fetch_assoc($res2);
              $id = $row1['editor_id'];

              if($id==$row1['editor_id'])
               {
                echo '<form class="reg_form bg-dark text-light" action="edit.php?edt_id='.$id.'" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name"><b>Full Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                      </div>
                      <div class="form-group col-md-6">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
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
                      <label for="phone"><b>Enter Gender</b></label>
                      <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                    </div>

                  <div class="dropdown-divider"></div>
                   <button type="submit" name="submit" class="btn col-md-2 btn-success" style="border-radius:20px;">Save Details</button>

                   <button type="button" name="submit" class="btn col-md-3 btn-success"  onclick="window.location.href=\'dashboard.php?id=14\'" style="border-radius:20px;">Goto Back</button>
                  ';

                  if(isset($_POST['submit'])){
                    $fname = $_REQUEST['name'];
                    $emails = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];


                    if(!empty($fname))
                      {
                        $query3="UPDATE editor SET full_name='$fname' WHERE editor_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                      }
                      if(!empty($emails))
                      {
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM editor WHERE email='$emails'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE editor SET email='$emails' WHERE editor_id='".$id."'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='dashboard.php?id=14';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE editor SET address='$address' WHERE editor_id='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE editor SET phone_number='$phone' WHERE editor_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }
                      if(!empty($gender))
                      {
                        $loginsql="SELECT * FROM editor WHERE editor_id='".$id."'";
                          $result=mysqli_query($con,$loginsql);
                          $rows=mysqli_fetch_assoc($result);
                          $a = $rows['gender'];

                          if($a==$gender)
                          {
                              echo "<script type=\"text/javascript\"> alert(\"Gender already Here\");</script>";
                            }else{ 
                              $query3="UPDATE editor SET gender='$gender' WHERE editor_id='".$id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"dashboard.php?id=14\";</script>";
                        }
                      }
                }echo '</form>'; //Register Form Validation

            }   
}else{
  header('location:dashboard.php'); 
}
?>

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

  </body>
</html>