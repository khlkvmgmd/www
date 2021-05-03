<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
    <div class="col-lg-4 col-xl-3 Left" >
        <div style = "display:flex; align-items:center; width:100%;justify-content:space-between; margin-bottom:10px">
            <div style="display: flex">
                <button class="btn_burger" onclick = "burger_open()"><img class="burger_icon" src="content/img/xui.png"></button>
            </div>
            <h1 class = "header_title" style = "font-weight:bold;margin-left:40px;">Личный кабинет</h1>
            <div class="theme_switch mobile" onclick="switchToggle()"></div>  
        </div>
        <ul class="leftMenu">
            <li class="menu_item item1" onclick = "changePage(0)"><a href="profile.php" class="menu_link">Профиль студента</a></li>
            <li class="menu_item item2" onclick = "changePage(1)"><a href="messages.php" class="menu_link">Личные сообщения</a></li>
            <li class="menu_item item3" onclick = "changePage(2)"><a href="help1.php" class="menu_link">Справки и заявления</a></li>
            <li class="menu_item item4" onclick = "changePage(3)"><a href="payments.php" class="menu_link">Сведения об оплатах</a></li>
            <li class="menu_item item5" onclick = "changePage(4)"><a href="timetable.php" class="menu_link">Расписание</a></li>
            <li class="menu_item item6" onclick = "changePage(5)"><a href="pd.php" class="menu_link">Проектная деятельность</a></li>
            <li class="menu_item item7" onclick = "changePage(6)"><a href="#" class="menu_link">Трудоустройство</a></li>
        </ul> 
    </div>
</body>
<script type="text/javascript" src="./js/script.js"></script>
</html>
