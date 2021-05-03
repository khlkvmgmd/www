<?php require "header.php"; ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
    <?php require "leftMenu.php"; ?>
    <div class="col-md-9 col-sm-12 help1_all">
        <table class="table table-sm help1_table">
            <thead>
                <tr>
                    <th scope="col" colspan="6" style="text-align:center">Мои заявление</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Заявление на социальную степендию</td>
                <td class="result_accepted">
                    <div class="result__accepted_text">Принято в работу 05.10.20</div>
                </td>
                <td>Б. Семеновская, д. 38, аудитория В-202</td>
                <td>Необходимо подойти в ауд. В-202 для подписания... </td>
                </tr>
                <tr>
                <td>Справка об обучении</td>
                <td class="result_done">
                    <div class="result_done_text">Готово 12.09.20</div>
                </td>
                <td>ул. Прянишникова, 2а, ауд. 1311</td>
                <td>----</td>
                </tr>
                <tr>
                <td>Заявление на материальную помощь</td>
                <td class="result_rejected">
                    <div class="result_rejected_text">Отказано</div>
                </td>
                <td>Б. Семеновская, д. 38, аудитория В-202</td>
                <td>Необходимо подойти в ауд. В-202 для подписания... </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="help1_caption_bottom">
                    <th class="help1_more"scope="col" colspan="4" style="text-align:center"><a href="help.php">Показать больше информации...</a></th>
                </tr>
            </tfoot>
        </table>

        <div class="row justify-content-between m-0">
            <div class="col-lg-5 col-12 ref_app" style=" margin-bottom: 20px;">
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

        <!-- <div class="col recent_req_back" id = "recent_req_back">
            <a class="recent_req_menu" href="#">Справка о прослушанных дисциплинах за период обучения (справка об обучении)<br></a>
            <a class="recent_req_menu" href="#">Справка о прохождении обучения в университете (о статусе обучающегося) по месту требования<br></a>
            <a class="recent_req_menu" href="#">Справка в социальные учреждения (Пенсионный фонд, УСЗН и пр.)<br></a>
            <a class="recent_req_menu" href="#">Справка-вызов<br></a>
            <a class="recent_req_menu" href="#">Заявление на пересдачу для получения диплома с отличием<br></a>
            <a class="recent_req_menu" href="#">Запрос на изменение персональных данных<br></a>
            <a class="recent_req_menu" href="#">Запрос на восстановление магнитного пропуска<br></a>
            <a class="recent_req_menu" href="#">Уточнение паспортных данных</a>
        </div> -->
    </div>
</body>
</html>

<?php require "footer.php"; ?>