<?php
$age = rand(1, 120);
echo "Возраст: $age <br>";

if ($age >= 18 && $age <= 65) {
  echo 'Вам ещё работать и работать';
} else if ($age > 65) {
  echo 'Вам пора на пенсию';
} else if ($age >= 1 && $age <= 17) {
  echo 'Вам ещё рано работать';
} else {
  echo 'Неизвестный возраст';
}