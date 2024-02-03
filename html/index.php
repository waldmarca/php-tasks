<?php 
include '../src/ServiceInterface.php';
include '../src/TariffInterface.php';
include '../src/TariffAbstract.php';
include '../src/TariffBasic.php';
include '../src/ServiceGPS.php';
include '../src/ServiceDriver.php';
include '../src/TariffHour.php';
include '../src/TariffStudent.php';

/** @var TariffInterface $tariff */
$tariff = new TariffBasic(8, 25);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));

echo 'Тариф: Базовый <br>';
echo 'Расстояние: ' . $tariff->getDistance() . 'км <br>';
echo 'Время: ' . $tariff->getMinutes() . 'минут <br>';
echo 'Сервисы: ' . $tariff->getServices() . '<br>';
echo 'Цена: ' . $tariff->countPrice() . 'рублей' . '<br>';

echo '<br>';

$tariffHour = new TariffHour(40, 65);
$tariffHour->addService(new ServiceGPS(15));
$tariffHour->addService(new ServiceDriver(100));

echo 'Тариф: Почасовой <br>';
echo 'Расстояние: ' . $tariffHour->getDistance() . 'км <br>';
echo 'Время: ' . $tariffHour->getMinutes() . 'минут <br>';
echo 'Сервисы: ' . $tariffHour->getServices() . '<br>';
echo 'Цена: ' . $tariffHour->countPrice() . 'рублей' . '<br>';

echo '<br>';

$tariffStudent = new TariffStudent(4, 12);
$tariffStudent->addService(new ServiceGPS(15));
$tariffStudent->addService(new ServiceDriver(100));

echo 'Тариф: Студенческий <br>';
echo 'Расстояние: ' . $tariffStudent->getDistance() . 'км <br>';
echo 'Время: ' . $tariffStudent->getMinutes() . 'минут <br>';
echo 'Сервисы: ' . $tariff->getServices() . '<br>';
echo 'Цена: ' . $tariffStudent->countPrice() . 'рублей';
?>