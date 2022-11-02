<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/5298bac0-b8bf-4c80-af67-725c1272dbb0/dcy6bwk-4644cdeb-0940-4a4e-82f2-e7322254c490.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUyOThiYWMwLWI4YmYtNGM4MC1hZjY3LTcyNWMxMjcyZGJiMFwvZGN5NmJ3ay00NjQ0Y2RlYi0wOTQwLTRhNGUtODJmMi1lNzMyMjI1NGM0OTAuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.QRAWeoEhOG3R7wXYV1sqWsRobzoqiat--lKFMD84xQA) no-repeat;
  background-size: cover;
  height:100%;
}

#feedback-page{
	text-align:center;
}

#form-main{
	width:100%;
	float:left;
	padding-top:0px;
}

#form-div {
	background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 450px;
	float: left;
	left: 50%;
	position: absolute;
  margin-top:30px;
	margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#comment{
	background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

#button-blue{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #3498db;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

#button-blue:hover{
	background-color: rgba(0,0,0,0);
	color: #0493bd;
}
	
.submit:hover {
	color: #3498db;
}
	
.ease {
	width: 0px;
	height: 74px;
	background-color: #fbfbfb;
	-webkit-transition: .3s ease;
	-moz-transition: .3s ease;
	-o-transition: .3s ease;
	-ms-transition: .3s ease;
	transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}

</style>
    
</head>

<body>




    <?php
	
	


    if (isset($_POST['registerBtn'])) {
        $firstName = strip_tags(trim($_POST['first_name']));
        
        $email = trim($_POST['email']);
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];

        $errors = false;

        if (empty($firstName) || empty($lastName)) {
            echo "First name and last name are mandatory!<br>";
            $errors = true;
        }

        if (empty($sanitizedEmail)) {
            echo "Email is mandatory<br>";
            $errors = true;
        } else if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
            echo "Email is not valid<br>";
            $errors = true;
        }

        if (empty($password)) {
            echo "Password is mandatory<br>";
            $errors = true;
        } else if ($password != $cPassword) {
            echo "Passwords are not matching<br>";
            $errors = true;
        }

        // Only if no errors 
        if (!$errors) {
            $conn = mysqli_connect('localhost', 'root', '', 'movies_project');
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            
            
            $query = "INSERT INTO users(name, email, password)
            VALUES('$firstName', '$email', '$hashPassword')";
            $result = mysqli_query($conn, $query);
            mysqli_close($conn);
            
           
            
            

           
        }
        if ($result)
        echo "<h1 style='color: green font-size: 500px;'>Successfully registered</h1>";
    else
        echo "<h1 style='color: red'>Problem registering</h1>";
    }
    ?>
<?php
	include 'navbar.html';
?>

    <div id="form-main">
  <div id="form-div">
    
  <form method="post">
     
	  <p>
	  <input type="text" name="first_name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="first_name" value="<?php echo $first_name; ?>">
		<?php
		if (isset($errors['name']))
			echo $errors['name'];
		?>
	  </p>
      

    <p>
    <input type="text" name="email" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Email" value="<?php echo $email; ?>"><br>   
    </p>
    <p>
    <input type="text" name="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Password" ><br>   
    </p>
    <p>
    <input type="text" name="cPassword" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Confirm password"><br>
    </p>
      
    

      
      <div class="submit">
        <input type="submit" name="registerBtn"  id="button-blue"/>
        <div class="ease"></div>
    
		
      </div>
    </form>
  </div>




</body>

</html>