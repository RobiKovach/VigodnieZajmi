<?php
if (trim($_POST['mfbPhone']) == '') {
	echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Выгодные займы</title>
	<link rel="stylesheet" href="acces/style.css">
	<link rel="stylesheet" href="acces/media.css">
	<style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap");
</style>

</head>
<body>
		<div class="headerTop">
			<!--burder-->


					<div class="hamburger-menu">
  						<input id="menu__toggle" type="checkbox" />
  						<label class="menu__btn" for="menu__toggle">
    						<span></span>
  						</label>
  						<ul class="menu__box">
  							<p class="headerPhone">Меню</p>
    						<li><a class="menu__item" href="index.html">Главная</a></li>
    						<li><a class="menu__item" href="#treb">Требования</a></li>
    						<li><a class="menu__item" href="#calc">Калькулятор</a></li>
    						<li><a class="menu__item" href="#zajm">Как получить займ</a></li>
    						<li><a class="menu__item" href="#faq">Частые вопросы</a></li>
    						<li><a class="menu__item" href="#contact">Контакты</a></li>
    						<li><div class="dropdownNav">
  						<a class="dropbtnNav">Услуги<img src="img/bi_chevron-down.png"></a>
  						<div id="myDropdownNav" class="dropdown-contentNav">
    						<div class="blockDropdownNav">
    							<a href="#" class="activeNav" onClick="changeActiveNav(0);"><img src="img/carbon_location.png">Займы под ПТС автомобилей</a>
    							<a href="#" onClick="changeActiveNav(1);"><img src="img/carbon_location.png">Займы под залог комнаты</a>
    						</div>
  						</div>
					</div></li>
					<li><div class="burgerRight">
				<div class="hLeftBurger">
					<img src="img/carbon_phone-filled.png" >
					<p class="pHBoldBurger">
						<a href="tel:+79951809426">+7 (995) 180-94-26</a>
					</p>
				</div>
				<div class="hMidBurger">
					<img src="img/grommet-icons_clock.png">
					<div class="pHTextBurger">Часы работы: 07:00 - 23:00</div>
				</div>
				<div class="hRightBurger">
					<img src="img/carbon_location.png">
					<div class="dropdown">
  						<button onclick="myFunctionPhone()" class="dropbtn">Краснодар<img src="img/bi_chevron-down.png"></button>
  						<div id="myDropdownPhone" class="dropdown-contentPhone">
    						<div class="blockDropdown">
    							<div class="left">
    							<a href="moscow.html" onClick="changeActive(0);"><img src="img/carbon_location.png">Москва</a>
    							<a href="#" onClick="changeActive(1);"><img src="img/carbon_location.png">Питер</a>
    							<a href="#" onClick="changeActive(2);"><img src="img/carbon_location.png">Новосибирск</a>
    							<a href="#" onClick="changeActive(3);"><img src="img/carbon_location.png">Екатеринбург</a>
    							<a href="#" onClick="changeActive(4);"><img src="img/carbon_location.png">Казань</a>
    						</div>
    						<div class="mid">
    							<a href="#" onClick="changeActive(5);"><img src="img/carbon_location.png">Нижний Новгород</a>
    							<a href="#" onClick="changeActive(6);"><img src="img/carbon_location.png">Челябинск</a>
    							<a href="#" onClick="changeActive(7);"><img src="img/carbon_location.png">Самара</a>
    							<a href="#" onClick="changeActive(8);"><img src="img/carbon_location.png">Омск</a>
    							<a href="#" onClick="changeActive(9);"><img src="img/carbon_location.png">Ростов на Дону</a>
    						</div>
    						<div class="center">
    							<a href="#" onClick="changeActive(10);"><img src="img/carbon_location.png">Уфа</a>
    							<a href="#" onClick="changeActive(11);"><img src="img/carbon_location.png">Красноярск</a>
    							<a href="#" onClick="changeActive(12);"><img src="img/carbon_location.png">Воронеж</a>
    							<a href="#" onClick="changeActive(13);"><img src="img/carbon_location.png">Пермь</a>
    							<a href="#" onClick="changeActive(14);"><img src="img/carbon_location.png">Волгоград</a>
    						</div>
    						<div class="right">
    							<a href="index.html" class="active" onClick="changeActive(15);"><img src="img/carbon_location.png">Краснодар</a>
    							<a href="#" onClick="changeActive(16);"><img src="img/carbon_location.png">Саратов</a>
    							<a href="#" onClick="changeActive(17);"><img src="img/carbon_location.png">Тюмень</a>
    							<a href="#" onClick="changeActive(18);"><img src="img/carbon_location.png">Тольятти</a>
    							<a href="#" onClick="changeActive(19);"><img src="img/carbon_location.png">Ставрополь</a>
    						</div>
    						</div>
  						</div>
					</div>
				</div>
			</div></li>

  						</ul>

					</div>
					<!--ENDBURGER-->
			<div class="headerLeft">
				<a href="index.html"><img src="img/Group%203.png" alt="logo"></a>
				<div class="logoText">
					<p class="pHeader">Выгодные займы</p>
					<p class="description">Займ денег под залог недвижимости</p>
				</div>
			</div>
			<div class="headerRight">
				<div class="hLeft">
					<img src="img/carbon_phone-filled.png" >
					<p class="pHBold">
						<a href="tel:+79951809426">+7 (995) 180-94-26</a>
					</p>
				</div>
				<div class="hMid">
					<img src="img/grommet-icons_clock.png">
					<div class="pHText">Часы работы: 07:00 - 23:00</div>
				</div>
			<div class="hRight">
					<img src="img/carbon_location.png">
					<div class="dropdown">
  						<button onclick="myFunction()" class="dropbtn">Краснодар<img src="img/bi_chevron-down.png"></button>
  						<div id="myDropdown" class="dropdown-content">
    						<div class="blockDropdown">
    							<div class="left">
    							<a href="moscow.html" onClick="changeActive(0);"><img src="img/carbon_location.png">Москва</a>
    							<a href="#" onClick="changeActive(1);"><img src="img/carbon_location.png">Питер</a>
    							<a href="#" onClick="changeActive(2);"><img src="img/carbon_location.png">Новосибирск</a>
    							<a href="#" onClick="changeActive(3);"><img src="img/carbon_location.png">Екатеринбург</a>
    							<a href="#" onClick="changeActive(4);"><img src="img/carbon_location.png">Казань</a>
    						</div>
    						<div class="mid">
    							<a href="#" onClick="changeActive(5);"><img src="img/carbon_location.png">Нижний Новгород</a>
    							<a href="#" onClick="changeActive(6);"><img src="img/carbon_location.png">Челябинск</a>
    							<a href="#" onClick="changeActive(7);"><img src="img/carbon_location.png">Самара</a>
    							<a href="#" onClick="changeActive(8);"><img src="img/carbon_location.png">Омск</a>
    							<a href="#" onClick="changeActive(9);"><img src="img/carbon_location.png">Ростов на Дону</a>
    						</div>
    						<div class="center">
    							<a href="#" onClick="changeActive(10);"><img src="img/carbon_location.png">Уфа</a>
    							<a href="#" onClick="changeActive(11);"><img src="img/carbon_location.png">Красноярск</a>
    							<a href="#" onClick="changeActive(12);"><img src="img/carbon_location.png">Воронеж</a>
    							<a href="#" onClick="changeActive(13);"><img src="img/carbon_location.png">Пермь</a>
    							<a href="#" onClick="changeActive(14);"><img src="img/carbon_location.png">Волгоград</a>
    						</div>
    						<div class="right">
    							<a href="index.html" class="active" onClick="changeActive(15);"><img src="img/carbon_location.png">Краснодар</a>
    							<a href="#" onClick="changeActive(16);"><img src="img/carbon_location.png">Саратов</a>
    							<a href="#" onClick="changeActive(17);"><img src="img/carbon_location.png">Тюмень</a>
    							<a href="#" onClick="changeActive(18);"><img src="img/carbon_location.png">Тольятти</a>
    							<a href="#" onClick="changeActive(19);"><img src="img/carbon_location.png">Ставрополь</a>
    						</div>
    						</div>
  						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="menu" class="nav">
			<a href="index.html">Главная</a>
			<a href="#treb">Требования</a>
			<a href="#calc">Калькулятор</a>
			<a href="#zajm">Как получить займ</a>
			<a href="#faq">Частые вопросы</a>
			<a href="#contact">Контакты</a>
			
				<div class="dropdownNav">
  						<a class="dropbtnNav">Услуги<img src="img/bi_chevron-down.png"></a>
  						<div id="myDropdownNav" class="dropdown-contentNav">
    						<div class="blockDropdownNav">
    							<a href="#" class="activeNav" onClick="changeActiveNav(0);"><img src="img/carbon_location.png">Займы под ПТС автомобилей</a>
    							<a href="#" onClick="changeActiveNav(1);"><img src="img/carbon_location.png">Займы под залог комнаты</a>
    						</div>
  						</div>
					</div>
		</div>
	<div class="banner">
	<div class="wrap">
		<div class="blockBanner">
			<h1>Быстрый займ под залог недвижимости</h1>
			<p>по самой низкой процентный ставке на рынке <span class="bold">1%</span></p>
			<button class="btnBanner" onclick="openForm()">Отправить заявку</button>
			<div id="form1" class="form">
			<div class="form-popup-thanks" id="myForm" style="display: flex!important">
				<p class="headerForm">Что то пошло не так! Попробуйте еще раз!</p>
				<div class="popupBtnContainer">
					<a class="btnPopupForm" href="index.html">На главную</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div class="wrap">
		<div class="sectionOne">
			<p class="header">Наши преимущества</p>
			<div class="itemSectionOne">
				<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">100% одобрение</p>
					<p class="textDescription">Наши партнёры готовы одобрить любую заявку</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/Group%2013.png">
					<p class="textHeader">100 000₽ - 30 млн.₽</p>
					<p class="textDescription">Оформления займа за один день</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/bx_bx-stats.png">
					<p class="textHeader">Ставка 1-3% в месяц</p>
					<p class="textDescription">Определяется ликвидностью</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/akar-icons_shield.png">
					<p class="textHeader">Все официально</p>
					<p class="textDescription">Вы остаететесь собственником</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">Максимальная сумма</p>
					<p class="textDescription">Сумма займа от собственности объекта до 70%</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/fluent_calendar-ltr-28-regular.png">
					<p class="textHeader">от 3 месяцев до 7 лет</p>
					<p class="textDescription">Срок займа с возможностью дальнейшего погашения</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/fluent_document-20-regular.png">
					<p class="textHeader">Кредитная история</p>
					<p class="textDescription">Не имеет для нас значения, мы рассматриваем все варианты</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/fluent_lock-closed-16-regular.png">
					<p class="textHeader">Надежность</p>
					<p class="textDescription">Вы работаем только с надежными компаниями и частными лицами, долго работающими на рынке</p>
				</div>
			</div>
		</div>
		<!--sliderPhone-->
		<div class="sectionOnePhone">
			<p class="header">Наши преимущества</p>
				<div class="sim-slider" id="first">
  					<ul class="sim-slider-list">
   					 <!-- это экран -->
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">100% одобрение</p>
					<p class="textDescription">Наши партнёры готовы одобрить любую заявку</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/Group%2013.png">
					<p class="textHeader">100 000₽ - 30 млн.₽</p>
					<p class="textDescription">Оформления займа за один день</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/bx_bx-stats.png">
					<p class="textHeader">Ставка 1-3% в месяц</p>
					<p class="textDescription">Определяется ликвидностью</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/akar-icons_shield.png">
					<p class="textHeader">Все официально</p>
					<p class="textDescription">Вы остаететесь собственником</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">Максимальная сумма</p>
					<p class="textDescription">Сумма займа от собственности объекта до 70%</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/fluent_calendar-ltr-28-regular.png">
					<p class="textHeader">от 3 месяцев до 7 лет</p>
					<p class="textDescription">Срок займа с возможностью дальнейшего погашения</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/fluent_document-20-regular.png">
					<p class="textHeader">Кредитная история</p>
					<p class="textDescription">Не имеет для нас значения, мы рассматриваем все варианты</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/fluent_lock-closed-16-regular.png">
					<p class="textHeader">Надежность</p>
					<p class="textDescription">Вы работаем только с надежными компаниями и частными лицами, долго работающими на рынке</p>
							</div>
						</li>
  					</ul>
  					<div class="sim-slider-arrow-left"></div>
  					<div class="sim-slider-arrow-right"></div>
  					<div class="sim-slider-dots"></div>
				</div>
		</div>

		<!--endSlider-->

		
		
		<div id="calc" class="sectionTwo">
			<p class="header">ПРИМЕРНЫЙ РАССЧЕТ</p>
			<div class="cacl">
				<div class="calcTop">
					<div class="blockLabelInput">
						<p class="calc">Сумма заема: ₽</p>
						<input id="num1" type="number" placeholder="Введите нужную сумму">
					</div>
					<div class="blockLabelInput">
						<p class="calc">Срок заема: мес</p>
						<input id="num2" type="number" placeholder="Выберите нужный срок">
					</div>
				</div>
				<div class="calcBot">
					<p class="header">Ежемесячный платеж:</p>
					<p id="result">₽</p>
					<button class="btnBanner" onclick="func()">Оставить заявку</button>
				</div>
			</div>
		</div>
	</div>
				<!--sliderPhone-->
		<div class="sectionThreePhone">
			<p class="header">Деньги выдаются под залог следующей недвижимости</p>
				<div class="sim-slider-second"  id="second">
  					<ul class="sim-slider-list">
    				<!-- это экран -->
    					<li class="sim-slider-element">
    						<div class="secThreeItem1">
								<p class="textWhite">Квартиры</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem2">
								<p class="textWhite">Комнаты</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem3">
								<p class="textWhite">Коттеджи</p>
							</div>
    					</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem4">
								<p class="textWhite">Загородные дома</p>
							</div>
    					</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem5">
								<p class="textWhite">Дачные участки</p>
							</div>
    					</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem6">
								<p class="textWhite">Коммерческая недвижимость</p>
							</div>
    					</li>
    				</ul>
  					<div class="sim-slider-arrow-left"></div>
  					<div class="sim-slider-arrow-right"></div>
  					<div class="sim-slider-dots"></div>
				</div>
		</div>
<!--endSlider-->
	<div class="wrap">
		<div class="sectionThree">
			<p class="header">Деньги выдаются под залог следующей недвижимости</p>
			<div class="sectionThreeItems">
				<div class="secThreeItem1">
					<p class="textWhite">Квартиры</p>
				</div>
				<div class="secThreeItem2">
					<p class="textWhite">Комнаты</p>
				</div>
				<div class="secThreeItem3">
					<p class="textWhite">Коттеджи</p>
				</div>
				<div class="secThreeItem4">
					<p class="textWhite">Загородные дома</p>
				</div>
				<div class="secThreeItem5">
					<p class="textWhite">Дачные участки</p>
				</div>
				<div class="secThreeItem6">
					<p class="textWhite">Коммерческая недвижимость</p>
				</div>
			</div>
		</div>
		<div id="treb" class="sectionFour">
			<p class="header">ТРЕБОВАНИЯ</p>
			<div class="sectionFourItems">
				<div class="secFourItem">
					<img class="case" src="img/purse%201.png">
					<p class="itemHeader">Требования к заемщику</p>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Возраст заемщика от 18 до 80 лет</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
					<p class="itemText">Отношение к залогусобственник или несколько собственников</p>

					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Справки о доходах не требуются</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Кредитная история не важна</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Поручители не требуются</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Статус заемщика физическое лицо или ИП</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Гражданство и прописка РФ</p>
					</div>
				</div>
				<div class="secFourItem">
					<img src="img/image%2013.png">
					<p class="itemHeader">Требования к объекту залога</p>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Местоположение объекта: <span class="green">Краснодар и Краснодарский край</span></p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">В собственниках не должно быть несовершеннолетних детей</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Отсутствие судебного ареста на объекте залогового имущества</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Наличие надлежащих оформленных документов на собственность</p>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div id="zajm" class="sectionFive">
		<div class="wrap">
			<p class="headerWhite">Необходимые документы для рассмотрения и получения займа под залог недвижимости</p>
			<div class="sectionFiveItems">
				<div class="secFiveItem">
					<p class="itemHeaderFive">На рассмотрение заявки:</p>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Документ основания: им может быть - договор купли-продажи, наследство, дарственная, разрешение на строительство, договор передачи жилого помещения и.т.д.</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
					<p class="itemText">Свидетельство о гос. регистрации права собственности или ЕГРН - выписка из единого гос.реестра недвижимости</p>

					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Паспорт собственника: все страницы паспорта</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Копия лицевого счёта - справка о том, кто прописан в квартире - Выдает  компания которая обслуживает дом</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Для индивидуальных предпринимателей ЕГРИП</p>
					</div>
					<p class="itemHeaderGrey">* Примечания</p>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Все оригиналы документов на рассмотрение и получение кредита под залог, остаются у Вас на руках. Нам достаточно фото или копии документов для выдачи денежный средств</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Нахождение объекта недвижимости в совместной собственности накладывает некоторые ограничения. Чтобы использовать его для получения кредита, необходимо получить согласие от всех собственников.</p>
					</div>
				</div>
				<div class="secFiveItem">
					<p class="itemHeaderFive">Взять займ под залог недвижимости можно  со следующими разновидностями собственности:</p>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Местоположение объекта: <span class="green">Краснодар и Краснодарский край</span></p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Земельный участок или его отдельную част</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Отсутствие судебного ареста на объекте залогового имущества</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Частный дом или свою долю в нём</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Квартиру или её отдельную часть</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Коммерческие объекты</p>
					</div>
					<p class="itemHeaderFive">Взять займ под залог недвижимости можно  со следующими разновидностями собственности:</p>

					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Ветхое и аварийное жильё</p>
					</div>
					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Объекты, попадающие под снос</p>
					</div>
					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Объекты, приватизированные без учёта прав детей</p>
					</div>
					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Собственность, использование которой ограниченно в рамках закона</p>
					</div>

				</div>
			</div>
				<p class="headerWhite">Для получения денежных средств нужно выполнить несколько простых действий:
				</p>
				<div class="sectionSix">
					<div class="sectionSixItem">
						<img src="img/agreement%202.png">
						<p class="secSixText">Заполните заявку</p>
					</div>
					<div class="sectionSixItem">
						<img src="img/customer-service%202.png">
						<p class="secSixText">Подготовьте нужные документы</p>
					</div>
					<div class="sectionSixItem">
						<img src="img/handshake%202.png">
						<p class="secSixText">Заключаем договор</p>
					</div>
					<div class="sectionSixItem">
						<img src="img/cash-payment%20%281%29%202.png">
						<p class="secSixText">Получите деньги</p>
					</div>
				</div>
				<div class="containerBtn">
					<button class="btnBanner" onclick="openForm()">Отправить заявку</button>
					<div id="form">
						<div class="form-popup" id="myForm">
							<p class="headerForm">Заполните форму и деньги у вас</p>
  							<form action="contact.php" method="post">
								<p class="popupDesc">Ваше имя:</p>
								<input class="black" type="text" name="fio" placeholder="Ваше имя" required>
								<p class="popupDesc">Телефон:</p>
								<input class="black" type="number" name="phone" placeholder="Введите телефон" required>
								<p class="popupDesc">Сумма займа:</p>
								<input class="black" type="number" name="sum" placeholder="Введите сумму" required>
								<div class="popupBtnContainer">
								<input class="btnPopupForm" type="submit" value="Отправить">
								</div>
								<p class="privatePolice">Нажимая кнопку отправить, вы соглашаетесь с нашим <span class="green">пользовательскийм соглашением</span></p>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="wrap">
		<div id="faq" class="sectionSeven">
			<p class="header">ЧАСТО задаваемые вопросы</p>
			<div class="accordion">
   				<div class="tab">
    				<input type="checkbox" id="tab1" name="tab-group">
    				<label for="tab1" class="tab-title">Как быстро я получу деньги под залог недвижимости?</label>
    				<section class="tab-content">
     					<p>Денежные средства Вы получите за один - два дня, после подписания договоров займа и залога, Вам не предется ждать полной регистрации сделки.</p>

    				</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab2" name="tab-group">
    			<label for="tab2" class="tab-title">Остаюсь ли я собственником своего заложенного имущества?</label>
    			<section class="tab-content">
     				<p>Да, Вы продолжаете оставаться собственником своего заложенного имущества, оригиналы документов остаются у Вас на руках. Ни каких переоформлений прав собственности.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab3" name="tab-group">
    			<label for="tab3" class="tab-title">Какие необходимы документы для получения займа?</label>
    			<section class="tab-content">
     				<p>На рассмотрение и получение денег под залог, необходимы документы (копия, скан, фотография в читаемом виде):
					1) Договор основания, он может быть (договор купли-продажи, дарение, наследство, разрешение на строительство, приватизация и.т.д.)
					2) Свидетельство о гос.регистрации права собственности или ЕГРН (единый государственный реестр недвижимости)
					3) Паспорт собственника.
					</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab4" name="tab-group">
    			<label for="tab4" class="tab-title">Важна ли при оформлении займа, кредитная история, справки о доходах?</label>
    			<section class="tab-content">
     				<p>Не важна кредитная история, подтверждение доходов не требуется.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab5" name="tab-group">
    			<label for="tab5" class="tab-title">На какой срок я могу взять займ под залог?</label>
    			<section class="tab-content">
     				<p>Займ под залог предоставляется на любой срок который вы укажите, с возможностью продления (пролонгация) срока займа.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab6" name="tab-group">
    			<label for="tab6" class="tab-title">Могу ли я раньше закрыть заем под залог?</label>
    			<section class="tab-content">
     				<p>Вы можете погашать займ как частично так и досрочно, при этом ни каких штрафов нет. При частичном погашение займа, у Вас уменьшается сумма основного долга, следующий месяц Вы платите с той суммы которая у Вас на остатке.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab7" name="tab-group">
    			<label for="tab7" class="tab-title">Могу ли я перезаложить свою недвижимость под меньшую % ставку?</label>
    			<section class="tab-content">
     				<p>Если Вы взяли займ под залог по высокой ставке, у нас Вы можете перезаложить свою недвижимость под меньшую процентную ставку, увеличить сумму и срок займа.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab8" name="tab-group">
    			<label for="tab8" class="tab-title">Могу ли я получить займ под залог своей доли в недвижимости?</label>
    			<section class="tab-content">
     				<p>Вы сможете получить займы под залог долей в недвижимости без согласия других собственников, при этом Вы продолжаете оставаться собственником своей заложенной доли.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab9" name="tab-group">
    			<label for="tab9" class="tab-title">Смогу ли я продать свое залоговое имущества?</label>
    			<section class="tab-content">
     				<p>Вы получили займ под залог, на Вашу недвижимость ложится обременение в продаже и дарение, но продать недвижимость Вы сможете рассчитавшись по займу. Предворительно за три дня до продажи недвижимости звоните, встречаемся в МФЦ, закрываете остаток займа и в одно окошко подаются документы на снятие обременение и куплю-продажу. Вы закрыли займ под залог и продали недвижимость. Более подробнее информацию Вы сможете получить по телефону.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab10" name="tab-group">
    			<label for="tab10" class="tab-title">На какую сумму я могу рассчитывать при получении займа под залог?</label>
    			<section class="tab-content">
     				<p>Деньги под залог недвижимости выдаются до 70% от рыночной стоимости недвижимости. Всё будет зависить от ликвидности Вашей недвижимости. Будет учитываться её расположение, состояние, тип недвижимости и.т.д.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab11" name="tab-group">
    			<label for="tab11" class="tab-title">Могу ли я еще взять под залог к действующему займу?</label>
    			<section class="tab-content">
     				<p>Вы уже взяли у нас заем под залог и Вам нехватило денежных средств. Вы можете повторно обратится к нам и быстро получить деньги до 60% от рыночной стоимости залогового имущества. Повторно присылать документы на рассмотрение Вам уже не понадобится.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab12" name="tab-group">
    			<label for="tab12" class="tab-title">От чего зависит процентная ставка по займу?</label>
    			<section class="tab-content">
     				<p>У нас Вы получите заем под залог, где процентная ставка от 1% и не будет превышать более 3% в месяц. По каждому объекту недвижимости процентная ставка расчитывается инвидуально. Это зависит от ликвидности объекта недвижимости, какую сумму Вы берете в займы, чем сумма больше тем процентная ставка ниже, повторное обращение за займом тоже влияет на понижение процентной ставки.</p>
    			</section>
   				</div>
  			</div>
		</div>
						<!--sliderPhone-->
		<div class="sectionEightPhone">
			<p class="header">Есть за что выбрать нас!</p>
			<div class="sim-slider-third"  id="third">
  				<ul class="sim-slider-list">
    			<!-- это экран -->
   					 <li class="sim-slider-element">
    					<div class="secstionEightItem">
							<img src="img/155021513_1371728079851644_3622258059042405566_o-e1614789828437-1024x958.jpg">
							<p class="secEightName">Тимур Харбуранов</p>
							<p class="secEighrDesc">Оптовик</p>
							<p class="secEightText">Долго ходил с мыслями где взять деньги, вариант заложить авто или птс не подходил. Слишком маленькая сумма, решил заложить дом, нашел этот сайт  оставил заявку и ребята быстро и грамотно его оценили нашли инвестора и выдали кеш под приемлемые проценты.</p>
						</div>
					</li>
    				<li class="sim-slider-element">
    					<div class="secstionEightItem">
							<img src="img/varvara.png">
							<p class="secEightName">Варвара Прокопенко</p>
							<p class="secEighrDesc">Риелтор</p>
							<p class="secEightText">Когда потребовались деньги я изучила весь рынок, обзвонила все ломбарды и банки. Никто из них не шел мне на встречу и проценты гнули бешеные. Только тут приятно удивили условиями и гибкостью. За что большое спасибо! Деньги получила через два дня после обращения.</p>
						</div>
					</li>
    				<li class="sim-slider-element">
    					<div class="secstionEightItem">
							<img src="img/trifonenko.png">
							<p class="secEightName">Семья Трифоненко</p>
							<p class="secEighrDesc">Пенсионеры</p>
							<p class="secEightText">Взять деньги под залог недвижимости в банке не удалось. Приступили с мужем к поиску альтернативы и нашли ее здесь! Заложив квартиру на 4 месяца, успешно погасили залог и решили свои вопросы - спасибо займзалогу. Искренне рекомендуем!</p>
						</div>
    				</li>
  				</ul>
  				<div class="sim-slider-arrow-left"></div>
  				<div class="sim-slider-arrow-right"></div>
  				<div class="sim-slider-dots"></div>
			</div>
		</div>

<!--endSlider-->
		<div class="sectionEight">
			<p class="header">Есть за что выбрать нас!</p>
			<div class="secEightItems">
				<div class="secstionEightItem">
					<img src="img/155021513_1371728079851644_3622258059042405566_o-e1614789828437-1024x958.jpg">
					<p class="secEightName">Тимур Харбуранов</p>
					<p class="secEighrDesc">Оптовик</p>
					<p class="secEightText">Долго ходил с мыслями где взять деньги, вариант заложить авто или птс не подходил. Слишком маленькая сумма, решил заложить дом, нашел этот сайт  оставил заявку и ребята быстро и грамотно его оценили нашли инвестора и выдали кеш под приемлемые проценты.</p>
				</div>
				<div class="secstionEightItem">
					<img src="img/varvara.png">
					<p class="secEightName">Варвара Прокопенко</p>
					<p class="secEighrDesc">Риелтор</p>
					<p class="secEightText">Когда потребовались деньги я изучила весь рынок, обзвонила все ломбарды и банки. Никто из них не шел мне на встречу и проценты гнули бешеные. Только тут приятно удивили условиями и гибкостью. За что большое спасибо! Деньги получила через два дня после обращения.</p>
				</div>
				<div class="secstionEightItem">
					<img src="img/trifonenko.png">
					<p class="secEightName">Семья Трифоненко</p>
					<p class="secEighrDesc">Пенсионеры</p>
					<p class="secEightText">Взять деньги под залог недвижимости в банке не удалось. Приступили с мужем к поиску альтернативы и нашли ее здесь! Заложив квартиру на 4 месяца, успешно погасили залог и решили свои вопросы - спасибо займзалогу. Искренне рекомендуем!</p>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="wrap">
			<div id="contact" class="footer">
				<p class="headerFooterWhite">Свяжитесь с нами</p>
				<div class="itemsFooter">
					<div class="itemFoote">
						<p class="footerDesc">Напишите нам, и мы свяжемся с вами в ближайщее время</p>
						<form action="contact.php" method="post">
							<p class="footerDesc">Ваше имя:</p>
							<input type="text" name="mfbName" placeholder="Ваше имя" required>
							<p class="footerDesc">Электронная почта:</p>
							<input type="text" name="mfbMail" placeholder="Эл.почта" required>
							<p class="footerDesc">Телефон</p>
							<input type="number" name="mfbPhone" placeholder="Ваш телефон" required>
							<div class="footerBtnComtainer">
								<input class="btnFooterForm" type="submit" value="Отправить">
							</div>
						</form>
					</div>
					<div class="itemFoote">
						<p class="footerDescBold">Наш адрес:</p>
						<p class="footerDesc">ул. Тургенева 135/1, 3 этаж, офис 15, Краснодар, 350049, Россия​</p>
						<p class="footerDescBold">Email:</p>
						<p class="footerDesc">
							<a class="footerLink" href="mailto:zaem-pod-zalog-nedvizhimosti@mail.ru">zaem-pod-zalog-nedvizhimosti@mail.ru</a>
						</p>
						<p class="footerDescBold">Телефон:</p>
						<div class="social">
							<a href="#"><img src="img/akar-icons_vk-fill.png"></a>
							<a href="#"><img src="img/brandico_facebook.png"></a>
							<a href="#"><img src="img/akar-icons_instagram-fill.png"></a>
						</div>
						<p class="footerDesc">
							<a class="footerLink" href="tel: +79054613467">+7 905 461 34 67</a>
						</p>
						<div class="footerMap">
							<div style="position: relative; overflow: hidden;">
								<a style="color: #eee; font-size: 12px; position: absolute; top: 0px;" href="https://yandex.ru/maps/35/krasnodar/?utm_medium=mapframe&amp;utm_source=maps">Краснодар</a>
								<a style="color: #eee; font-size: 12px; position: absolute; top: 14px;" href="https://yandex.ru/maps/35/krasnodar/house/ulitsa_turgeneva_135_1/Z0EYfwFgSkEAQFpvfXx0d3xnYw==/?ll=38.960470%2C45.056304&amp;mode=search&amp;sll=38.975313%2C45.035470&amp;sspn=0.283070%2C0.112100&amp;text=atcnbdfkmysq%20%2Cbpytc%20wtynh&amp;utm_medium=mapframe&amp;utm_source=maps&amp;z=16.95">Улица Тургенева, 135/1 — Яндекс.Карты</a>
								<iframe style="position: relative;" src="https://yandex.ru/map-widget/v1/-/CCUQMYgKsA" width="100%" height="210" frameborder="1" allowfullscreen="true"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>© 2014-2021 «Выгодные займы» Все права защищены.</p>
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="acces/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="acces/custom.js"></script>
<script type="text/javascript" src="acces/mask.js"></script>
</html>


';
	echo 'fasle';
}
else {
	$txtname = trim($_POST['mfbName']);
	$txtemail = trim($_POST['mfbMail']);
	$txtphone = trim($_POST['mfbPhone']);
	$txtsum = trim($_POST['mfbSum']);

	// от кого
	$fromMail = 'test@test.ru';
	// Сюда введите Ваш email
	$emailTo = 'zaem-pod-zalog-nedvizhimosti@mail.ru
';

	$subject = 'Обратная связь';
	$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
	$headers = "From: Пример формы<$fromMail>\n";
	$headers .= 'Content-type: text/plain; charset="utf-8"\r\n';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
	// тело письма
	$body = "Получено письмо с сайта ".$site." \n\nИмя: ".$txtname."\nТелефон: ".$txtphone."\ne-mail: ".$txtemail."\nСумма: ".$txtsum;
	mail($emailTo, $subject, $body, $headers );
	echo '

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Выгодные займы</title>
	<link rel="stylesheet" href="acces/style.css">
	<link rel="stylesheet" href="acces/media.css">
	<style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap");
</style>

</head>
<body>
		<div class="headerTop">
			<!--burder-->


					<div class="hamburger-menu">
  						<input id="menu__toggle" type="checkbox" />
  						<label class="menu__btn" for="menu__toggle">
    						<span></span>
  						</label>
  						<ul class="menu__box">
  							<p class="headerPhone">Меню</p>
    						<li><a class="menu__item" href="index.html">Главная</a></li>
    						<li><a class="menu__item" href="#treb">Требования</a></li>
    						<li><a class="menu__item" href="#calc">Калькулятор</a></li>
    						<li><a class="menu__item" href="#zajm">Как получить займ</a></li>
    						<li><a class="menu__item" href="#faq">Частые вопросы</a></li>
    						<li><a class="menu__item" href="#contact">Контакты</a></li>
    						<li><div class="dropdownNav">
  						<a class="dropbtnNav">Услуги<img src="img/bi_chevron-down.png"></a>
  						<div id="myDropdownNav" class="dropdown-contentNav">
    						<div class="blockDropdownNav">
    							<a href="#" class="activeNav" onClick="changeActiveNav(0);"><img src="img/carbon_location.png">Займы под ПТС автомобилей</a>
    							<a href="#" onClick="changeActiveNav(1);"><img src="img/carbon_location.png">Займы под залог комнаты</a>
    						</div>
  						</div>
					</div></li>
					<li><div class="burgerRight">
				<div class="hLeftBurger">
					<img src="img/carbon_phone-filled.png" >
					<p class="pHBoldBurger">
						<a href="tel:+79951809426">+7 (995) 180-94-26</a>
					</p>
				</div>
				<div class="hMidBurger">
					<img src="img/grommet-icons_clock.png">
					<div class="pHTextBurger">Часы работы: 07:00 - 23:00</div>
				</div>
				<div class="hRightBurger">
					<img src="img/carbon_location.png">
					<div class="dropdown">
  						<button onclick="myFunctionPhone()" class="dropbtn">Краснодар<img src="img/bi_chevron-down.png"></button>
  						<div id="myDropdownPhone" class="dropdown-contentPhone">
    						<div class="blockDropdown">
    							<div class="left">
    							<a href="moscow.html" onClick="changeActive(0);"><img src="img/carbon_location.png">Москва</a>
    							<a href="#" onClick="changeActive(1);"><img src="img/carbon_location.png">Питер</a>
    							<a href="#" onClick="changeActive(2);"><img src="img/carbon_location.png">Новосибирск</a>
    							<a href="#" onClick="changeActive(3);"><img src="img/carbon_location.png">Екатеринбург</a>
    							<a href="#" onClick="changeActive(4);"><img src="img/carbon_location.png">Казань</a>
    						</div>
    						<div class="mid">
    							<a href="#" onClick="changeActive(5);"><img src="img/carbon_location.png">Нижний Новгород</a>
    							<a href="#" onClick="changeActive(6);"><img src="img/carbon_location.png">Челябинск</a>
    							<a href="#" onClick="changeActive(7);"><img src="img/carbon_location.png">Самара</a>
    							<a href="#" onClick="changeActive(8);"><img src="img/carbon_location.png">Омск</a>
    							<a href="#" onClick="changeActive(9);"><img src="img/carbon_location.png">Ростов на Дону</a>
    						</div>
    						<div class="center">
    							<a href="#" onClick="changeActive(10);"><img src="img/carbon_location.png">Уфа</a>
    							<a href="#" onClick="changeActive(11);"><img src="img/carbon_location.png">Красноярск</a>
    							<a href="#" onClick="changeActive(12);"><img src="img/carbon_location.png">Воронеж</a>
    							<a href="#" onClick="changeActive(13);"><img src="img/carbon_location.png">Пермь</a>
    							<a href="#" onClick="changeActive(14);"><img src="img/carbon_location.png">Волгоград</a>
    						</div>
    						<div class="right">
    							<a href="index.html" class="active" onClick="changeActive(15);"><img src="img/carbon_location.png">Краснодар</a>
    							<a href="#" onClick="changeActive(16);"><img src="img/carbon_location.png">Саратов</a>
    							<a href="#" onClick="changeActive(17);"><img src="img/carbon_location.png">Тюмень</a>
    							<a href="#" onClick="changeActive(18);"><img src="img/carbon_location.png">Тольятти</a>
    							<a href="#" onClick="changeActive(19);"><img src="img/carbon_location.png">Ставрополь</a>
    						</div>
    						</div>
  						</div>
					</div>
				</div>
			</div></li>

  						</ul>

					</div>
					<!--ENDBURGER-->
			<div class="headerLeft">
				<a href="index.html"><img src="img/Group%203.png" alt="logo"></a>
				<div class="logoText">
					<p class="pHeader">Выгодные займы</p>
					<p class="description">Займ денег под залог недвижимости</p>
				</div>
			</div>
			<div class="headerRight">
				<div class="hLeft">
					<img src="img/carbon_phone-filled.png" >
					<p class="pHBold">
						<a href="tel:+79951809426">+7 (995) 180-94-26</a>
					</p>
				</div>
				<div class="hMid">
					<img src="img/grommet-icons_clock.png">
					<div class="pHText">Часы работы: 07:00 - 23:00</div>
				</div>
			<div class="hRight">
					<img src="img/carbon_location.png">
					<div class="dropdown">
  						<button onclick="myFunction()" class="dropbtn">Краснодар<img src="img/bi_chevron-down.png"></button>
  						<div id="myDropdown" class="dropdown-content">
    						<div class="blockDropdown">
    							<div class="left">
    							<a href="moscow.html" onClick="changeActive(0);"><img src="img/carbon_location.png">Москва</a>
    							<a href="#" onClick="changeActive(1);"><img src="img/carbon_location.png">Питер</a>
    							<a href="#" onClick="changeActive(2);"><img src="img/carbon_location.png">Новосибирск</a>
    							<a href="#" onClick="changeActive(3);"><img src="img/carbon_location.png">Екатеринбург</a>
    							<a href="#" onClick="changeActive(4);"><img src="img/carbon_location.png">Казань</a>
    						</div>
    						<div class="mid">
    							<a href="#" onClick="changeActive(5);"><img src="img/carbon_location.png">Нижний Новгород</a>
    							<a href="#" onClick="changeActive(6);"><img src="img/carbon_location.png">Челябинск</a>
    							<a href="#" onClick="changeActive(7);"><img src="img/carbon_location.png">Самара</a>
    							<a href="#" onClick="changeActive(8);"><img src="img/carbon_location.png">Омск</a>
    							<a href="#" onClick="changeActive(9);"><img src="img/carbon_location.png">Ростов на Дону</a>
    						</div>
    						<div class="center">
    							<a href="#" onClick="changeActive(10);"><img src="img/carbon_location.png">Уфа</a>
    							<a href="#" onClick="changeActive(11);"><img src="img/carbon_location.png">Красноярск</a>
    							<a href="#" onClick="changeActive(12);"><img src="img/carbon_location.png">Воронеж</a>
    							<a href="#" onClick="changeActive(13);"><img src="img/carbon_location.png">Пермь</a>
    							<a href="#" onClick="changeActive(14);"><img src="img/carbon_location.png">Волгоград</a>
    						</div>
    						<div class="right">
    							<a href="index.html" class="active" onClick="changeActive(15);"><img src="img/carbon_location.png">Краснодар</a>
    							<a href="#" onClick="changeActive(16);"><img src="img/carbon_location.png">Саратов</a>
    							<a href="#" onClick="changeActive(17);"><img src="img/carbon_location.png">Тюмень</a>
    							<a href="#" onClick="changeActive(18);"><img src="img/carbon_location.png">Тольятти</a>
    							<a href="#" onClick="changeActive(19);"><img src="img/carbon_location.png">Ставрополь</a>
    						</div>
    						</div>
  						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="menu" class="nav">
			<a href="index.html">Главная</a>
			<a href="#treb">Требования</a>
			<a href="#calc">Калькулятор</a>
			<a href="#zajm">Как получить займ</a>
			<a href="#faq">Частые вопросы</a>
			<a href="#contact">Контакты</a>
			
				<div class="dropdownNav">
  						<a class="dropbtnNav">Услуги<img src="img/bi_chevron-down.png"></a>
  						<div id="myDropdownNav" class="dropdown-contentNav">
    						<div class="blockDropdownNav">
    							<a href="#" class="activeNav" onClick="changeActiveNav(0);"><img src="img/carbon_location.png">Займы под ПТС автомобилей</a>
    							<a href="#" onClick="changeActiveNav(1);"><img src="img/carbon_location.png">Займы под залог комнаты</a>
    						</div>
  						</div>
					</div>
		</div>
	<div class="banner">
	<div class="wrap">
		<div class="blockBanner">
			<h1>Быстрый займ под залог недвижимости</h1>
			<p>по самой низкой процентный ставке на рынке <span class="bold">1%</span></p>
			<button class="btnBanner" onclick="openForm()">Отправить заявку</button>
			<div id="form1" class="form">
			<div class="form-popup-thanks" id="myForm" style="display: flex!important">
				<img src="img/ok.png">
				<p class="headerForm">Заявка успешно отправлена!</p>
				<div class="popupBtnContainer">
					<a class="btnPopupForm" href="index.html">На главную</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div class="wrap">
		<div class="sectionOne">
			<p class="header">Наши преимущества</p>
			<div class="itemSectionOne">
				<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">100% одобрение</p>
					<p class="textDescription">Наши партнёры готовы одобрить любую заявку</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/Group%2013.png">
					<p class="textHeader">100 000₽ - 30 млн.₽</p>
					<p class="textDescription">Оформления займа за один день</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/bx_bx-stats.png">
					<p class="textHeader">Ставка 1-3% в месяц</p>
					<p class="textDescription">Определяется ликвидностью</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/akar-icons_shield.png">
					<p class="textHeader">Все официально</p>
					<p class="textDescription">Вы остаететесь собственником</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">Максимальная сумма</p>
					<p class="textDescription">Сумма займа от собственности объекта до 70%</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/fluent_calendar-ltr-28-regular.png">
					<p class="textHeader">от 3 месяцев до 7 лет</p>
					<p class="textDescription">Срок займа с возможностью дальнейшего погашения</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/fluent_document-20-regular.png">
					<p class="textHeader">Кредитная история</p>
					<p class="textDescription">Не имеет для нас значения, мы рассматриваем все варианты</p>
				</div>
				<div class="itemsSectionOne">
					<img src="img/fluent_lock-closed-16-regular.png">
					<p class="textHeader">Надежность</p>
					<p class="textDescription">Вы работаем только с надежными компаниями и частными лицами, долго работающими на рынке</p>
				</div>
			</div>
		</div>
		<!--sliderPhone-->
		<div class="sectionOnePhone">
			<p class="header">Наши преимущества</p>
				<div class="sim-slider" id="first">
  					<ul class="sim-slider-list">
   					 <!-- это экран -->
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">100% одобрение</p>
					<p class="textDescription">Наши партнёры готовы одобрить любую заявку</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/Group%2013.png">
					<p class="textHeader">100 000₽ - 30 млн.₽</p>
					<p class="textDescription">Оформления займа за один день</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/bx_bx-stats.png">
					<p class="textHeader">Ставка 1-3% в месяц</p>
					<p class="textDescription">Определяется ликвидностью</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/akar-icons_shield.png">
					<p class="textHeader">Все официально</p>
					<p class="textDescription">Вы остаететесь собственником</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/Group.png">
					<p class="textHeader">Максимальная сумма</p>
					<p class="textDescription">Сумма займа от собственности объекта до 70%</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/fluent_calendar-ltr-28-regular.png">
					<p class="textHeader">от 3 месяцев до 7 лет</p>
					<p class="textDescription">Срок займа с возможностью дальнейшего погашения</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/fluent_document-20-regular.png">
					<p class="textHeader">Кредитная история</p>
					<p class="textDescription">Не имеет для нас значения, мы рассматриваем все варианты</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="itemsSectionOne">
					<img src="img/fluent_lock-closed-16-regular.png">
					<p class="textHeader">Надежность</p>
					<p class="textDescription">Вы работаем только с надежными компаниями и частными лицами, долго работающими на рынке</p>
							</div>
						</li>
  					</ul>
  					<div class="sim-slider-arrow-left"></div>
  					<div class="sim-slider-arrow-right"></div>
  					<div class="sim-slider-dots"></div>
				</div>
		</div>

		<!--endSlider-->

		
		
		<div id="calc" class="sectionTwo">
			<p class="header">ПРИМЕРНЫЙ РАССЧЕТ</p>
			<div class="cacl">
				<div class="calcTop">
					<div class="blockLabelInput">
						<p class="calc">Сумма заема: ₽</p>
						<input id="num1" type="number" placeholder="Введите нужную сумму">
					</div>
					<div class="blockLabelInput">
						<p class="calc">Срок заема: мес</p>
						<input id="num2" type="number" placeholder="Выберите нужный срок">
					</div>
				</div>
				<div class="calcBot">
					<p class="header">Ежемесячный платеж:</p>
					<p id="result">₽</p>
					<button class="btnBanner" onclick="func()">Оставить заявку</button>
				</div>
			</div>
		</div>
	</div>
				<!--sliderPhone-->
		<div class="sectionThreePhone">
			<p class="header">Деньги выдаются под залог следующей недвижимости</p>
				<div class="sim-slider-second"  id="second">
  					<ul class="sim-slider-list">
    				<!-- это экран -->
    					<li class="sim-slider-element">
    						<div class="secThreeItem1">
								<p class="textWhite">Квартиры</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem2">
								<p class="textWhite">Комнаты</p>
							</div>
						</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem3">
								<p class="textWhite">Коттеджи</p>
							</div>
    					</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem4">
								<p class="textWhite">Загородные дома</p>
							</div>
    					</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem5">
								<p class="textWhite">Дачные участки</p>
							</div>
    					</li>
    					<li class="sim-slider-element">
    						<div class="secThreeItem6">
								<p class="textWhite">Коммерческая недвижимость</p>
							</div>
    					</li>
    				</ul>
  					<div class="sim-slider-arrow-left"></div>
  					<div class="sim-slider-arrow-right"></div>
  					<div class="sim-slider-dots"></div>
				</div>
		</div>
<!--endSlider-->
	<div class="wrap">
		<div class="sectionThree">
			<p class="header">Деньги выдаются под залог следующей недвижимости</p>
			<div class="sectionThreeItems">
				<div class="secThreeItem1">
					<p class="textWhite">Квартиры</p>
				</div>
				<div class="secThreeItem2">
					<p class="textWhite">Комнаты</p>
				</div>
				<div class="secThreeItem3">
					<p class="textWhite">Коттеджи</p>
				</div>
				<div class="secThreeItem4">
					<p class="textWhite">Загородные дома</p>
				</div>
				<div class="secThreeItem5">
					<p class="textWhite">Дачные участки</p>
				</div>
				<div class="secThreeItem6">
					<p class="textWhite">Коммерческая недвижимость</p>
				</div>
			</div>
		</div>
		<div id="treb" class="sectionFour">
			<p class="header">ТРЕБОВАНИЯ</p>
			<div class="sectionFourItems">
				<div class="secFourItem">
					<img class="case" src="img/purse%201.png">
					<p class="itemHeader">Требования к заемщику</p>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Возраст заемщика от 18 до 80 лет</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
					<p class="itemText">Отношение к залогусобственник или несколько собственников</p>

					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Справки о доходах не требуются</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Кредитная история не важна</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Поручители не требуются</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Статус заемщика физическое лицо или ИП</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Гражданство и прописка РФ</p>
					</div>
				</div>
				<div class="secFourItem">
					<img src="img/image%2013.png">
					<p class="itemHeader">Требования к объекту залога</p>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Местоположение объекта: <span class="green">Краснодар и Краснодарский край</span></p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">В собственниках не должно быть несовершеннолетних детей</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Отсутствие судебного ареста на объекте залогового имущества</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Наличие надлежащих оформленных документов на собственность</p>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div id="zajm" class="sectionFive">
		<div class="wrap">
			<p class="headerWhite">Необходимые документы для рассмотрения и получения займа под залог недвижимости</p>
			<div class="sectionFiveItems">
				<div class="secFiveItem">
					<p class="itemHeaderFive">На рассмотрение заявки:</p>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Документ основания: им может быть - договор купли-продажи, наследство, дарственная, разрешение на строительство, договор передачи жилого помещения и.т.д.</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
					<p class="itemText">Свидетельство о гос. регистрации права собственности или ЕГРН - выписка из единого гос.реестра недвижимости</p>

					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Паспорт собственника: все страницы паспорта</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Копия лицевого счёта - справка о том, кто прописан в квартире - Выдает  компания которая обслуживает дом</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Для индивидуальных предпринимателей ЕГРИП</p>
					</div>
					<p class="itemHeaderGrey">* Примечания</p>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Все оригиналы документов на рассмотрение и получение кредита под залог, остаются у Вас на руках. Нам достаточно фото или копии документов для выдачи денежный средств</p>
					</div>
					<div class="itemBlockText">
						<img class="imgDeffis" src="img/Line%201.png">
						<p class="itemText">Нахождение объекта недвижимости в совместной собственности накладывает некоторые ограничения. Чтобы использовать его для получения кредита, необходимо получить согласие от всех собственников.</p>
					</div>
				</div>
				<div class="secFiveItem">
					<p class="itemHeaderFive">Взять займ под залог недвижимости можно  со следующими разновидностями собственности:</p>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Местоположение объекта: <span class="green">Краснодар и Краснодарский край</span></p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Земельный участок или его отдельную част</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Отсутствие судебного ареста на объекте залогового имущества</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Частный дом или свою долю в нём</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Квартиру или её отдельную часть</p>
					</div>
					<div class="itemBlockText">
						<img src="img/Vector.png">
						<p class="itemText">Коммерческие объекты</p>
					</div>
					<p class="itemHeaderFive">Взять займ под залог недвижимости можно  со следующими разновидностями собственности:</p>

					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Ветхое и аварийное жильё</p>
					</div>
					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Объекты, попадающие под снос</p>
					</div>
					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Объекты, приватизированные без учёта прав детей</p>
					</div>
					<div class="itemBlockText">
						<img src="img/VectorX.png">
						<p class="itemText">Собственность, использование которой ограниченно в рамках закона</p>
					</div>

				</div>
			</div>
				<p class="headerWhite">Для получения денежных средств нужно выполнить несколько простых действий:
				</p>
				<div class="sectionSix">
					<div class="sectionSixItem">
						<img src="img/agreement%202.png">
						<p class="secSixText">Заполните заявку</p>
					</div>
					<div class="sectionSixItem">
						<img src="img/customer-service%202.png">
						<p class="secSixText">Подготовьте нужные документы</p>
					</div>
					<div class="sectionSixItem">
						<img src="img/handshake%202.png">
						<p class="secSixText">Заключаем договор</p>
					</div>
					<div class="sectionSixItem">
						<img src="img/cash-payment%20%281%29%202.png">
						<p class="secSixText">Получите деньги</p>
					</div>
				</div>
				<div class="containerBtn">
					<button class="btnBanner" onclick="openForm()">Отправить заявку</button>
					<div id="form">
						<div class="form-popup" id="myForm">
							<p class="headerForm">Заполните форму и деньги у вас</p>
  							<form action="contact.php" method="post">
								<p class="popupDesc">Ваше имя:</p>
								<input class="black" type="text" name="fio" placeholder="Ваше имя" required>
								<p class="popupDesc">Телефон:</p>
								<input class="black" type="number" name="phone" placeholder="Введите телефон" required>
								<p class="popupDesc">Сумма займа:</p>
								<input class="black" type="number" name="sum" placeholder="Введите сумму" required>
								<div class="popupBtnContainer">
								<input class="btnPopupForm" type="submit" value="Отправить">
								</div>
								<p class="privatePolice">Нажимая кнопку отправить, вы соглашаетесь с нашим <span class="green">пользовательскийм соглашением</span></p>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="wrap">
		<div id="faq" class="sectionSeven">
			<p class="header">ЧАСТО задаваемые вопросы</p>
			<div class="accordion">
   				<div class="tab">
    				<input type="checkbox" id="tab1" name="tab-group">
    				<label for="tab1" class="tab-title">Как быстро я получу деньги под залог недвижимости?</label>
    				<section class="tab-content">
     					<p>Денежные средства Вы получите за один - два дня, после подписания договоров займа и залога, Вам не предется ждать полной регистрации сделки.</p>

    				</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab2" name="tab-group">
    			<label for="tab2" class="tab-title">Остаюсь ли я собственником своего заложенного имущества?</label>
    			<section class="tab-content">
     				<p>Да, Вы продолжаете оставаться собственником своего заложенного имущества, оригиналы документов остаются у Вас на руках. Ни каких переоформлений прав собственности.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab3" name="tab-group">
    			<label for="tab3" class="tab-title">Какие необходимы документы для получения займа?</label>
    			<section class="tab-content">
     				<p>На рассмотрение и получение денег под залог, необходимы документы (копия, скан, фотография в читаемом виде):
					1) Договор основания, он может быть (договор купли-продажи, дарение, наследство, разрешение на строительство, приватизация и.т.д.)
					2) Свидетельство о гос.регистрации права собственности или ЕГРН (единый государственный реестр недвижимости)
					3) Паспорт собственника.
					</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab4" name="tab-group">
    			<label for="tab4" class="tab-title">Важна ли при оформлении займа, кредитная история, справки о доходах?</label>
    			<section class="tab-content">
     				<p>Не важна кредитная история, подтверждение доходов не требуется.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab5" name="tab-group">
    			<label for="tab5" class="tab-title">На какой срок я могу взять займ под залог?</label>
    			<section class="tab-content">
     				<p>Займ под залог предоставляется на любой срок который вы укажите, с возможностью продления (пролонгация) срока займа.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab6" name="tab-group">
    			<label for="tab6" class="tab-title">Могу ли я раньше закрыть заем под залог?</label>
    			<section class="tab-content">
     				<p>Вы можете погашать займ как частично так и досрочно, при этом ни каких штрафов нет. При частичном погашение займа, у Вас уменьшается сумма основного долга, следующий месяц Вы платите с той суммы которая у Вас на остатке.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab7" name="tab-group">
    			<label for="tab7" class="tab-title">Могу ли я перезаложить свою недвижимость под меньшую % ставку?</label>
    			<section class="tab-content">
     				<p>Если Вы взяли займ под залог по высокой ставке, у нас Вы можете перезаложить свою недвижимость под меньшую процентную ставку, увеличить сумму и срок займа.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab8" name="tab-group">
    			<label for="tab8" class="tab-title">Могу ли я получить займ под залог своей доли в недвижимости?</label>
    			<section class="tab-content">
     				<p>Вы сможете получить займы под залог долей в недвижимости без согласия других собственников, при этом Вы продолжаете оставаться собственником своей заложенной доли.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab9" name="tab-group">
    			<label for="tab9" class="tab-title">Смогу ли я продать свое залоговое имущества?</label>
    			<section class="tab-content">
     				<p>Вы получили займ под залог, на Вашу недвижимость ложится обременение в продаже и дарение, но продать недвижимость Вы сможете рассчитавшись по займу. Предворительно за три дня до продажи недвижимости звоните, встречаемся в МФЦ, закрываете остаток займа и в одно окошко подаются документы на снятие обременение и куплю-продажу. Вы закрыли займ под залог и продали недвижимость. Более подробнее информацию Вы сможете получить по телефону.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab10" name="tab-group">
    			<label for="tab10" class="tab-title">На какую сумму я могу рассчитывать при получении займа под залог?</label>
    			<section class="tab-content">
     				<p>Деньги под залог недвижимости выдаются до 70% от рыночной стоимости недвижимости. Всё будет зависить от ликвидности Вашей недвижимости. Будет учитываться её расположение, состояние, тип недвижимости и.т.д.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab11" name="tab-group">
    			<label for="tab11" class="tab-title">Могу ли я еще взять под залог к действующему займу?</label>
    			<section class="tab-content">
     				<p>Вы уже взяли у нас заем под залог и Вам нехватило денежных средств. Вы можете повторно обратится к нам и быстро получить деньги до 60% от рыночной стоимости залогового имущества. Повторно присылать документы на рассмотрение Вам уже не понадобится.</p>
    			</section>
   				</div>
   				<div class="tab">
    			<input type="checkbox" id="tab12" name="tab-group">
    			<label for="tab12" class="tab-title">От чего зависит процентная ставка по займу?</label>
    			<section class="tab-content">
     				<p>У нас Вы получите заем под залог, где процентная ставка от 1% и не будет превышать более 3% в месяц. По каждому объекту недвижимости процентная ставка расчитывается инвидуально. Это зависит от ликвидности объекта недвижимости, какую сумму Вы берете в займы, чем сумма больше тем процентная ставка ниже, повторное обращение за займом тоже влияет на понижение процентной ставки.</p>
    			</section>
   				</div>
  			</div>
		</div>
						<!--sliderPhone-->
		<div class="sectionEightPhone">
			<p class="header">Есть за что выбрать нас!</p>
			<div class="sim-slider-third"  id="third">
  				<ul class="sim-slider-list">
    			<!-- это экран -->
   					 <li class="sim-slider-element">
    					<div class="secstionEightItem">
							<img src="img/155021513_1371728079851644_3622258059042405566_o-e1614789828437-1024x958.jpg">
							<p class="secEightName">Тимур Харбуранов</p>
							<p class="secEighrDesc">Оптовик</p>
							<p class="secEightText">Долго ходил с мыслями где взять деньги, вариант заложить авто или птс не подходил. Слишком маленькая сумма, решил заложить дом, нашел этот сайт  оставил заявку и ребята быстро и грамотно его оценили нашли инвестора и выдали кеш под приемлемые проценты.</p>
						</div>
					</li>
    				<li class="sim-slider-element">
    					<div class="secstionEightItem">
							<img src="img/varvara.png">
							<p class="secEightName">Варвара Прокопенко</p>
							<p class="secEighrDesc">Риелтор</p>
							<p class="secEightText">Когда потребовались деньги я изучила весь рынок, обзвонила все ломбарды и банки. Никто из них не шел мне на встречу и проценты гнули бешеные. Только тут приятно удивили условиями и гибкостью. За что большое спасибо! Деньги получила через два дня после обращения.</p>
						</div>
					</li>
    				<li class="sim-slider-element">
    					<div class="secstionEightItem">
							<img src="img/trifonenko.png">
							<p class="secEightName">Семья Трифоненко</p>
							<p class="secEighrDesc">Пенсионеры</p>
							<p class="secEightText">Взять деньги под залог недвижимости в банке не удалось. Приступили с мужем к поиску альтернативы и нашли ее здесь! Заложив квартиру на 4 месяца, успешно погасили залог и решили свои вопросы - спасибо займзалогу. Искренне рекомендуем!</p>
						</div>
    				</li>
  				</ul>
  				<div class="sim-slider-arrow-left"></div>
  				<div class="sim-slider-arrow-right"></div>
  				<div class="sim-slider-dots"></div>
			</div>
		</div>

<!--endSlider-->
		<div class="sectionEight">
			<p class="header">Есть за что выбрать нас!</p>
			<div class="secEightItems">
				<div class="secstionEightItem">
					<img src="img/155021513_1371728079851644_3622258059042405566_o-e1614789828437-1024x958.jpg">
					<p class="secEightName">Тимур Харбуранов</p>
					<p class="secEighrDesc">Оптовик</p>
					<p class="secEightText">Долго ходил с мыслями где взять деньги, вариант заложить авто или птс не подходил. Слишком маленькая сумма, решил заложить дом, нашел этот сайт  оставил заявку и ребята быстро и грамотно его оценили нашли инвестора и выдали кеш под приемлемые проценты.</p>
				</div>
				<div class="secstionEightItem">
					<img src="img/varvara.png">
					<p class="secEightName">Варвара Прокопенко</p>
					<p class="secEighrDesc">Риелтор</p>
					<p class="secEightText">Когда потребовались деньги я изучила весь рынок, обзвонила все ломбарды и банки. Никто из них не шел мне на встречу и проценты гнули бешеные. Только тут приятно удивили условиями и гибкостью. За что большое спасибо! Деньги получила через два дня после обращения.</p>
				</div>
				<div class="secstionEightItem">
					<img src="img/trifonenko.png">
					<p class="secEightName">Семья Трифоненко</p>
					<p class="secEighrDesc">Пенсионеры</p>
					<p class="secEightText">Взять деньги под залог недвижимости в банке не удалось. Приступили с мужем к поиску альтернативы и нашли ее здесь! Заложив квартиру на 4 месяца, успешно погасили залог и решили свои вопросы - спасибо займзалогу. Искренне рекомендуем!</p>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="wrap">
			<div id="contact" class="footer">
				<p class="headerFooterWhite">Свяжитесь с нами</p>
				<div class="itemsFooter">
					<div class="itemFoote">
						<p class="footerDesc">Напишите нам, и мы свяжемся с вами в ближайщее время</p>
						<form action="contact.php" method="post">
							<p class="footerDesc">Ваше имя:</p>
							<input type="text" name="mfbName" placeholder="Ваше имя" required>
							<p class="footerDesc">Электронная почта:</p>
							<input type="text" name="mfbMail" placeholder="Эл.почта" required>
							<p class="footerDesc">Телефон</p>
							<input type="number" name="mfbPhone" placeholder="Ваш телефон" required>
							<div class="footerBtnComtainer">
								<input class="btnFooterForm" type="submit" value="Отправить">
							</div>
						</form>
					</div>
					<div class="itemFoote">
						<p class="footerDescBold">Наш адрес:</p>
						<p class="footerDesc">ул. Тургенева 135/1, 3 этаж, офис 15, Краснодар, 350049, Россия​</p>
						<p class="footerDescBold">Email:</p>
						<p class="footerDesc">
							<a class="footerLink" href="mailto:zaem-pod-zalog-nedvizhimosti@mail.ru">zaem-pod-zalog-nedvizhimosti@mail.ru</a>
						</p>
						<p class="footerDescBold">Телефон:</p>
						<div class="social">
							<a href="#"><img src="img/akar-icons_vk-fill.png"></a>
							<a href="#"><img src="img/brandico_facebook.png"></a>
							<a href="#"><img src="img/akar-icons_instagram-fill.png"></a>
						</div>
						<p class="footerDesc">
							<a class="footerLink" href="tel: +79054613467">+7 905 461 34 67</a>
						</p>
						<div class="footerMap">
							<div style="position: relative; overflow: hidden;">
								<a style="color: #eee; font-size: 12px; position: absolute; top: 0px;" href="https://yandex.ru/maps/35/krasnodar/?utm_medium=mapframe&amp;utm_source=maps">Краснодар</a>
								<a style="color: #eee; font-size: 12px; position: absolute; top: 14px;" href="https://yandex.ru/maps/35/krasnodar/house/ulitsa_turgeneva_135_1/Z0EYfwFgSkEAQFpvfXx0d3xnYw==/?ll=38.960470%2C45.056304&amp;mode=search&amp;sll=38.975313%2C45.035470&amp;sspn=0.283070%2C0.112100&amp;text=atcnbdfkmysq%20%2Cbpytc%20wtynh&amp;utm_medium=mapframe&amp;utm_source=maps&amp;z=16.95">Улица Тургенева, 135/1 — Яндекс.Карты</a>
								<iframe style="position: relative;" src="https://yandex.ru/map-widget/v1/-/CCUQMYgKsA" width="100%" height="210" frameborder="1" allowfullscreen="true"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>© 2014-2021 «Выгодные займы» Все права защищены.</p>
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="acces/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="acces/custom.js"></script>
<script type="text/javascript" src="acces/mask.js"></script>
</html>





';
}
?>
