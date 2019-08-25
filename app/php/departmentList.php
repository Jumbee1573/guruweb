<? 
    
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . '/db/PDOConnection.php';
    if(isset($_GET['id'])) {
        $departmentDelete = $pdo->query('DELETE FROM DEPARTMENT
        WHERE ID_DEPARTMENT = '.$_GET['id'].';');
        header("Location: /php/departmentList.php"); 
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
                    <a href="./departmentList.php" class="ui primary button students-groups-list__item_a">
                        Отделения
                    </a>
                </li>
                <li class="students-groups-list__item list__item">
                    <a href="./departmentAdd.php" class="ui button students-groups-list__item_a">
                        Добавить отделение
                    </a>
                </li>
            </ul>
        </nav>
        <div class="wrapper">
            <?
                $departmentsList = R::getAll('SELECT ID_DEPARTMENT, DEPARTMENT FROM DEPARTMENT');

                if(count($departmentsList) == 0) {
                    echo '<span class="result__message">Отделений не найдено!</span>';
                } else {
                    echo 
                    '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Отделение</th>
                                <th>Удалить</th>
                            </tr>
                        </thead>';
                    foreach($departmentsList as $value) {
                        echo '<tr class="tr__hover">';
                        echo "<td>".$value['DEPARTMENT']."</td>";
                        echo '<td class="td__content_wrapper"><a href="./departmentList.php?id='.$value['ID_DEPARTMENT'].'" 
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