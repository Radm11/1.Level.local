<?php
setlocale(LC_ALL, "russian");
echo "Это тест <br/>"; // Это однострочный комментарий в стиле c++
/* Это многострочный комментарий
еще одна строка комментария */
echo "Это еще один тест <br/>";
echo "Последний тест <br/>"; # Это комментарий в стиле оболочки Unix
echo iconv ('windows-1251', 'utf-8', strftime("%d-%B-%Y, %A\n"));
?>
<blockquote>
<? echo strftime("Сегодня %d-%m-%Y, \n");
$hour = (int) strftime('%H');
echo "$hour";
$x = mktime (12, 0, 0, 0, 0, 1901);
print_r( getdate($x));
function vardump($var) {
    global $x;
    echo '<pre>';
    print_r( getdate($x));
    echo '</pre>';
    }
vardump($var);
print 2 + strlen("Hello");
    ?>
</blockquote>

