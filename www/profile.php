<?php require "header.php"; ?>   
<div class="container p-0">
    <div class="row m-0">
    <?php require "leftMenu.php"; ?>   

    <div class="col-sm-12 col-md-9 col-lg-8 col-xl-9">
        <div class="row m-0">
            <div class="index_main col-md-12 col-lg-12 col-xl-8 col-sm-12" style="margin-top:2vh"> 
                <div class="row mainCard"> 
                    <div class="userpicture col-3 d-flex justify-content-center"> <img class="userpic" src="./content/img/kot.png"> </div>
                    <div class="col-9 full_name" style="padding-right:0px"> Александров Фёдор Данилович<br>
                    <div class="line"></div>
                    Группа 191-723<br>Специальность: Информационные технологии в медиаиндустрии и дизайне </div>
                </div>
                <a class="mainCard_application_link" href="help1.php">
                    <div class="row mainCard_application">
                        <div class="col-12 text-center mainCard_application_title"> Заявления</div>
                        <div class="row m-0"> 
                            <div class="col-7 mainCard_application_text">Заявление на социальную степендию </div>
                            <div class="col-5 mainCard_application_text" style="text-align: center;"> Принято работу 05.10.20</div>
                        </div>
                        <div class="row m-0"> 
                            <div class="col-7 mainCard_application_text">Справка об обучении </div>
                            <div class="col-5 mainCard_application_text" style="text-align: center;">Готово 12.09.20</div>
                        </div>
                        <div class="row m-0"> 
                            <div class="col-7 mainCard_application_text">Заявление на материальную помощь </div>
                            <div class="col-5 mainCard_application_text" style="text-align: center;">Принято в работу 04.05.20</div>
                        </div>
                    </div>
                </a>
                <a class="mainCard_messages_link" href="messagesChat.php">
                    <div class="row mainCard_messages"> 
                        
                        <div class="userpicture col-3 d-flex justify-content-center"> <img class="userpic" src="./content/img/kot.png"> </div>
                        <div class="col-9">
                            <div class=" container-fluid text-center mainCard_messages_title">Сообщения <span>+2</span></div>
                            <div class=" mainCard_messages_text" style="padding-right:0px"> Александров Фёдор Данилович<br>
                            Вчера 16:48<br>
                            <br>Что задано по английскому? </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-11 col-md-12 col-lg-10 col-xl-4 text-center index_timeMain" style="margin-top: 2vh"> 
                <div class="row text-center index_timeMain_text"><p> Расписание на сегодня</p> </div>
                <div class="row text-center index_timeMain_text index_timeMain_text_now"><p> 10:40-12:10<br><br>Дискретная математика<br>Обучение в лмс<br>Ципенюк Дмитрий Юрьевич</p> </div>
                <div class="row text-center index_timeMain_text"><p> 12:20-13:50<br><br>Дискретная математика<br>Обучение в лмс<br>Ципенюк Дмитрий Юрьевич </p> </div>
                <div class="row text-center index_timeMain_text"><p> 14:30-16:10<br><br>Дискретная математика<br>Обучение в лмс<br>Ципенюк Дмитрий Юрьевич </p> </div>
                <div class="row text-center index_timeMain_text"><a href = "timetable.php"> Открыть полностью</a> </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>   
