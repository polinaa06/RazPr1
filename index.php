<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr1</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="title">
        <h2>Практическая работа №1</h2>
        <p>Выполнила: Безвинная Полина 425 ВЕБ</p>
    </div>

    <div class="content section">
        <div class="task">
            <h3>Задание 1</h3>
            <?
            $students = ['Безвинная', 'Сандакова', 'Кадырова', 'Кириллов', 'Соловьева', 'Денисов', 'Смирнов'];

            echo '<p class="bold">Список студентов:</p>';

            ?>
            <p>
                <?
                foreach ($students as $student) {
                    echo $student;
                    echo '<br>';
                }
                ?>
            </p>

            <div class="kolvo">
                <?
                echo '<p class="bold">Количество студентов:</p>';
                echo count($students);
                ?>
            </div>

            <?

            if (in_array('Сидоров', $students)) {
                echo 'В данном списке есть студент с фамилией Сидоров';
            } else {
                echo 'В данном списке нет студента с фамилией Сидоров';
            }

            $expelled = array_pop($students);

            ?>
            <div class="kolvo">
                <?
                echo '<p class="bold">Удаленная фамилия:</p>';
                echo $expelled
                    ?>
            </div>
        </div>

        <div class="task">
            <h3>Задание 2</h3>

            <?
            $hobbies = [
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванова",
                "Литературный" => "Петров",
                "Биологический" => "Антонова",
            ];

            asort($hobbies);

            foreach ($hobbies as $key => $name) {
                echo "$key - $name";
                echo '<br>';
            }
            ?>

        </div>

        <div class="task">
            <h3>Задание 3</h3>

            <?

            $info = [
                "name" => "Полина",
                "surname" => "Безвинная",
                "group" => "425 ВЕБ",
                "hobbies" => ["Танцы", "Чтение книг"],
                "social" => ["telegram" => "@nofault", "instagram" => "polinaa06", ]
            ];

            echo '<p class="bold">Личная информация:</p>';
            ?>

            <p>Я <?=$info['surname']?> <?=$info['name']?> , студентка группы <?=$info['group']?>. Мои хобби: <?=$info['hobbies'][0]?> , <?=$info['hobbies'][1]?>.</p> 
            <p class="bold">Мои соцсети:</p>
            <ul>
                <li>Telegram: <?=$info['social']['telegram']?></li>
                <li>Instagram: <?=$info['social']['instagram']?></li>
            </ul>
        </div>
    </div>
</body>

</html>