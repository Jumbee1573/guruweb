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
                    <a href="./departmentList.php" class="ui button students-groups-list__item_a">
                        Отделения
                    </a>
                </li>
                <li class="students-groups-list__item list__item">
                    <a href="./departmentAdd.php" class="ui primary button students-groups-list__item_a">
                        Добавить отделение
                    </a>
                </li>
            </ul>
        </nav>
        <?
            if(isset($_POST['departmentAdd'])) {
                $departmentInsert = $pdo->query("INSERT INTO DEPARTMENT (DEPARTMENT) 
                VALUES ('$_POST[department]');");
                echo '<span class="green-message">Отделение успешно добавлено!</span>';
            }
        ?>
        <form class="login__form" action="departmentAdd.php" method="post">
            <ul class="login__form_inner">
                <li class="login__form_item">
                    <input type="text" name="department" value="Компьютерных технологий" 
                    required>
                </li>
                <li class="white__button_wrapper">
                    <button class="white__button" type="submit" name="departmentAdd">
                        Добавить отделение
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