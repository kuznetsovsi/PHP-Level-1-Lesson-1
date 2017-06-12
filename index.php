<!DOCTYPE html>
<?php
$conttitle = "Домашня работа из Лекции 1";
$conth1 = "Курсы по PHP Level 1";
?>
<html>
   <head>
      <meta charset="utf-8">
      <title><?php echo "$conttitle" ?></title>
   </head> 
   <body>
      <header>
         <h1><?php echo "$conth1" ?></h1>
      </header>
	  <nav>
	     <a href="#">Лекция 1</a>
		 <a href="№">Лекция 2</a>
		 <a href="#">Лекция 3</a>
		 <a href="4">Лекция 4</a>
	  </nav>
      <article>
         <h2>Добро пожаловать!</h2>
         <p><?php
   echo "<h3>Пример №1</h3>";
//echo "<br>";
   echo "Hello. World";
   echo "<br>";
   echo "<h3>Пример №2. Базовые конструкции языка.</h3>";
//echo "<br>";
      $name = "GeekBrains user";
   echo "Hello, $name!";
   echo "<h3>Пример №3. Константы.</h3>";
   define('MY_CONST', 100);
   echo MY_CONST;
   echo "<h3>Пример №4. Типы данных.</h3>";
      $int10 = 42;
	  //$int2 = 0b101010;
	  $int8 = 052;
	  $int16 = 0x2A;
   echo "Десятеричная система $int10 <br>";
   echo "Двоичная система $int2 <br>";
   echo "Восьмеричная система $int8 <br>";
   echo "Шестнадцатеричная система $int16 <br>";
   $precise1 = 1.5;
   $precise2 = 1.5e4;
   $precise3 = 6E-8;
   echo "$precise1 | $precise2 | $precise3";
   echo "<h3>Пример №5. Разница между '' и \"\".";
   echo "<br>";
   $a = 1;
   echo "$a";
   echo "<br>";
   echo '$a';
   echo "<h3>Пример №6. Приведение типов.</h3>";
   $a = 10;
   $b = (boolean) $b;
   echo "<h3>Пример №7. Простейшие операции.</h3>";
   $a = 'Hello,';
   $b = 'world';
   $c = $a . $b;
   echo $c;
   echo "<h3>Пример №8. Математический операции.</h3>";
   $a = 4;
   $b = 5;
   echo $a + $b . '<br>'; //сложение
   echo $a * $b . '<br>'; //умножение
   echo $a - $b . '<br>'; //вычитание
   echo $a / $b . '<br>'; //деление
   echo $a % $b . '<br>'; //остаток от деления
   //echo $a ** $b . '<br>'; //возведение в степень
   echo "<h3>Привер № 9. Сокращенные операторы.</h3>";
   $a = 4;
   $b = 5;
   $a += $b;
   echo 'a= '. $a;
   $a = 0;
   echo "<br>";
   echo $a++; //Постинкремент
   echo "<br>";
   echo ++$a; //Преинкремент
   echo "<br>";
   echo $a--; //Постдекремент
   echo "<br>";
   echo --$a; //Предекремент
   echo "<br>";
   echo "<h3>Привер № 10. Операции сравнения.</h3>";
   $a = 4;
   $b = 5;
   var_dump($a == $b); //Сравнение по значению
   var_dump($a === $b); //Сравнение по значению и типу
   var_dump($a > $b); //Больше
   var_dump($a < $b); //Меньше
   var_dump($a <> $b); //Не равно
   var_dump($a != $b); //Не равно
   var_dump($a !== $b); // Не равно без приведения типов
   var_dump($a <= $b); //Меньше или равно
   var_dump($a >= $b); //Больше или равно
   echo "<h3>Домашнее задание</h3>";
   $a = 5;
   $b = '05';
   var_dump($a == $b); //true так как идетсравнение значения
   var_dump((int)'012345'); //12345 так как приводим к вещественному числу и 0 не ставится
   var_dump((float)123.0 === (int)123.0); //false из-за несоответствия типов
   var_dump((int)0 === (int)'hello, world'); //  
   echo "<h3>Домашнее задание. Обмен значениями.</h3>";
   echo 'Дано:';
   echo "<br>";
   $a = 1;
   echo 'a = ',$a;
   echo "<br>";
   $b = 2;
   echo 'b = ',$b;
   echo "<br>";
   $a = $a + $b;
   $b = $a - $b;
   $a = $a - $b;
   echo "<br>";
   echo 'a = ',$a;
   echo "<br>";
   echo 'b = ',$b;
?></p>
  </article>
  <footer>
    Copyright
  </footer>
 </body> 
</html>