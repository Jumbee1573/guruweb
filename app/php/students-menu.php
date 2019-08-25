<?
    $path = $_SERVER['REQUEST_URI'];
?>

<ul class="logged__menu logged__menu_left">
    <li class="logged__menu_item">
        <?php 
        if (strripos($path, "/php/studentTestsResults.php") !== false) {
            echo '<a href="studentTestsResults.php" class="logged__menu_link logged__menu_link_active">';
        } else { 
            echo '<a href="studentTestsResults.php" class="logged__menu_link">';
        }
        ?>
            Результаты тестов
        </a>
    </li>
    <li class="logged__menu_item">
        <?php 
        if (strripos($path, "/php/studentTests.php") !== false) {
            echo '<a href="studentTests.php" class="logged__menu_link logged__menu_link_active">';
        } else { 
            echo '<a href="studentTests.php" class="logged__menu_link">';
        }
        ?>
            Прохождение тестов
        </a>
    </li>
</ul>		
<ul class="logged__menu logged__menu_right">
    <li class="logged__menu_item">
        <a href="authorization/logout.php" class="logged__menu_link">Выход</a>
    </li>
</ul>