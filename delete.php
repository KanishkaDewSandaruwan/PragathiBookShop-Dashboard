<?php
require_once 'connection.php';

if(isset($_REQUEST['author_id']))
{
          $id = $_REQUEST['author_id'];

          $querygetcode="SELECT  * FROM author where author_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['author_id'];

          $query1="DELETE FROM author WHERE author_id='$a '";
          mysqli_query($con,$query1);

          $query2="DELETE FROM books WHERE author_id='$a '";
          mysqli_query($con,$query2);

          header('location:dashboard.php?id=33');
}
else if(isset($_REQUEST['cat_id']))
{
          $id = $_REQUEST['cat_id'];

          $querygetcode="SELECT  * FROM book_cat where cat_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['cat_id'];

          $query1="DELETE FROM book_cat WHERE cat_id='$a '";
          mysqli_query($con,$query1);

          $query2="DELETE FROM books WHERE cat_id='$a '";
          mysqli_query($con,$query2);
          header('location:dashboard.php?id=18');

}  else if(isset($_REQUEST['book_id'])){
          $id = $_REQUEST['book_id'];

          $querygetcode="SELECT  * FROM books where book_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['book_id'];

          $query1="DELETE FROM books WHERE book_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=2');
}
else if(isset($_REQUEST['edt_id']))
{
          $id = $_REQUEST['edt_id'];

          $querygetcode="SELECT  * FROM editor where editor_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['editor_id'];

          $query1="DELETE FROM editor WHERE editor_id='$a '";
          mysqli_query($con,$query1);
          header('location:dashboard.php?id=14'); 
}else{
  header('location:dashboard.php'); 
}
?>