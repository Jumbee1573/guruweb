<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . '/db/PDOConnection.php';
    if(isset($_GET['id'])) {
        $cyclicDelete = $pdo->query('DELETE FROM CYCLIC_COMMISSION
        WHERE ID_CYCLIC_COMMISSION = '.$_GET['id'].';');
        header("Location: /php/cyclicList.php"); 
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
                    <a href="./cyclicList.php" class="ui primary button students-groups-list__item_a">
                        Цикловые комиссии
                    </a>
                </li>
                <li class="students-groups-list__item list__item">
                    <a href="./cyclicAdd.php" class="ui button students-groups-list__item_a">
                        Добавить ЦК
                    </a>
                </li>
            </ul>
        </nav>
        <div class="wrapper">
            <?
                $cyclicsList = R::getAll('SELECT CYCLIC_COMMISSION.ID_CYCLIC_COMMISSION, 
                CYCLIC_COMMISSION.CYCLIC_COMMISSION, DEPARTMENT.DEPARTMENT FROM CYCLIC_COMMISSION 
                JOIN DEPARTMENT ON CYCLIC_COMMISSION.ID_DEPARTMENT = DEPARTMENT.ID_DEPARTMENT');

                if(count($cyclicsList) == 0) {
                    echo '<span class="result__message">ЦК не найдено!</span>';
                } else {
                    echo 
                    '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Цикловая комиссия</th>
                                <th>Отделение</th>
                                <th>Удалить </th>
                            </tr>
                        </thead>';
                    foreach($cyclicsList as $value) {
                        echo '<tr class="tr__hover">';
                        echo "<td>".$value['CYCLIC_COMMISSION']."</td>";
                        echo "<td>".$value['DEPARTMENT']."</td>";
                        echo '<td class="td__content_wrapper"><a href="./cyclicList.php?id='.$value['ID_CYCLIC_COMMISSION'].'" 
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