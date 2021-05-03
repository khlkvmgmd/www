<?php require "header.php"; ?>   
<div class="container">
    <div class="row">
    <?php require "leftMenu.php"; ?>

    <div class="col-md-9 col-sm-12">
        <div class = "tableWrapper">
            <table class="table table-bordered help_table">
                <thead>
                    <tr>
                        <th scope="col" colspan="6" style="text-align:center">Мои заявление</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                    <td>2 октября 2020 12:04</td>
                    <td>PS0210201371</td>
                    <td>Заявление на социальную степендию</td>
                    <td class="result_accepted" style="background: #4B6EB9">Принято в работу<br>05.10.20 19:33</td>
                    <td>Профсоюзная организация работников и обучающихся 107023, г. Москва, ул. Б. Семеновская, д. 38, аудитория В-202. Тел. 495 223-05-31</td>
                    <td>Ваше заявление получено. Необходимо подойти в ауд. В-202 для подписания заявления с оригиналом справки.Приложенные документы не открываются</td>
                    </tr>
                    <tr>
                    <td>2 октября 2020 12:04</td>
                    <td>PS0210201371</td>
                    <td>Справка об обучении</td>
                    <td class="result_done" style="background: #55B432">Готово 12.09.20 20:34</td>
                    <td>Отделение «На Прянишникова» центра по работе со студентами ул. Прянишникова, 2а, ауд. 1311. Тел. (495) 223-05-23 доб. 4052, 4056, 4057; crs-pryaniki@mospolytech.ru</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>2 октября 2020 12:04</td>
                    <td>PS0210201371</td>
                    <td>Заявление на мат. помощь</td>
                    <td class="result_rejected" style="background: #E63246">Отклонено 19.04.20 20:01</td>
                    <td>Профсоюзная организация работников и обучающихся 107023, г. Москва, ул. Б. Семеновская, д. 38, аудитория В-202. Тел. 495 223-05-31</td>
                    <td>Вы уже подавали заявление на продление социальной стипендии. В течение 10 рабочих дней с момента снятия ограничительных мер Вам необходимо подойти в аудиторию В-202 для обязательного подписания заявления по социальной стипендии с оригиналом документа.</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="help1_caption_bottom">
                        <th class="help1_more"scope="col" colspan="6" style="text-align:center"><a href="help1.php">Скрыть подробную информацию...</a></th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="row justify-content-between m-0">
            <div class="col-lg-5 col-sm-12 col-md-12 ref_app" style="margin-bottom: 20px;">
                <div class="ref_app_title">Справки и заявления</div>
                <div class="row justify-content-between ref_app_info">
                    <div class="col-10 ref_app_text">Центр по работе со студентами</div>
                    <img class="col-4 arrow_right" src="content/img/arrow_black.png">
                </div>
                <div class="row justify-content-between ref_app_info">
                    <div class="col-10 ref_app_text">Профсоюзная организация</div>
                    <img class="col-4 arrow_right" src="content/img/arrow_black.png">
                </div>
                <div class="row justify-content-between ref_app_info">
                    <div class="col-10 ref_app_text">Бухгалтерия</div>
                    <img class="col-4 arrow_right" src="content/img/arrow_black.png">
                </div>
                <div class="row justify-content-between ref_app_info">
                    <div class="col-10 ref_app_text">Практика</div>
                    <img class="col-4 arrow_right" src="content/img/arrow_black.png">
                </div>
                <div class="row justify-content-between ref_app_info">
                    <div class="col-10 ref_app_text">Отдел платных образовательных услуг</div>
                    <img class="col-4 arrow_right" src="content/img/arrow_black.png">
                </div>
                <div class="row justify-content-between ref_app_info">
                    <div class="col-10 ref_app_text">Произвольный запрос</div>
                    <img class="col-4 arrow_right" src="content/img/arrow_black.png">
                </div>
            </div>
            <div class="col-lg-6 col-12 recent_req">
                <div class="recent_req_title">Недавние запросы</div>
                <ul>
                    <li class="recent_req_text">Справка о прослушанных дисциплинах за период обучения (справка об обучении)</li>
                    <li class="recent_req_text">Справка о прохождении обучения в университете (о статусе обучающегося) по месту требования</li>
                    <li class="recent_req_text">Справка в социальные учреждения (Пенсионный фонд, УСЗН и пр.)</li>
                    <li class="recent_req_text">Справка-вызов</li>
                    <li class="recent_req_text">Заявление на пересдачу для получения диплома с отличием</li>
                </ul>
            </div>
        </div>
    </div>



<?php require "footer.php"; ?>