<?php 

// 1 Створіть файл 'test.txt' , запишіть у нього рядок 'Hello Palmo''.
$file1 = fopen('./storage/text.txt', 'w');
fwrite($file1, 'Hello Palmo');
fclose($file1);

// 2 Відобразіть вміст файлу на сторінці
echo '<h4>Task 2</h4>';
$file1 = fopen('./storage/text.txt', 'r');
$text = fread($file1, filesize('./storage/text.txt'));
echo $text;

// 3 Відобразіть розмір файлу на сторінці (У байтах, мегабайтах, гігабайтах)

echo '<h4>Task 2</h4>';
$filesize = filesize('./storage/text.txt');
$filesize_mb = $filesize / (1024 * 1024);
$filesize_gb = $filesize / (1024 * 1024 * 1024);
echo 'Розмір файлу у байтах: ' . $filesize;
echo '<br>Розмір файлу у мегабайтах: ' . $filesize_mb;
echo '<br>Розмір файлу у гігабайтах: ' . $filesize_gb;
fclose($file1);

// 4 Створіть файл 'test2.txt'

$file2 = fopen('./storage/text2.txt', 'w');
fclose($file2);

// 5 Видаліть 'test.2.txt'

unlink('./storage/text2.txt');

// 6 Дано масив ['test1','test2','test3'], створіть у папці Test папки, назвами яких слугують рядки масиву 
// Створіть у кожній вкладеній у TestDir папці, файл Hello.txt, у кожен із них запишіть рядок "Hello world", виведіть на екран вміст усіх файлів.

echo '<h4>Task 6</h4>';

$names = ['test1', 'test2', 'test3'];

for ($i=0; $i < count($names); $i++) { 
    $path = './TestDir/' . $names[$i];
    if(!file_exists($path)) {
        mkdir($path, 0777, true); 
    } 
    $file_path = $path . '/Hello.txt';
    $file = fopen($file_path, 'w'); 
    fwrite($file, 'Hello world ' . $i); 
    fclose($file);


    $file = fopen($file_path, 'r');
    $text = fread($file, filesize($file_path));
    echo $text . "<br>"; 
    fclose($file); 
}

// 7 Напишіть функцію, яка приймає назву файлу або папки і перевіряє, чи є передане значення файлом або папкою (повернути рядок)

echo '<h4>Task 7</h4>';

function check_file_or_dir($path) {
    if (is_file($path)) {
        return "$path - це файл.";
    } elseif (is_dir($path)) {
        return "$path - це папка.";
    } else {
        return "$path не існує.";
    }
}

echo check_file_or_dir('./TestDir/test1'); // Перевірка папки
echo "<br>";
echo check_file_or_dir('./TestDir/test1/Hello.txt'); // Перевірка файлу
echo "<br>";
echo check_file_or_dir('./TestDir/nonexistent'); // Перевірка неіснуючого шляху

// 8 Виведіть поточний час у форматі timestamp.

echo '<h4>Task 8</h4>';

echo 'Поточний час <br>';
echo time();

// 9 Виведіть 1 березня 2025 року у форматі timestamp.

echo '<h4>Task 9</h4>';

echo '1 березня 2025 року <br>';
echo mktime(0, 0, 0, 3, 1, 2025);

// 10  Виведіть 31 грудня поточного року у форматі timestamp. Скрипт повинен працювати незалежно від року, коли він запущений.

echo '<h4>Task 10</h4>';

echo ' 31 грудня поточного року <br>';
echo mktime(0, 0, 0, 12, 31);

// 11 Знайдіть кількість секунд, що пройшли з 13:12:59 15 березня 2000 року до теперішнього часу.

echo '<h4>Task 11</h4>';

$time_now = time();
$time_task = mktime(13, 12, 59, 3, 15, 2000);
$result = $time_now - $time_task;

echo 'Кількість секунд, що пройшли з 13:12:59 15 березня 2000 року до теперішнього часу: ' . $result;

// 12 Знайдіть кількість годин, що пройшли з 7:23:48 поточного дня до цього часу.

echo '<h4>Task 12</h4>';

$time_now = time();
$time_task = mktime(7, 23, 48);

$result = ($time_now - $time_task) / 3600;

echo 'Кількість годин, що пройшли з 7:23:48 поточного дня до цього часу: ' .  $result;

// 13 Виведіть на екран поточний рік, місяць, день, годину, хвилину, секунду.

echo '<h4>Task 13</h4>';


echo date("Y-m-d H:i:s");

// 14 Виведіть поточну дату-час у форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.

echo '<h4>Task 14</h4>';

echo date("Y-m-d");
echo '<br>';
echo date("d.m.Y");
echo '<br>';
echo date("d.m.y");
echo '<br>';
echo date("h:m:s");

// 15 За допомогою функцій mktime та date виведіть 12 лютого 2025 року у форматі '12.02.2025'.


echo '<h4>Task 15</h4>';

$future = date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));

echo $future;

// 16 Створіть масив днів тижня $week. Виведіть на екран назву поточного дня тижня за допомогою масиву $week та функції date. Дізнайтеся, який день тижня був 06.06.2006, у ваш день народження.

echo '<h4>Task 16</h4>';

$week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

echo 'День тижня був 06.06.2006: ' . $week[date('w', mktime(0, 0, 0, 6, 6, 2006)) - 1];
echo '<br> День тижня у день народження: ' . $week[date('w', mktime(0, 0, 0, 10, 10, 2024)) - 1];

// 17 Створіть масив місяців $month. Виведіть на екран назву поточного місяця за допомогою масиву $month та функції date.

echo '<h4>Task 17</h4>';

$month = date('F');

echo 'Поточний місяць: ' . $month;

// 18 Знайдіть кількість днів у поточному місяці. Скрипт повинен працювати незалежно від місяця, коли він запущений.

echo '<h4>Task 18</h4>';

$year = date('Y');
$month = date('m');

$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

echo  "Кількість днів у поточному місяці: " . $days;

// 19 Зробіть поле введення, в яке користувач вводить рік (4 цифри), а скрипт визначає чи високосний рік.

$year = $_POST['year'];

if (!empty($year)) {
    echo '<h4>Task 19</h4>';
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "Рік $year є високосним.";
    } else {
        echo "Рік $year не є високосним.";
    }
} 

// 20 Зробіть форму, яка запитує дату у форматі '31.12.2025'. За допомогою mktime та explode переведіть цю дату у формат timestamp. Дізнайтесь день тижня (словом) за введену дату.

$date_post = $_POST['date'];

if(!empty($date_post)) {
    echo '<h4>Task 20</h4>';
    if (preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $date_post))  {
        $date = explode('.', $date_post);
        $day_week = date('l', mktime(0, 0, 0, $date[1],  $date[0],  $date[2]));
        echo 'День тижня дати яку ви ввели: ' . $day_week;
    }
    else {
        echo "Дата повинна бути у форматі 'дд.мм.рррр'.";
    }
}

// 21 Зробіть форму, яка запитує дату у форматі '2025-12-31'. За допомогою mktime та explode переведіть цю дату у формат timestamp. Дізнайтесь місяць (словом) за введену дату.

$date_post = $_POST['date_task21'];

if(!empty($date_post)) {
    echo '<h4>Task 21</h4>';
    if (preg_match('/^\d{4}\-\d{2}\-\d{2}$/', $date_post))  {
        $date = explode('-', $date_post);
        $day_week = date('F', mktime(0, 0, 0, $date[1],  $date[2],  $date[0]));
        echo 'Місяць дати яку ви ввели: ' . $day_week;
    }
    else {
        echo "Дата повинна бути у форматі 'рррр-мм-дд'.";
    }
}

// 22 Зробіть форму, яка запитує дві дати у форматі '2025-12-31'. Першу дату запишіть у змінну $date1, а другу в $date2. Порівняйте, яка із введених дат більше. Виведіть її на екран.


$date1 = $_POST['date_task22_first'];
$date2 = $_POST['date_task22_second'];

if(!empty($date1)) {
    echo '<h4>Task 22</h4>';
    if(!empty($date2)) {
        if (preg_match('/^\d{4}\-\d{2}\-\d{2}$/', $date1))  {
            if (preg_match('/^\d{4}\-\d{2}\-\d{2}$/', $date2)) {
                if(strtotime($date1) > strtotime($date2)) {
                    echo "Перша дата, яку ви ввели, більша за другу: $date1";
                } elseif (strtotime($date1) < strtotime($date2)) {
                    echo "Друга дата, яку ви ввели, більша за першу: $date2";
                } else {
                    echo 'Дати, які ви ввели, однакові.';
                }
            } 
            else {
                echo "Дата повинна бути у форматі 'рррр-мм-дд'.";
            }
        }
        else {
            echo "Дата повинна бути у форматі 'рррр-мм-дд'.";
        }
    }
}


// 23 Дана дата у форматі '2025-12-31'. За допомогою функції strtotime та date перетворіть її на формат '31-12-2025'.

echo '<h4>Task 23</h4>';

$date = '2025-12-31';
echo date('d-m-Y', strtotime($date));

// 24  Зробіть форму, яка запитує дату-час у форматі '2025-12-31T12:13:59'. За допомогою функції strtotime та функції date перетворіть її на формат '12:13:59 31.12.2025'.

$date_time = $_POST['date_time_task24'];

if (!empty($date_time)) {
    echo '<h4>Task 24</h4>';
    if (preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/', $date_time)) {
        $formatted_date_time = date('H:i:s d.m.Y', strtotime($date_time));
        echo 'Відформатована дата-час: ' . $formatted_date_time;
    } else {
        echo "Дата-час повинна бути у форматі 'рррр-мм-ддTгг:хх:сс'.";
    }
} 

// 25  У змінній $date лежить дата у форматі '2025-12-31'. Додайте до цієї дати 2 дні, 1 місяць та 3 дні, 1 рік. Заберіть від цієї дати 3 дні.

echo '<h4>Task 25</h4>';

$date = date_create('2025-12-31');
date_modify($date, '+2 days');
date_modify($date, '+1 month +3 days');
date_modify($date, '+1 year');
date_modify($date, '-3 days');
echo date_format($date, 'Y-m-d');

// 26  Дізнайтеся, скільки днів залишилося до Нового Року. Скрипт має працювати у будь-якому році.

echo '<h4>Task 26</h4>';

function days_to_new_year() {
    $current_year = date('Y');
    $time_to_new_year = mktime(0, 0, 0, 1, 1, $current_year + 1) - time();
    $days = $time_to_new_year / (60 * 60 * 24);
    echo 'Днів залишилося до Нового Року - ' . $days;
}

days_to_new_year();

// 27 Зробіть форму з одним полем введення, яке користувач вводить рік. Знайдіть усі п'ятниці 13-те цього року. Результат виведіть у вигляді масиву дат.

$year = $_POST['year_task27'];

if(!empty($year)) {
    echo '<h4>Task 27</h4>';
    $first_day_year = mktime(0, 0, 0, 1, 1, $year);
    $last_day_year = mktime(0, 0, 0, 12, 31, $year);
    $fridays = [];
    for($i = $first_day_year; $i <= $last_day_year; $i=strtotime('1 day', $i)){
        if(date('N', $i) == 5) {
            if(date('d', $i) == 13) {
                $fridays[] = date('m.d.y', $i);
            }
        }
    }
    echo 'Всі пятниці 13-те цього року';
    print_r($fridays);
}

// 28 Дізнайтеся, який день тижня був 100 днів тому.

echo '<h4>Task 28</h4>';

$time = strtotime('-100 days');

$week_day = date('l', $time);
echo 'день тижня який був 100 днів тому - це ' . $week_day;