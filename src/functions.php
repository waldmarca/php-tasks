<?php

function task1(array $strings, bool $return = true) 
{
  $result = implode("\n", array_map(function (string $str) {
    return "<p>$str</p>";
  }, $strings));

  if ($return) {
    return $result;
  }

  echo $result;
}

function task2(string $action, ...$args) 
{
  foreach ($args as $n => $arg) {
    if (is_int($arg) && !is_float($arg)) {
      trigger_error('argument #' . $n . 'is not integer or float');
      return 'ERROR: wrong argument';
    }
  }
  switch ($action) {
    case '+':
      return array_sum($args);
    case '-':
      return array_shift($args) - array_sum($args);
    case '/':
      $result = array_shift($args);
      foreach ($args as $n => $arg) {
        if ($arg == 0) {
          trigger_error('divide by zero on argument #' . ($n + 1));
          return 'ERROR: divide by zero';
        }
        $result = $result / $arg;
      }
      return $result;
    case '*':
      $result = 1;
      foreach ($args as $arg) {
        $result *= $arg;
      }
      return $result;
    
    default:
      return 'ERROR: unexpected action';
  }
}

function task3(int $a, int $b)
{
    $result = '<table border="1">';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

function task4()
{
  date_default_timezone_set('Europe/Moscow');
  echo date('d.m.Y H:i');
  echo '<br>';
  echo strtotime('24.02.2016 00:00:00');
  echo '<br>';
  echo date('Y-m-d H:i:s', 1456261200);
  echo '<br>';
}

function task5() {
  $string = 'Карл у Клары украл Кораллы';
  echo str_replace('К', '', $string);
  echo '<br>';

  $string = 'Две бутылки лимонада';
  echo str_replace('Две', 'Три', $string);
  echo '<br>';
}

function my_file_get_contents(string $filename) 
{
  $fp = fopen($filename, 'r');
  if (!$fp) {
    return false;
  }

  $str = '';
  while (!feof($fp)) {
    $str .= fgets($fp, 1024);
  }

  echo $str;
}