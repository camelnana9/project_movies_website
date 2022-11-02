<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(https://wallpaper.dog/large/20493433.jpg) no-repeat;
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
	$title = '';
	$posterurl = '';
    $descreption = '';
    $release_date = '';
    $director_id ='';
		


	if (isset($_POST['submit'])) {
		$errors = array();

		$title = $_POST['title'];
		$descreption = $_POST['descreption'];
		$posterurl = $_POST['posterurl'];
        $release_date = $_POST['release_date'];
        $director_id = $_POST['director_id'];
		
	
		if (empty($title))
			$errors['title'] = 'please insert title !';

		if (empty($descreption))
			$errors['descreption'] = 'please insert descreption !';


		if (empty($posterurl))
			$errors['URL'] = 'please insert url !';
	
            if (empty($release_date))
			$errors['release_date'] = 'please insert date !';
	


		
		if (empty($errors)) {

			$title = trim($title); 
			$posterurl = trim($posterurl);
			$descreption = trim($descreption);
	
			
	
			$conn = mysqli_connect('localhost', 'root', '', 'movies_project');
			$query = "INSERT INTO movies (title,descreption,poster,release_date,director_id)
			VALUES('$title', '$descreption', '$posterurl', '$release_date','$director_id')";
			echo $query;
			$result = mysqli_query($conn, $query);
	


			if ($result)
        echo "Successfully inserted<br>";
            else
        echo "Problem inserting in the DB<br>";

            mysqli_close($conn);
		
		} else {
			echo 'check your form <br>';
		}
	}




	?>

<div id="form-main">
  <div id="form-div">
    
  <form method="post">
     
	  <p>
	  <input type="text" name="title" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Insert Movie Title" value="<?php echo $title; ?>">
		<?php
		if (isset($errors['name']))
			echo $errors['name'];
		?>
	  </p>
      
      <p >
        
		<input type="text" name="posterurl" class="validate[required,custom[email]] feedback-input" placeholder="Insert a valid URL" value="<?php echo $posterurl; ?>">
		<?php
		if (isset($errors['posterurl']))
			echo $errors['posterurl'];
		?>
	</p>
      
      <p class="text">
       
        <textarea type="text " class="validate[required,length[6,300]] feedback-input"  name="descreption" placeholder="Descreption..."  value="<?php echo $descreption; ?>"></textarea>
       
  <?php
		if (isset($errors['descreption']))
        echo $errors['descreption'];
		?>
		
	</p>
	  <p>
	  <label for="date">Date </label>
         <input type="date" class="validate[required,length[6,300]] feedback-input"  name="release_date" value="<?php echo $date; ?>">
	  </p>
	  <p>
	  <label for="directors">Choose a Movie director:</label>
        <select name="director_id" class="validate[required,length[6,300]] feedback-input"  >
        <option value="1">Baltasar Kormákur</option>
        <option value="2">Julius Avery</option>
        <option value="3">joseph kosinski</option>
        <option value="4">PAUL THOMAS ANDERSON</option>
        <option value="5">MATT REEVES</option>
        </select>
		</p>
      
      <div class="submit">
        <input type="submit" name="submit"  id="button-blue"/>
        <div class="ease"></div>
		
      </div>
    </form>
  </div>




        
        
        

	
	
</body>

</html>