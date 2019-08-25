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
    <script type="text/javascript" language="JavaScript">
var res="123"; 
function check_me()
{
    var count=0;
    with(document.test) {
if (!Q1[0].checked&&!Q1[1].checked&&!Q1[2].checked)  
{count+=1};  
if (!Q2[0].checked&&!Q2[1].checked&&!Q2[2].checked)  
{count+=1};  
if (!Q3[0].checked&&!Q3[1].checked&&!Q3[2].checked)  
{count+=1};  
if (count>0) alert("Вы выполнили не все задания. Проверьте себя!")    
        else answer();
    }
} 
 
function control(k, f1,f2,f3) {
if (k==1&&f1.checked) return true;
if (k==2&&f2.checked) return true;
if (k==3&&f3.checked) return true;
return false;
}

function answer() {
answ="";
     with(document)    {
    answ+=control(res.charAt(0) ,test.Q1[0],test.Q1[1],test.Q1[2])?"1":"0";
answ+=control(res.charAt(1) ,test.Q2[0],test.Q2[1],test.Q2[2])?"1":"0";
answ+=control(res.charAt(2) ,test.Q3[0],test.Q3[1],test.Q3[2])?"1":"0";

showResult();
    }
}
 
function showResult()   {
    var nok=0;
    var i,s;
 
for (i=0; i<answ.length;i++) {nok+=answ.charAt(i)=="1"?1:0;}
if(nok==3) s="ОТЛИЧНО";
if(nok<3) s="ХОРОШО";
if(nok<2.25) s="УДОВЛЕТВОРИТЕЛЬНО";
if (nok<1.5) s="НЕУДОВЛЕТВОРИТЕЛЬНО";
    document.test.s1.
    value="Количество правильных ответов "+nok+". Ваша оценка "+s+". Посмотрите на окно рядом с номером вопроса. Если ответ правильный, там (+). Если ответ ошибочен, там (-).";
 
with(document.test)
    {
    if (answ.charAt(0)=="1") {T1.value=" + "} else {T1.value=" - "};
   if (answ.charAt(1)=="1") {T2.value=" + "} else {T2.value=" - "};
   if (answ.charAt(2)=="1") {T3.value=" + "} else {T3.value=" - "};
     }
}
function showhide(obj){
    if(obj == 'none') return 'inline';
    else return 'none';
}
</script>

<center><b>Тест по javaScript</b></center><br/><br/>
&nbsp;&nbsp;&nbsp;<span style="color:#006699;text-decoration:underline;cursor:pointer;" onclick="document.getElementById('instruction').style.display = showhide(document.getElementById('instruction').style.display)">
Инструкция</span>
 <br/>
<div id="instruction" style="display: none; width: 100%;">
<ul>
<li>Выберите один из вариантов в каждом из 3 вопросов;</li>
<li>Нажмите на кнопку "Показать результат";</li>
<li>Скрипт не покажет результат, пока Вы не ответите на все вопросы;</li>
<li>Загляните в окно рядом с номером задания. Если ответ правильный, то там (+). Если Вы ошиблись, там (-).</li>
<li>За каждый правильный ответ начисляется 1 балл;</li>
<li>Оценки: менее 1.5 баллов - НЕУДОВЛЕТВОРИТЕЛЬНО, от 1.5 но менее 2.25 - УДОВЛЕТВОРИТЕЛЬНО, 2.25 и менее 3 - ХОРОШО, 3 - ОТЛИЧНО;</li>
<li>Чтобы сбросить результат тестирования, нажать кнопку "Сбросить ответы";</li>
</ul>
</div>
<form name="test"><ol>
<li><INPUT type="text" size="1" value="" name="T1"/><b> JavaScript - это...?</b><br/>
<input type="radio" value="0" name="Q1"/> Язык программирования<br />
<input type="radio" value="1" name="Q1"/> Язык разметки<br />
<input type="radio" value="2" name="Q1"/> Язык стилей<br />
<br/></li><li><INPUT type="text" size="1" value="" name="T2"/><b> Как создаются локальные переменные в новом стандарте?</b><br/>
<input type="radio" value="0" name="Q2"/> var<br />
<input type="radio" value="1" name="Q2"/> let<br />
<input type="radio" value="2" name="Q2"/> const<br />
<br/></li><li><INPUT type="text" size="1" value="" name="T3"/><b> Можно ли изменять значение const?</b><br/>
<input type="radio" value="0" name="Q3"/> Да<br />
<input type="radio" value="1" name="Q3"/> Нет<br />
<input type="radio" value="2" name="Q3"/> Можно изменять значения внутри массивов и объектов<br />
<br/></li></ol>      
<CENTER>
<P><TEXTAREA name="s1" rows="4" cols="70" readonly> </TEXTAREA> </P>
<INPUT onclick="check_me()" type="button" value="Показать результат"/>&nbsp;&nbsp;&nbsp;&nbsp; 
<INPUT type="reset" value="Сбросить ответы"/> 
</CENTER>        
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