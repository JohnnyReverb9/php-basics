<pre>

<?php

require_once "../vendor/autoload.php";

function space(): void
{
    echo "<br>";
}

$visitor = new \Аpp\Visitor();
$boss = new \Аpp\Boss("Alex", 20, "Metro", 30);

$visitor->setVisit(true);
print_r($visitor->isVisit());

space();

$dev = new \Аpp\Developer("John", 22, "Metro", 0);

print_r("rest days: " . $dev->getRest());

$dev->setRest(14);

space();
print_r("project: " . $dev->getProject());

$dev->updateProject($dev->getProject());

space();
print_r("rest days: " . $dev->getRest());
space();
print_r("name: " . $dev->getName());
space();
print_r("age: " . $dev->getAge());
space();
print_r("project: " . $dev->getProject());
space();

space();
echo "Boss:<br>";
$boss->info();
space();
space();
echo "Developer:<br>";
$dev->info();
space();
space();

$dev->recentProject();
$boss->rest();

space();
space();

// $casts = ["fire", "water", "wind", "earth"];
$casts = [];
$magic = new \Аpp\Magic("Boris", $casts, 1000);
print_r((string)$magic); // использование __toString, когда объект приводится к строке
space();

space();
// пусть таких функций и не реализовывалось, но вызов их возможен
$sum = $magic->sum(12, 12, 12);
print_r($sum);
space();
print_r($magic->summmmm(123, 12));
space();

$mult = \Аpp\Magic::mult(10, 99);
print_r($mult);
space();
print_r(\Аpp\Magic::jumbo());
space();
space();
// реализация магических геттеров и сеттеров
// прокидываем значения
$magic->fire = "fire resist";
$magic->water = "water non-resist";
$magic->wind = "wind resist";
$magic->earth = "earth resist";
print_r($magic->getSpells());
space();
// получим неизвестное значение
$val = $magic->qwerty;
print_r($val); // не получим ошибки, так как вернулось просто null
space();
space();

$magic->setName("Dumb'l'Door");

// serialize --> по сути сохраняет данные в строку
/*
 * В PHP функция serialize() используется для преобразования структур данных в строку,
 * которую можно сохранить в файле или передать по сети, и затем восстановить структуру данных из этой строки.
 * Этот процесс называется сериализацией и десериализацией.
 */
// сериализация и десериализация связаны с методами sleep и wakeup, которые помогают упаковать объект в строку
// и распаковать обратно, используется для сохранения объекта в ди
$ser = serialize($magic); // с помощью магии сериализовали объект с указанными параметрами
var_dump($ser);

$obj = unserialize($ser); // десериализовали в соответствии с магическим методом
// var_dump($obj);

space();
space();
echo "invoke()";
space();
space();
$intTan = round($magic(M_PI_4), 4);
print_r("Интеграл от тангенса равен: $intTan");

space();
space();

$magic2 = clone $magic;
var_dump($magic2);
print_r($magic2->getSpells());

var_dump($magic);

// функции для работы с классами
// class_exists() -- проверяет, был ли объявлен класс
var_dump(class_exists("Аpp\\Developer"));

// get_class_methods() -- возвращает массив методов класса
var_dump(get_class_methods("Аpp\\Magic")); // можно прокинуть объект

// get_class_vars() -- возвращает строку из свойств класса
var_dump(get_class_vars("Аpp\\Salary"));

// get_class -- возвращает имя класса
var_dump(get_class($dev));

/*
 * get_declared_classes
 * get_declared_interfaces
 * get_declared_traits
 * возвращают массивы со всеми объявленными ...
 *
 * get_mangled_object_vars -- возвращает массив с изменёнными свойствами объекта
 */

// get_object_vars -- аналог get_class_vars() для объекта
var_dump(get_object_vars($dev));

// get_parent_class() -- возвращает родительский класс
var_dump(get_parent_class($boss));

// method_exists() -- проверка существует ли метод
var_dump(method_exists($boss, 'info'));
var_dump((method_exists($boss, 'work')));
// property_exists -- аналогично методам
?>
</pre>
