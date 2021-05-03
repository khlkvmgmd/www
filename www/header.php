<!DOCTYPE html>
<html>
	<head>
		<title>Личный кабинет</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="https://new.mospolytech.ru/upload/iblock/cf6/cf6bf3dd0870e3a95ae440dae56ee4ab.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">

		<script type="text/javascript" src="js/script.js"></script>

	</head>

	<body style="background-color: var(--contentColor)">
		<nav class="navbar navbar-expand-md navbar-dark nav_menu">
			<div class="container">
				<div class="row justify-content-between d-flex" style="margin:0px;">
					<div class="col-3  align-items-center" style="margin-right:60px; ">
					<div class="logodiv">
						<img class="logoPic" src="content/img/darklogo.png" alt="альтернативный текст" />
					</div>
					</div>
					
					<div class="d-flex col-1 align-items-center text-center nav_menu_space">	 
						<a class="main_link" href="profile.php">ГЛАВНАЯ</a>
					</div>
					<div class="d-flex col-3 align-items-center text-center nav_menu_space">
						<a class="info_link" href="#">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a>
					</div>
					<div class="d-flex col-1 align-items-center text-center nav_menu_space">
						<a class="out_link" href="#">ВЫХОД</a>
					</div>
					<div class="d-flex col-1 align-items-center tumbler">
						<div class="theme_switch" onclick="switchToggle()">
						</div>
					</div>
					<div class="d-flex col-2 align-items-center"><input class="form-control mr-sm-2 search" type="search" placeholder="Поиск..." aria-label="Search">
					</div>
				</div>
			</div>	
		</nav>
	</body>
</html>