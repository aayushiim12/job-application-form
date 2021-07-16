<?php
include 'connect.php';

if(isset($_POST['submit'])){
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$linkedin = $_POST['linkedin'];
	$position = $_POST['position'];

  $city = $_POST['cityname'];
	$current_city = $_POST['current_city'];
	$relocate = $_POST['relocate'];
	$startdate = $_POST['startdate'];
    $lastcompany=$_POST['lastcompany'];
	$comments=$_POST['comments'];
	$date = date("Y-m-d H:i:s");
	
$users = new Connection();

$users->insertUserValues('INSERT INTO registration (firstname, lastname, email, comments, lastcompany, startdate, relocate, current_city,cityname, position, mobile, linkedin, id,timestamp) VALUES(?,?,?,?, ?,?,?,?,?,?, ?,?,?,?)');
$users->bind(1, $firstname); //bind each value
$users->bind(2, $lastname); // bind
$users->bind(3, $email);
$users->bind(4, $comments); //bind each value
$users->bind(5, $lastcompany); // bind
$users->bind(6, $startdate);
$users->bind(7, $relocate); //bind each value
$users->bind(8, $current_city); // bind
$users->bind(9, $city);
$users->bind(10, $position); // bind
$users->bind(11, $mobile);
$users->bind(12, $linkedin); //bind each value
$users->bind(13, ''); // bind
$users->bind(14, $date);


	
  if($users->run()){

    echo "record inserted";
}
}
?>
<!DOCTYPE html>
<html>

<head>
<title>Job Application</title>

 <link type="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Catamaran:wght@200;300&family=Manrope:wght@300&family=Saira+Condensed:wght@100&display=swap" rel="stylesheet">
  
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.min-autocomplete.js"></script>
<script src="js/jquery-ui.min.js"></script>
	
}
</head>
<body>
<script language="javascript">

function city()
{
	 var current_city = document.getElementById("current_city").value;
	// alert(current_city);

  // If the checkbox is checked, display the output text
   var text1 = document.getElementById("cityname_block");
  var text2 = document.getElementById("cityname_block2");
  
  if (current_city == 'other'){
    text1.style.display = "block";
    text2.style.display = "block";
  } else {
    text1.style.display = "none";
    text2.style.display = "none";
  }
	
}
</script>
<div class="form">

<form action="index.php" method="post">
		<div>
				<p class="title"><b>Job Application Form</b>
				
				</p>
				
						
  <p> 
  <label for="fname">Name:</label>
  <input type="text" id="firstname" name="firstname" placeholder="First Name" >
    <input type="text" id="lastname" name="lastname" placeholder="Last Name">
  </p>
  <p>
  <label for="email">Email:</label>
  <input type="text" id="email" name="email" >
  </p>
  <p>
  <label for="linkedin">LinkedIn profile:</label>
  <input type="text" id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/">
  </p>
  <p>
  <label for="position">Position Applying for:</label>
  <input type="text" id="position" name="position" >
  </p>
  <p>
   <label for="start">When can you start?:</label>
  <input type="text" id="startdate" name="startdate" placeholder="DD/MM/YYYY">
  </p>
  <p>
  <label for="mobile">Mobile No.:</label>
  <input type="text" id="mobile" name="mobile" placeholder="+91">
  </p>
  <p>

       	
		
  <div class="feild-name-block">
            <label class="feild-name">Current City:</label>
        </div>
        <div class="feild-input-block">
             <select name="current_city" id="current_city" onChange="city()">
						  <option value="Delhi" selected="selected">Delhi</option>
						  <option value="other" >Other</option>
						  </select>
           
        </div>
		
		 <div id="cityname_block" style="display: none;">
           City Name
        </div>
        <div id="cityname_block2" style="display: none;">
           
            <input type="text" name="cityname" id="cityname">
        </div>
		
	<p>	
 <label for="relocate">Are you willing to relocate?:</label>
<select name="relocate" id="cn">
  <option value="yes">Yes</option>
  <option value="no">No</option>
  <option value="notsure">Not Sure</option>
</select>      
</p>  

</p>
<p>
<label for="lastcompany">Last company you worked for:</label>
  <input type="text" id="lastcompany" name="lastcompany" placeholder="Company Name">
  </p>
  <p>
  <label for="comments">Comments:</label>
  <textarea  name="comments"   type="text" id="comments" name="comments"  cols="100" rows="7" ">write your commrntd here....</textarea>
  </p>
  <p>
						<input type="submit" name="submit" value="submit" class="btn">
				</p>
</form> 
 </div>
 </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Padauk&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.min-autocomplete.js"></script>
<script src="js/jquery-ui.min.js"></script>
	
}
</script>

</body>
</html>