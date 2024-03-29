<? 
	require_once dirname( __FILE__ ) . "/php/db/db.php";
	$studentName = $_SESSION['logged_student']['NAME'];
	$teacherName = $_SESSION['logged_teacher']['NAME'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="img/favicon.png">	
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="semantic/semantic.min.js"></script>
	<title>GuruWeb</title>
</head>
<body>

	<a class="top__button"><i class="fas fa-chevron-up"></i></a>
		
	<header id="main">
		<div class="header__wrapper container">

		<!-- Mobile menu -->
			<nav class="header__menu-mobile">
				<button class="header__menu_button-mobile" onclick="menuu()">
					<i class="fas fa-bars"></i>
				</button>
				<ul class="header__menu_wrapper-mobile menuDown" id="menu">
					<li class="header__menu_close-mobile">
						<button class="header__menu_button-mobile" onclick="menuu()">
							<i class="fas fa-times"></i>
						</button>
					</li>
					<li>
						<ul class="header__menu_main-mobile">
							<li onclick="menuClose()">
								<a class="header__menu_item-mobile"
								href="#main">Главная</a>
							</li>
							<li onclick="menuClose()">
								<a class="header__menu_item-mobile" 
								href="#course">Курсы</a>
							</li>
							<li onclick="menuClose()">
								<a class="header__menu_item-mobile" 
								href="#author">Об авторе</a>
							</li>
						</ul>
					</li>
					<li>
						<ul class="header__menu_authorization-mobile">
						<li onclick="menuClose()">
								<? if(isset($_SESSION['logged_student'])) :
									echo '<a href="./php/studentTestsResults.php" 
									class="header__menu_item-mobile">'.$studentName.'</a>';
								?>
								<? else : 
									echo '<a href="./php/students.php" 
									class="header__menu_item-mobile">Учащийся</a>'; 
								?>
								<? endif; ?>
							</li>
							<li onclick="menuClose()">
								<? if(isset($_SESSION['logged_teacher'])) : 
									echo '<a href="./php/testsResults.php" 
									class="header__menu_item-mobile">'.$teacherName.'</a>';
								?>
								<? else : 
									echo '<a href="./php/teachers.php" 
									class="header__menu_item-mobile 
									header__menu_authorization_key-mobile">
									<i class="fab fa-keycdn"></i></a>'; 
								?>
								<? endif; ?>
							</li>
						</ul>
					</li>
				</ul>
				<a href="#main" class="header__menu_link">
					<div class="header__menu-wrapper">
						<img class="header__menu_atom" src="img/logo.svg" alt="GuruWeb">
					</div>
				</a>
			</nav>
			<!-- End mobile menu -->

			<!-- Desktop menu -->
			<nav class="header__menu" id="header__menu">
				<div class="header__menu_main">
					<ul>
						<li class="header__menu_item">
							<a href="#main">Главная</a>
						</li>
						<li class="header__menu_item">
							<a href="#course">Курсы</a>
						</li>
						<li class="header__menu_item">
							<a href="#author">Об авторе</a>
						</li>
					</ul>
				</div>
				<div class="header__menu_authorization">
					<ul>
						<li class="header__menu_item">
							<? if(isset($_SESSION['logged_student'])) : 
								echo '<a href="./php/studentTestsResults.php">'.$studentName.'</a>'; 
							?>
							<? else : 
								echo '<a href="./php/students.php">Учащийся</a>'; 
							?>
							<? endif; ?>
						</li>
						<li class="header__menu_item">
							<? if(isset($_SESSION['logged_teacher'])) : 
								echo '<a href="./php/testsResults.php">'.$teacherName.'</a>'; 
							?>
							<? else : 
								echo '<a href="./php/teachers.php" 
								class="header__menu_authorization_key">
								<i class="fab fa-keycdn"></i></a>'; 
							?>
							<? endif; ?>
						</li>
					</ul>		
				</div>
			</nav>
			<!-- End desktop menu -->

			<a href="#main" class="header__logo_link">
				<div class="header__logo-wrapper">
					<img class="header__logo_atom" src="img/logo.svg" alt="GuruWeb">
					<span class="header__logo_title">GuruWeb</span>
				</div>
			</a>
		</div>
	</header>
	<main>
		<div class="courses__wrapper container">
			<span class="courses__main_mrc">
				<div class="courses__main_mrc_logo-wrapper">
					<img  class="courses__main_mrc_logo" src="img/mrс.svg" alt="mrc">
				</div>
				<span class="courses__main_mrc_description">
					БГУИР Филиал "Минский радиотехнический колледж"
				</span>
			</span>
			<div class="courses__main_description">
				<p class="courses__main_description-inner">
					Компьютерное средство обучения 
					"Язык программирования JavaScript. Библиотека jQuery"
				</p>
			</div>
			<section id="course" class="course">
				<span class="course__title">
					jQuery
				</span>	
				<div class="course__wrapper">
					<div class="course__segment">
						<a href="./php/jquery0.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">0%</span>
								<span class="course__segment_title">
									Знакомство с HTML, CSS, JavaScript
								</span>
								<p class="course__segment_description">
									В данной главе курса вы познакомитесь с базовыми понятиями HTML, CSS, JavaScript.
								</p>
							</div>
						</a>
					</div>

					<div class="course__segment">
						<a href="./php/jquery1.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">10%</span>
								<span class="course__segment_title">
									Подключение
								</span>
								<p class="course__segment_description">
									В данной главе курса вы подключите библиотеку jQuery к своему проекту.
								</p>
							</div>
						</a>
					</div>

					<div class="course__segment">
						<a href="./php/jquery2.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">20%</span>
								<span class="course__segment_title">
									Атрибуты и свойства элементов
								</span>
								<p class="course__segment_description">
                                    В данной главе курса вы начнете работу с библиотекой jQuery, научитесь
                                    работать с классами и селекторами CSS.
								</p>
							</div>
						</a>
					</div>
				</div>
				
				<div class="course__wrapper fade">
					<div class="course__segment">
						<a href="./php/jquery3.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">30%</span>
								<span class="course__segment_title">
									События
								</span>
								<p class="course__segment_description">
                                    В данной главе курса вы ознакомитесь с таким понятем, как "события"
                                    и научитесь ими управлять и отлавливать.
								</p>
							</div>
						</a>
					</div>
   
					<div class="course__segment">
						<a href="./php/jquery4.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">40%</span>
								<span class="course__segment_title">
								 	Анимация
								</span>
								<p class="course__segment_description">
                                    В данной главе курса вы познакомитесь с анимациями и увидите, как с ними
                                    работать.
								</p>
							</div>
						</a>
					</div>
   
					<div class="course__segment">
						<a href="./php/jquery5.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
							    <span class="course__segment_scale">50%</span>
								<span class="course__segment_title">
									Манипуляции с DOM
								</span>
								<p class="course__segment_description">
									Эта глава будет немного нудной, но она очень полезна в освоении работы с DOM.
								</p>
							</div>
						</a>
					</div>
				</div>
				   
				<div class="course__wrapper fade">
					<div class="course__segment">
						<a href="./php/jquery6.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">60%</span>
								<span class="course__segment_title">
									AJAX
								</span>
								<p class="course__segment_description">
									Боюсь, в современном веб-программировании слово AJAX знают все.
								</p>
							</div>
						</a>
					</div>
   
					<div class="course__segment">
						<a href="./php/jquery7.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">70%</span>
								<span class="course__segment_title">
									Объект Deferred и побратимы
								</span>
								<p class="course__segment_description">
                                    В данной главе курса вы узнаете про объект Deferred и Callback-функции.
								</p>
							</div>
						</a>
					</div>
   
					<div class="course__segment">
						<a href="./php/jquery8.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">80%</span>
								<span class="course__segment_title">
									Работа с формами
								</span>
								<p class="course__segment_description">
									Работа с формами - это очень важно, и в этой главе вы узнаете все особенности.
								</p>
							</div>
						</a>
					</div>
				</div>

				<div class="course__wrapper fade">
					<div class="course__segment">
						<a href="./php/jquery9.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">90%</span>
								<span class="course__segment_title">
									Плагин jQuery
								</span>
								<p class="course__segment_description">
									Написание плагина на нативном JavaScript и с библиотекой jQuery.
								</p>
							</div>
						</a>
					</div>
   
					<div class="course__segment">
						<a href="./php/jquery10.php" class="flex">
							<div class="top-line"></div>
							<div class="course__segment_main_wrapper">
								<span class="course__segment_scale">100%</span>
								<span class="course__segment_title">
									jQuery UI
								</span>
								<p class="course__segment_description">
									Что-то про jQuery UI... Особенности правильного UI.
								</p>
							</div>
						</a>
					</div>
				</div>

				<div class="course__button_wrapper white__button_wrapper">
					<button class="course__button white__button">
						Показать еще...
					</button>
				</div>
			</section>
		</div>

		<div class="author__background">
			<div class="author__wrapper container" id="author">
				<span class="author__title">
					Об авторе
				</span>
				<div class="author__info">
					<img class="author__info_photo" src="img/panda.svg" alt="Панда">
					<div class="author__info_inner">
						<div class="author__info_inner-text">
							Привет! Меня зовут Станислав и я автор этого сайта.
							Этот проект написан, чтобы помочь преподавателям Минского Радиотехнического
							Колледжа проводить занятия по дисциплине "Программные средства создания 
							интернет-приложений", где учащиеся постигают разработку
							сайтов. На данный момент проект посвящен библиотеке jQuery и всему что с
							ней связано, чтобы учащийся мог с легкостью в ней разобраться.
						</div>
						<div class="author__info_inner_socials">
							<span class="author__info_inner_socials_instagram">
								<a href="https://www.instagram.com/inadequate1573" target="blank">
								<b><i class="fab fa-instagram"></i></b></a>
							</span>
							<span class="author__info_inner_socials_telegram">
								<a href="https://t.me/jumbee1573" target="blank">
								<i class="fab fa-telegram"></i></a>
							</span>
							<span class="author__info_inner_socials_mail">
								<a href="mailto:jumbee1573@icloud.com" target="blank">
								<i class="fas fa-at"></i></i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
<? 
	require_once dirname( __FILE__ ) . "/php/footer.php";
?>