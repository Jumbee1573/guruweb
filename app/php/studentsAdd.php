<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
	require_once dirname( __FILE__ ) . '/db/PDOConnection.php';
    require_once dirname( __FILE__ ) . "/header.php";

?>


<? if(isset($_SESSION['logged_teacher'])) : ?>

<main class="main__wrapper">
	<div class="main__inner container">
        <nav class="logged__menu_wrapper">

            <? require_once dirname( __FILE__ ) . "/teacher-menu.php"; ?>	

        </nav>
        <nav>
            <ul class="students-groups-list__wrapper list__wrapper">
                <li class="students-groups-list__item list__item">
                    <a href="./studentsList.php" class="ui button students-groups-list__item_a">
                        Список учащихся
                    </a>
                </li>
                <li class="students-groups-list__item list__item">
                    <a href="./studentsAdd.php" class="ui primary button students-groups-list__item_a">
                        Добавить учащегося
                    </a>
                </li>
            </ul>
        </nav>
        <?
            if(isset($_POST['studentAdd'])) {
                $grouppIsset = $pdo->query('SELECT ID_GROUPP FROM GROUPP WHERE GROUPP = '.$_POST['groupp'].'')->fetchAll();
                if($grouppIsset[0]['ID_GROUPP'] == '') {
                    echo '<span class="red-message">Создайте указанную группу!</span>';
                } else {
                    $idGroupp = $grouppIsset[0]['ID_GROUPP'];
                    $studentInsert = $pdo->query("INSERT INTO STUDENT (SURNAME, NAME, PATRONYMIC, PASSWORD, ID_GROUPP) 
                    VALUES ('$_POST[surname]', '$_POST[name]', '$_POST[patronymic]', 
                    '$_POST[password]', '$idGroupp');");
                    echo '<span class="green-message">Учащийся успешно добавлен!</span>';
                }
            }
        ?>
        <form class="login__form" action="studentsAdd.php" method="post">
            <ul class="login__form_inner">
                <li class="login__form_item">
                    <input type="text" name="surname" value="Поттер" 
                    maxlength="30" pattern="[А-Я][а-я]+" required>
                </li>
                <li class="login__form_item">
                    <input type="text" name="name" value="Северус" 
                    maxlength="30" pattern="[А-Я][а-я]+" required>
                </li>
                <li class="login__form_item">
                    <input type="text" name="patronymic" value="Альбус" 
                    maxlength="30" pattern="[А-Я][а-я]+" required>
                </li>
                <li class="login__form_item">
                    <input type="text" name="groupp" value="52492" 
                    maxlength="10" pattern="[0-9]{5}|[0-9]К[0-9]{4}|[0-9]K[0-9]{4}" 
                    required>
				</li>
                <li class="login__form_item">
                    <input type="password" name="password" value="1234" 
                    required>
                </li>
                <li class="white__button_wrapper">
                    <button class="white__button" type="submit" name="studentAdd">
                        Добавить учащегося
                    </button>
                </li>
            </ul>
        </form>
    </div>
</main>


<? else : ?>
	<main class="main__wrapper">
        <div class="main__inner container">
	        Вы не авторизованы!	
        </div>		
    </main>
<? endif; ?>

<? 
	require_once dirname( __FILE__ ) . "/footer.php";
?>