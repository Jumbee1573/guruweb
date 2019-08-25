<? 
    require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_teacher'])) : ?>
<? 
?>

<main class="main__wrapper">
	<div class="main__inner container">
        <nav class="logged__menu_wrapper">

            <? require_once dirname( __FILE__ ) . "/teacher-menu.php"; ?>	

        </nav>
        <div class="wrapper">
            <?
                if(isset($_GET['id'])) {
                    $testName = R::getRow('SELECT TEST_NAME FROM TEST WHERE ID_TEST = ?', array($_GET['id']));
                    print_r($testName['TEST_NAME']);
                    echo "<br />";
                    $testQuestion = R::getRow('SELECT QUESTIONS.QUESTION_NAME FROM TEST_MERGE JOIN QUESTIONS 
                    ON TEST_MERGE.ID_QUESTIONS = QUESTIONS.ID_QUESTIONS');
                    print_r($testQuestion);
                    echo "<br />";
                    $testAnswers = R::getRow('SELECT ANSWERS.ANSWER FROM RESPONSE_TO_QUESTIONS JOIN ANSWERS 
                    ON RESPONCE_TO_QUESTIONS.ID_ANSWERS = ANSWERS.ID_ANSWERS');
                    print_r($testAnswers);
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