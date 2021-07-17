<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "job_analyser";

$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$demography=$_POST['demography'];
$ssc=$_POST['ssc'];
$hsc=$_POST['hsc'];
$hsc_major=$_POST['hsc_major'];
$diploma=$_POST['diploma'];
$degree_name=$_POST['degree_name'];
$stream_name=$_POST['stream_name'];
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'];
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$sem7=$_POST['sem7'];
$sem8=$_POST['sem8'];
$tech_certi=$_POST['tech_certi'];
$comm_skilss=$_POST['comm_skilss'];
$coding_comp=$_POST['coding_comp'];
//Database connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("INSERT INTO tform (name,age,dob,gender,demography,ssc,hsc,hsc_major,diploma,degree_name,stream_name,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,tech_certi,comm_skilss,coding_comp) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sisssddsdssddddddddsss",$name,$age,$dob,$gender,$demography,$ssc,$hsc,$hsc_major,$diploma,$degree_name,$stream_name,$sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8,$tech_certi,$comm_skilss,$coding_comp);
    $stmt->execute();
    echo "New record has been added successfully !";
    $stmt->close();
	$conn->close();
} 

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
	<title></title>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: #34495e;
		}

		.box{
			width: 300px;
			padding: 40px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background: #191919;
			text-align: center;
		}
		.box h1{
			color: white;
			text-transform: uppercase;
			font-weight: 500;
		}
      .box input[type="text"],.box input[type="password"],.box input[type="email"]{
			border :0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #3498db;
			padding: 14px 10px;
			width: 200px;
			outline: none;
			color: white;
			border-radius: 24px;
			transition: 0.25s;
			
		}
		.box input[type="text"]:focus,.box input[type="password"],.box input[type="email"]{
			width: 280px;
			border-color: #2ecc71;
				}
		.box input[type="submit"]{
			border:0;
			background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border:2px solid #2ecc71;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
		}

      .box input[type="submit"]:hover{
			background:  #2ecc71;
      }
   </style>
</head>
<body>
	<div >
		<form class="box" action="section_index.html"  method="POST">
   			<input type="submit" name="submit" value="Next">
		</form>
	</div>
	
</body>
</html>