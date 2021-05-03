<?php require "header.php"; ?>   

<div class="container">
    <div class="row">
        <?php require "leftMenu.php"; ?>   
        <div class="paymentContainer col-9">
            <div class="row d-flex justify-content-center payTitle">
                <div class="col-12 col-lg-3 payStud justify-content-center d-flex align-items-center">Оплата обучения</div>
                <div class="col-12 col-lg-3 offset-lg-1 payDerm justify-content-center d-flex align-items-center">Оплата общежития</div>
            </div>
            <div class="row justify-content-between" style="margin-top:30px">
                <div class="col-12 col-lg-4 payDetails1 justify-content-center">
                    <div class="row d-flex justify-content-center" style="margin:10px 0px 15px 0px">Реквизиты договора</div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-6">Номер договора:</div>
                        <div class="col-6 rightCol">0220789</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-6">Дата:</div>
                        <div class="col-6 rightCol">01.08.2020</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-6">Заказчик:</div>
                        <div class="col-6 rightCol">Иванов И. И.</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-6">Обучаюшийся:</div>
                        <div class="col-6 rightCol">Петров И. И.</div>
                    </div>
                    <div class="row d-flex justify-content-center" style="margin:15px 0px 10px 0px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Банковские реквизиты</div>
                </div>
                <div class="col-12 col-lg-7 offset-lg-1 payDetails2 justify-content-center align-items-bottom" >
                    <div class="row d-flex justify-content-center" style="margin:10px 0px 15px 0px">График платежей</div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-3 semCol" style="border-top: 1px solid black;">1 семестр</div>
                        <div class="col-6" style="border-top: 1px solid black; border-bottom: 1px solid black;">Оплатить до 01.09.2020</div>
                        <div class="col-3 priceCol" style="border-top: 1px solid black;">150000 руб.</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-3 semCol">2 семестр</div>
                        <div class="col-6" style="border-bottom: 1px solid black;">Оплатить до 01.09.2020</div>
                        <div class="col-3 priceCol">150000 руб.</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-3 semCol">3 семестр</div>
                        <div class="col-6" style="border-bottom: 1px solid black;">Оплатить до 01.09.2020</div>
                        <div class="col-3 priceCol">150000 руб.</div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-3 semCol">4 семестр</div>
                        <div class="col-6" style="border-bottom: 1px solid black;">Оплатить до 01.09.2020</div>
                        <div class="col-3 priceCol">150000 руб.</div>
                    </div>
                    <div class="row d-flex justify-content-center" style="margin:50px 0px 0px 0px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Показать больше информации...</div>
                </div>
            </div>
            <div class="btnContainerPayment row d-flex justify-content-between" style="margin-top:20px; ">
                <div class="col-3 leftpb justify-content-center d-flex align-items-center">Информация по оплате обучения</div>
                <div class="col-3 midpb justify-content-center d-flex align-items-center">Бланк квитанции оплаты обучения</div>
                <div class="col-3 rightpb justify-content-center d-flex align-items-center">Бланк квитанции оплаты неустойки</div>
            </div>
            <div class="row d-flex justify-content-between payReceived mt-5" style="text-align: center;">
                <div class="row justify-content-center" style="font-size:1.1em;">Оплата за обучение</div>
                <div class="row justify-content-center">Договор № 002292 от 21 августа 2019 г., сумма: 29244 руб.</div>
                <div class="row justify-content-center greenText"><br/>Поступившие платежи</div>
                <div class="row">
                    <div class="col-6">Дата</div>
                    <div class="col-6">Сумма платежа</div>
                </div>
                <div class="row">
                    <div class="col-6">1 августа 2020 года</div>
                    <div class="col-6">300 000 руб.</div>
                </div>
                <div class="row justify-content-center greenText"><br/>Переплата на 01.09.2020 составляет 150 000 руб.</div>
                <div class="row justify-content-center" style="margin-top:10px">К выплате до конца действия договора (до 31 августа 2023 г.): 4500000 руб. (без учета индексации)</div>
                <div class="row justify-content-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-top:10px">ОПЛАТИТЬ ЧЕРЕЗ QR-CODE СБЕРБАНК.ОНЛАЙН</div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>   
<script type="text/javascript" src="js/script.js"></script>
