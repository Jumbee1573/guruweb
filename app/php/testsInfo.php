<? 
    require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_teacher'])) : ?>
<?
    $_SESSION['testTrigger'] = R::getRow('SELECT TEST_TRIGGER FROM TEST_TRIGGER WHERE ID_TEST_TRIGGER = 1');
    $loggedTeacher = $_SESSION['logged_teacher'];
    $ID = R::getRow('SELECT ID_TEACHER FROM TEACHER WHERE
    SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ?', array(
    $loggedTeacher['SURNAME'], $loggedTeacher['NAME'], 
    $loggedTeacher['PATRONYMIC'], $loggedTeacher['PASSWORD']));
    
?>

<main class="main__wrapper">
	<div class="main__inner container">
		<nav class="logged__menu_wrapper">

            <? require_once dirname( __FILE__ ) . "/teacher-menu.php"; ?>	

        </nav>
            <? if($_SESSION['testTrigger']['TEST_TRIGGER'] == 1) : ?>
                <button class="ui primary button" id="testActive">
                    Тесты активированы!
                </button>
            <? else : ?>
                <button class="ui button" id="testDiactive">
                    Тесты диактивированы!
                </button>
            <? endif; ?>
        <div class="wrapper">
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>Название теста</th>
                    </tr>
                </thead>
                <tr class="tr__hover">
                    <td class="td__content_wrapper">
                        <a href="./test-js.php"class="anchor__clicked">
                            Тест по JavaScript
                        </a>
                    </td>
                </tr>
            </table>
            <!-- <?
                $test = R::getAll('SELECT ID_TEST, TEST_NAME FROM TEST');

                if(count($test) == 0) {
                    echo '<span class="result__message">Тестов нет!</span>';
                } else {
                    echo 
                        '<table class="ui celled table">
                            <thead>
                                <tr>
                                    <th>Название теста</th>
                                </tr>
                            </thead>';
                        foreach($test as $key => $value) {
                            echo '<tr class="tr__hover">';
                            echo '<td class="td__content_wrapper"><a href="./testForEdit.php?id='.$value['ID_TEST'].'" class="anchor__clicked">
                            '.$value['TEST_NAME'].'</a></td>';
                            echo '</tr>';
                        }
                    echo
                        "</table>";
                }
                if(isset($_GET['id'])) {
                    print_r($_GET);
                }
            ?> -->
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