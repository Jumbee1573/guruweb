<? 
    require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . '/db/PDOConnection.php';

    $loggedStudent = $_SESSION['logged_student'];
    $ID = R::getRow('SELECT ID_STUDENT FROM STUDENT WHERE
    SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ? AND ID_GROUPP IN
    (SELECT ID_GROUPP FROM GROUPP WHERE ID_GROUPP = ?)', array(
    $loggedStudent['SURNAME'], $loggedStudent['NAME'], 
    $loggedStudent['PATRONYMIC'], $loggedStudent['PASSWORD'], 
    $loggedStudent['ID_GROUPP']) );

    if(isset($_POST['name']) && $_POST['result']) {
        $testName = R::getRow('SELECT ID_TEST FROM TEST WHERE TEST_NAME = ?', array($_POST['name']));
        if(testName['ID_TEST'] == '') {
            $pdo->query("INSERT INTO TEST (TEST_NAME) VALUES ('$_POST[name]');");
        }
        $testID = R::getRow('SELECT ID_TEST FROM TEST WHERE TEST_NAME = ?', array($_POST['name']));
        $pdo->query("INSERT INTO STUDENT_RESULT (RESULT, ID_STUDENT, ID_TEST) VALUES 
        ('$_POST[result]', '$ID[ID_STUDENT]', '$testID[ID_TEST]');");
    }
?>