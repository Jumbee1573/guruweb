<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_student'])) : ?>
<?
    $testTrigger = R::getRow('SELECT TEST_TRIGGER FROM TEST_TRIGGER WHERE ID_TEST_TRIGGER = 1');
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
            <? if($testTrigger['TEST_TRIGGER'] == 1) : ?>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Название теста</th>
                        </tr>
                    </thead>
                    <tr class="tr__hover">
                        <td class="td__content_wrapper">
                            <a href="./test-js-st.php"class="anchor__clicked">
                                Тест по JavaScript
                            </a>
                        </td>
                    </tr>
                </table>
            <? else : ?>
                В данное время тесты недоступны для прохождения!
            <? endif; ?>
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