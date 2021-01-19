<?php
require_once 'connection.php';
require_once 'admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.aaa.css">
	<style type="text/css">
		form.edit_page{
			background-color: white;
			width: 30%;
			height: 40vw;
			text-align: left;
			padding-left: 50px;
			padding-top: 3%;
			padding: 1%;
			margin-left: 35%;
			text-align: center;
			margin-top: 2%;
			border: 1px solid black;
		}
		label.reg_label{
			color: green;
			font-size: 2vw;
		}
		input.reg_box{
			width:90%;
			height: 2.5vw;
			font-size: 20px;
		}
		input.reg_checkbox{
			width: 1vw;
			height: 1vw;
			border: 2px solid black;
			cursor: pointer;
		}
		.reg_box:hover{
			border: 2px solid red;
		}
		label.reg_label_agree{
			color: black;
			font-size: 1vw;
		}
		button.reg_but{
			width: 90%;
			height: 3vw;
			color: white;
			background-color: gray;
			font-size: 1.5vw;
			cursor: pointer;
			transition-duration: 0.4s;
		}
		.button1:hover{
			background-color: green;
			color: black;
		}
		}

	</style>

</head>
<body style="background-color: white;">
<form class="edit_page" action="editor_pass.php" method="POST">
			<label class="reg_label">Current Password </label><br>		<input class="reg_box" type="password" name="cpass">
			<label class="reg_label">New Password </label><br>			<input class="reg_box" type="password" name="npass">
			<label class="reg_label">Confirm Password </label><br>		<input class="reg_box" type="password" name="conpass"><br><br>

			<input class="reg_checkbox" type="checkbox" name="accept"><label class="reg_label_agree">  Are You wont Change Password</label><br><br>
			<button class="reg_but button1" type="submit" name="sign_sub">Change Password</button><br><br>
			<button class="reg_but button1" type="button" onclick="window.location.href='dashboard.php'" name="sign_sub">Go to Dashboard</button><br><br>

<?php
	if(isset($_POST['sign_sub']))
	{
		$currentpass=stripslashes($_REQUEST['cpass']);
		$newpass=stripslashes($_REQUEST['npass']);
		$confpass=stripslashes($_REQUEST['conpass']);
		$g = $_SESSION['username'];

		if(!empty($currentpass)){
			if(!empty($newpass)){
				if(!empty($confpass)){

					$loginsql="SELECT * FROM editor WHERE password='".md5($currentpass)."'";
					$result=mysqli_query($con,$loginsql) or mysqli_errno();
					$rows=mysqli_fetch_assoc($result);

					$a=$rows['password'];

					$query5="SELECT password FROM editor WHERE username='".$g."'";
					$sql5=mysqli_query($con,$query5);
					$row=mysqli_fetch_assoc($sql5);

					$a=$row['password'];

					if($rows['password']==$row['password'])
					{
						if($newpass==$confpass){
							$query3="SELECT * FROM editor WHERE password='$newpass'";
							$sql3=mysqli_query($con,$query3);

							if(mysqli_num_rows($sql3)>0)
							{
								echo "password already Exsisted";
							}
							else
							{
								if(!empty($_POST['accept']))
								{
									$query2="UPDATE editor SET password='".md5($newpass)."' WHERE username='".$g."'";
									$sql2=mysqli_query($con,$query2);
									echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>";

								}else{echo "Please Accept Password Change";}	
							}

						}else{echo "Your Password is Not Match";}
					}else{echo "Current Password is Wrong";}
				}else{echo "Enter Confirm Password";}
			}else{echo "Enter New Password";}
		}else{echo "Enter Current Password";}
	}
?>
	</form>
</body>
</html>