<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . '/db/PDOConnection.php';
    if(isset($_GET['id'])) {
        $groupDelete = $pdo->query('DELETE FROM GROUPP
        WHERE ID_GROUPP = '.$_GET['id'].';');
        header("Location: /php/groupsList.php"); 
    } 
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
                    <a href="./groupsList.php" class="ui primary button students-groups-list__item_a">
                        Список групп
                    </a>
                </li>
                <li class="students-groups-list__item list__item">
                    <a href="./groupsAdd.php" class="ui button students-groups-list__item_a">
                        Добавить группу
                    </a>
                </li>
            </ul>
        </nav>
        <div class="wrapper">
            <?
                $groupsList = R::getAll('SELECT GROUPP.ID_GROUPP, GROUPP.GROUPP, DEPARTMENT.DEPARTMENT 
                FROM GROUPP JOIN DEPARTMENT ON GROUPP.ID_DEPARTMENT = DEPARTMENT.ID_DEPARTMENT');

                if(count($groupsList) == 0) {
                    echo '<span class="result__message">Групп не найдено!</span>';
                } else {
                    echo 
                    '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th>№ Группы</th>
                                <th>Отделение</th>
                                <th>Удалить</th>
                            </tr>
                        </thead>';
                    foreach($groupsList as $value) {
                        echo '<tr class="tr__hover">';
                        echo "<td>".$value['GROUPP']."</td>";
                        echo "<td>".$value['DEPARTMENT']."</td>";
                        echo '<td class="td__content_wrapper"><a href="./groupsList.php?id='.$value['ID_GROUPP'].'" 
                        class="content__delete_btn">X</a></td>';
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            ?>
        </div>
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