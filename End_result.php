
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Artist Login</title>
	<style>
		
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}


.login-box a span {
  position: absolute;
  display: block;
}

.login-box a:hover {
  background: #03e9f4;
  color: #000;
  border-radius: 5px;
  
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

</style>

</head>

<body>

<?php
error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "job_analyser";

$e =$_COOKIE['score'];
print_r($e);

// $sql=("SELECT * FROM op");
 
//Database connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

$result = mysqli_query($conn,"SELECT op.result, op.tech_result, op.coding_result, op.comm_result FROM op  ORDER BY sr_no DESC
LIMIT 1 ") or die('Invalid query: ' .mysqli_error($conn));

//print values to screen
while ($row = mysqli_fetch_assoc($result)) {
    $a =$row['result'];
    $b =$row['tech_result'];
    $c =$row['coding_result'];
    $d =$row['comm_result'];
   
    function addNumbers(int $a, int $b, int $c, int $d) {
        return $a + $b + $c + $d;
      }
      $final = addNumbers($a,$b,$c,$d);
} 

// Free the resources associated with the result set
// This is done automatically at the end of the script
mysqli_free_result($result);

if($final >= 60){
    print_r("1");
}else{
    print_r("0");
}


?>

<div class="login-box">
  <h2>Congratulations!!!</h2>
  <form>
    <div class="user-box">
    
      <p style="color:white; font-family:georgia,garamond,serif;">Looking on your skills and performance. There are <?php echo $final; echo '%'?> chances for you to get placed.</p>
    </div>
    <div class="user-box">
      <p style="color:white; font-family:georgia,garamond,serif;">"May your future be as bright as your smile! You have so much to offer and I hope your new opportunity will be a glorious adventure!"</p>
    </div>
    <a href="Not_ready.html">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Suggestions
    </a>

    <a href="Ready.html">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Learn More
    </a>

  </form>
</div>


</body>
</html>