<?php
require_once 'connection.php';
require_once 'admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	img{
		width: 20%;
		float: left;
	}
		form.edit_page{
			background-color: white;
			width: 20%;
			height: 20vw;
			text-align: left;
			padding-left: 50px;
			margin-top: 20px;
			float: left;
			padding: 1%;
			margin-left: 40%;
			border-radius: 10px;
			text-align: center;
			border: 1px solid black;
		}
		label.reg_label{
			color: green;
			font-size: 25px;
		}
		input.reg_box{
			width:100%;
			height: 35px;
			font-size: 20px;
		}
		input.reg_checkbox{
			border: 2px solid black;
			cursor: pointer;
		}
		.reg_box:hover{
			border: 2px solid red;
		}
		label.reg_label_agree{
			color: black;
			font-size: 20px;
		}
		button.reg_but{
			width: 100%;
			height: 50px;
			color: white;
			background-color: gray;
			font-size: 25px;
			cursor: pointer;
			transition-duration: 0.4s;
			margin-bottom: 10%;
		}
		.button1:hover{
			background-color: green;
			color: black;
		}
		

	</style>

</head>
<body style="background-color: white">
<form class="edit_page" action="editor_username_change.php" method="POST">
	
			<label class="reg_label">Username </label><br>	<input style="text-transform: uppercase;" class="reg_box" type="text" name="uname"><br><br>
			<button class="reg_but button1" type="submit" name="sign_sub">Update Username</button>
			<button class="reg_but button1" type="button" name="sign_sub" onclick="window.location.href='dashboard.php'">Go back Home</button>
</form>
<?php
	if(isset($_POST['sign_sub']))
	{
		$uname=$_POST['uname'];
		$g = $_SESSION['username'];

		if(!empty($uname))
		{
			$query1="SELECT * FROM editor WHERE username='$uname'";
			$sql1=mysqli_query($con,$query1);


				if(mysqli_num_rows($sql1)>0)
				{
					echo "<script type=\"text/javascript\"> alert(\"Username is already Exsisted\");</script>";
				}
				else
				{
					$query3="UPDATE editor SET username='$uname' WHERE username='".$g."'";
					$sql3=mysqli_query($con,$query3);
					echo "<script type=\"text/javascript\"> alert(\"Username Change Successfully\"); window.location.href='logout.php';</script>";
				}
		
		}else{
			echo "<script type=\"text/javascript\"> alert(\"Please Enter Username\");</script>";
		}
	}
?>
	
</body>
</html>