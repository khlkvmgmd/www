<?php require "header.php"; ?>   
<div class="container">
    <div class="row">
    <?php require "leftMenu.php"; ?>   

    <div class="col-md-9 col-sm-12">
        <div class="row m-0 timetable">
            <div class="col-12 col-xl-6 text-center d-flex flex-column justify-content-between" style="margin-bottom:25px;"> 
                <div class="row text-center timetable_block"><p class="timetable_text"> Расписание на сегодня</p> </div>
                <div class="row text-center timetable_block"><p class="timetable_text"> 09:00-10:30</p> </div>
                <div class="row text-center timetable_block_now"><p class="timetable_text"> 10:40-12:10<br><br>Дискретная математика<br>Обучение в лмс<br>Цепинюк Дмитрий Юрьевич</p> </div>
                <div class="row text-center timetable_block"><p class="timetable_text"> 12:20-13:50<br><br>Дискретная математика<br>Обучение в лмс<br>Цепинюк Дмитрий Юрьевич </p> </div>
                <div class="row text-center timetable_block"><p class="timetable_text"> 14:30-16:00<br><br>Дискретная математика<br>Обучение в лмс<br>Цепинюк Дмитрий Юрьевич </p> </div>
                <div class="row text-center timetable_block"><p class="timetable_text"> 16:10-17:40</p> </div>
                <div class="row text-center timetable_block"><p class="timetable_text"> 17:50-19:20</p> </div>
                <div class="row text-center timetable_block"><p class="timetable_text"> 19:30-21:00</p> </div>
            </div>
            <div class="col-12 col-xl-6 text-center d-flex flex-column align-items-center align-items-start justify-content-evenly rasp"> 
                <div class="row text-center timetable_other"><a href="timetableWeek.php" class="timetable_text_right"> Расписание на неделю</a></div>
                <div class="row text-center timetable_other"><a href="timetableModuleFirst.php" class="timetable_text_right"> Расписание по модулям</a></div>
                <div class="row text-center timetable_other"><p class= "timetable_text_right"> Расписание сессии </p> </div>
                <div class="row text-center timetable_other"><p class= "timetable_text_right"> Учебный план </p> </div>
                <div class="row text-center timetable_other"><p class= "timetable_text_right"> Расписание преподавателя</p> </div>
            </div>
        </div>
</div>
<?php require "footer.php"; ?>   
