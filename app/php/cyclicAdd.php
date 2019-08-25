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
                    <a href="./cyclicList.php" class="ui button students-groups-list__item_a">
                        Цикловые комиссии
                    </a>
                </li>
                <li class="students-groups-list__item list__item">
                    <a href="./cyclicAdd.php" class="ui primary button students-groups-list__item_a">
                        Добавить ЦК
                    </a>
                </li>
            </ul>
        </nav>
        <?
            if(isset($_POST['cyclicAdd'])) {
                $departmentIsset = R::getRow('SELECT ID_DEPARTMENT FROM DEPARTMENT WHERE DEPARTMENT = ?', array($_POST['department']));
                if($departmentIsset['ID_DEPARTMENT'] == '') {
                    echo '<span class="red-message">Создайте указанное отделение!</span>';
                } else {
                    $idDepartment = $departmentIsset['ID_DEPARTMENT'];
                    $cyclicInsert = $pdo->query("INSERT INTO CYCLIC_COMMISSION (CYCLIC_COMMISSION, ID_DEPARTMENT) 
                    VALUES ('$_POST[cyclic_comission]', '$idDepartment');");
                    echo '<span class="green-message">ЦК успешно добавлена!</span>';
                }
            }
        ?>
        <form class="login__form" action="cyclicAdd.php" method="post">
            <ul class="login__form_inner">
                <li class="login__form_item">
                    <input type="text" name="cyclic_comission" value="ПОИТ" required>
				</li>
                <li class="login__form_item">
                    <input type="text" name="department" value="Компьютерных технологий" 
                    required>
                </li>
                <li class="white__button_wrapper">
                    <button class="white__button" type="submit" name="cyclicAdd">
                        Добавить ЦК
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