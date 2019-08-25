<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_student'])) : ?>
<?
    $loggedStudent = $_SESSION['logged_student'];
    $ID = R::getRow('SELECT ID_STUDENT FROM STUDENT WHERE
    SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ? AND ID_GROUPP IN
    (SELECT ID_GROUPP FROM GROUPP WHERE ID_GROUPP = ?)', array(
    $loggedStudent['SURNAME'], $loggedStudent['NAME'], 
    $loggedStudent['PATRONYMIC'], $loggedStudent['PASSWORD'], 
    $loggedStudent['ID_GROUPP']) );
?>

<main class="main__wrapper">
	<div class="main__inner container">
        <nav class="logged__menu_wrapper">

            <? require_once dirname( __FILE__ ) . "/students-menu.php"; ?>	

        </nav>
        <div class="wrapper">  
            <?
                $testResult = R::getAll('SELECT TEST.TEST_NAME, STUDENT_RESULT.RESULT
                FROM STUDENT_RESULT JOIN TEST ON TEST.ID_TEST = STUDENT_RESULT.ID_TEST WHERE
                STUDENT_RESULT.ID_STUDENT = ?', array($ID['ID_STUDENT']));

                if(count($testResult) == 0) {
                    echo '<span class="result__message">У Вас еще нет результатов тестов!</span>';
                } else {
                    echo 
                    '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Название теста</th>
                                <th>Результат</th>
                            </tr>
                        </thead>';
                    foreach($testResult as $value) {
                        echo "<tr>";
                        echo "<td>".$value['TEST_NAME']."</td>";
                        echo "<td>".$value['RESULT']."</td>";
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