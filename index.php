<?php
    require 'main.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 19 Зробіть поле введення, в яке користувач вводить рік (4 цифри), а скрипт визначає чи високосний рік. -->
    <h4>Task 19</h4>
    <form action="main.php" method="POST" style="width: 300px;">
        <h6>Введіть рік на перевірку чи високосний він чи ні</h6a>
        <div class="form-group">
            <label for="year">Input year</label>
            <input type="number" class="form-control" id="year" name="year" placeholder="Enter year" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- 20 Зробіть форму, яка запитує дату у форматі '31.12.2025'. За допомогою mktime та explode переведіть цю дату у формат timestamp. Дізнайтесь день тижня (словом) за введену дату. -->
    <h4>Task 20</h4>
    <form action="main.php" method="POST" style="width: 400px;">
        <h6>Введіть дату у форматі '31.12.2025'</h6>
        <div class="form-group">
            <label for="date">Input date</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="dd.mm.yyyy" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- 21 Зробіть форму, яка запитує дату у форматі '2025-12-31'. За допомогою mktime та explode переведіть цю дату у формат timestamp. Дізнайтесь місяць (словом) за введену дату. -->
    <h4>Task 21</h4>
    <form action="main.php" method="POST" style="width: 300px;">
        <h6>Введіть дату у форматі '2025-12-31'</h6>
        <div class="form-group">
            <label for="date_task21">Input date</label>
            <input type="text" class="form-control" id="date_task21" name="date_task21" placeholder="yyyy-mm-dd" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- 22  Зробіть форму, яка запитує дві дати у форматі '2025-12-31'. Першу дату запишіть у змінну $date1, а другу в $date2. Порівняйте, яка із введених дат більше. Виведіть її на екран. -->
    <h4>Task 22</h4>
    <form action="main.php" method="POST" style="width: 300px;">
        <h6>Введіть дві дати у форматі '2025-12-31'</h6>
        <div class="form-group">
            <label for="date_task22_first">Input date</label>
            <input type="text" class="form-control" id="date_task22_first" name="date_task22_first" placeholder="yyyy-mm-dd" required>
        </div>
        <div class="form-group">
            <label for="date_task22_second">Input date</label>
            <input type="text" class="form-control" id="date_task22_second" name="date_task22_second" placeholder="yyyy-mm-dd" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- 24  Зробіть форму, яка запитує дату-час у форматі '2025-12-31T12:13:59'. За допомогою функції strtotime та функції date перетворіть її на формат '12:13:59 31.12.2025'. -->
    <h4>Task 24</h4>
    <form action="main.php" method="POST" style="width: 400px;">
        <h6>Введіть дату у форматі '2025-12-31T12:13:59'</h6>
        <div class="form-group">
            <label for="date_time_task24">Input date</label>
            <input type="text" class="form-control" id="date_time_task24" name="date_time_task24" placeholder="yyyy-mm-ddThh:mm:ss" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- 27 Зробіть форму з одним полем введення, яке користувач вводить рік. Знайдіть усі п'ятниці 13-те цього року. Результат виведіть у вигляді масиву дат. -->
<h4>Task 27</h4>
    <form action="main.php" method="POST" style="width: 400px;">
        <h6>Введіть рік</h6>
        <div class="form-group">
            <label for="year_task27">Input date</label>
            <input type="text" class="form-control" id="year_task27" name="year_task27" placeholder="Enter year" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>