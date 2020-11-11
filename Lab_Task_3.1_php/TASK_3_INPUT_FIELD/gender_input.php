<?php
    $m = "";
    $f ="";
    $o ="";

	if(isset($_REQUEST['Submit'])){
		$gender = $_REQUEST['gender'];

		if($gender == ""){

		}else{
			$m = $gender;
		}
    }
    if(isset($_REQUEST['Submit'])){
		$gender = $_REQUEST['gender'];

		if($gender == ""){

		}else{
			$f = $gender;
		}
    }

    if(isset($_REQUEST['Submit'])){
		$gender = $_REQUEST['gender'];

		if($gender == ""){

		}else{
			$o = $gender;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="POST" >
					<fieldset style="width : 200px">
				<legend>Gender</legend>
				<input type="radio" name="gender" value= "<?=$m ?>" > Male
				<input type="radio" name="gender"  value="<?=$f ?>" > Female
				<input type="radio" name="gender" value="<?=$o ?>" > Other <br> <hr>
				<input type="Submit" name="Submit" value="Submit">
			</fieldset>
	</form>
</body>
</html>
