<?
    $path = $_SERVER['REQUEST_URI'];
?>

<ul class="logged__menu logged__menu_left">
    <li class="logged__menu_item">
        <?php 
        if (strripos($path, "/php/testsResults.php") !== false) {
            echo '<a href="testsResults.php" class="logged__menu_link logged__menu_link_active">';
        } else { 
            echo '<a href="testsResults.php" class="logged__menu_link">';
        }
        ?>
            Результаты тестов
        </a>
    </li>
    <li class="logged__menu_item">
        <?php
        if (strripos($path, "/php/testsInfo.php") !== false ||
            strripos($path, "/php/testForEdit.php") !== false) {
            echo '<a href="testsInfo.php" class="logged__menu_link logged__menu_link_active">';
        } else { 
            echo '<a href="testsInfo.php" class="logged__menu_link">';
        }
        ?>
            Тесты
        </a>
    </li>
    <li class="logged__menu_item">
        <?php 
        if (strripos($path, "/php/studentsList.php") !== false ||
            strripos($path, "/php/studentsAdd.php") !== false ||
            strripos($path, "/php/studentsDelete.php") !== false ||
            strripos($path, "/php/groupsList.php") !== false ||
            strripos($path, "/php/groupsAdd.php") !== false ||
            strripos($path, "/php/departmentList.php") !== false ||
            strripos($path, "/php/departmentAdd.php") !== false ||
            strripos($path, "/php/cyclicList.php") !== false ||
            strripos($path, "/php/cyclicAdd.php") !== false) {
            echo '<span href="testsInfo.php" class="logged__menu_link logged__menu_link_blue logged__menu_link_blue_active">';
        } else { 
            echo '<span href="testsInfo.php" class="logged__menu_link logged__menu_link_blue">';
        }
        ?>
            Редактирование данных
        </span>
        <ul class="logged__menu_submenu submenu">
            <li class="logged__menu_submenu_item submenu__item list__item">
                <a href="./studentsList.php" class="logged__menu_submenu_anchor submenu__anchor">
                    Учащиеся
                </a>
            </li>
            <li class="logged__menu_submenu_item submenu__item list__item">
                <a href="./groupsList.php" class="logged__menu_submenu_anchor submenu__anchor">
                    Группы
                </a>
            </li>
            <li class="logged__menu_submenu_item submenu__item list__item">
                <a href="./departmentList.php" class="logged__menu_submenu_anchor submenu__anchor">
                    Отделения
                </a>
            </li>
            <li class="logged__menu_submenu_item submenu__item list__item">
                <a href="./cyclicList.php" class="logged__menu_submenu_anchor submenu__anchor">
                    Цикловые комиссии
                </a>
            </li>
        </ul>
    </li>
</ul>		
<ul class="logged__menu logged__menu_right">
    <li class="logged__menu_item">
        <a href="authorization/logout.php" class="logged__menu_link">Выход</a>
    </li>
</ul>