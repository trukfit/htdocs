<?php
	require_once "lib/user_class.php";
	$user = User::getObject();
	$auth = $user->isAuth();
	if(isset($_POST["reg"])){
		$login = $_POST["login"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$success_reg = $user->regUser($login, $email, $password);
	}
	elseif(isset($_POST["auth"])){
		$login = $_POST["login"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$auth_success = $user->login($login, $email, $password);
		if($auth_success){
			header("Location: index.php");
			exit;
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><center>
	<?php if($auth) {
		echo "Здравствуйте ".$_SESSION['login'];
	}
	else {
		echo '<h2>Регистрация</h2>
	<form name = "reg" action = "index.php" method = "post">
			<table>
					<tr>
						<td>Логин: </td>
						<td>
							<input type = "text" name = "login" />
						</td>
					</tr>
				<tr>
					<td>E-mail: </td>
					<td>
						<input type = "email" name = "email" />
					</td>
				</tr>
				<tr>
					<td>Пароль: </td>
					<td>
						<input type = "password" name = "password" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type = "submit" name = "reg" value="Зарегистрироваться" />
					</td>
				</tr>
			</table>
	</form>
	<h2>Авторизация</h2>
	<form name = "auth" action = "index.php" method = "post">
		<table>
			<tr>
				<td>Логин: </td>
				<td>
					<input type = "text" name = "login" />
				</td>
			</tr>
			<tr>
				<td>E-mail: </td>
				<td>
					<input type = "email" name = "email" />
				</td>
			</tr>
			<tr>
				<td>Пароль: </td>
				<td>
					<input type = "password" name = "password" />
				</td>
			</tr>
			<tr>
				<td>
					<input type = "submit" name = "auth" value="Войти" />
				</td>
			</tr>
		</table>
	</form></center>';
	}
	?>
</body>
</html>