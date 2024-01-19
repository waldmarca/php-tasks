<?php 
include('./src/functions.php');

echo task1([1, 2, 3], false);

echo task2('/', 21, 3, 7);

echo task3(4, 7);

echo task4();

echo task5();

file_put_contents('test.txt', 'Hello again!');

my_file_get_contents('test.txt');