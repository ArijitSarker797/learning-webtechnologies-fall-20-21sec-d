<?php

    session_start();

    if(isset($_COOKIE['loggedin_user'])) {
		header('Location: user_home.php');
		exit;
	}

    $errors = array();

    if(isset($_POST['submit'])) {
        $id = isset($_POST['id']) ? trim($_POST['id']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';
        $confirmPassword = isset($_POST['confirmpassword']) ? trim($_POST['confirmpassword']) : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';

        $type = isset($_POST['type']) ? trim($_POST['type']) : '';




       if(isset($_SESSION['users']) && isset($_SESSION['users'][$id])) {
            $error[] = "id has already been taken.";
        }



        if(empty($errors)) {
            $_SESSION['users'] = isset($_SESSION['users']) ? $_SESSION['users'] : array();

            $user = array(
                'id' => $id,
                'password' => $password,
                'confirmpassword' => $confirmpassword,

				'name' => $name,
				'type'=> $type,

            );


            $_SESSION['users'][$id] = $user;
            $_SESSION['users']['tabid'] = $user;


            $_SESSION['register'] = $user;
            $_SESSION['register']['id'] = $id;

            header("Location: login.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html>
<center>
<form>
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text"><br/>
					Password<br/><input type="password"><br/>
					Confirm Password<br/><input type="password"><br/>
					Name<br/><input type="text"><br/>
					User Type<hr/>
					<input type="radio" />User
					<input type="radio" />Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>
	</table>
</form>
</center>
</html>
