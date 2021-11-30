<!-- 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. -->

<?php
    function sum($a, $b) {
        return $a + $b;
    }

    function subtract($a, $b) {
        return $a - $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function divide($a, $b) {
        return $a / $b;
    }

?>

<!-- 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). -->
<?php

        /**
         * Выполняем арифмитеческие операции с числами
         * 
         * @param {int} arg1 - первое число
         * @param {int} arg2 - второе число
         * @param {string} operation - математическая операция
         * @return {int} результат
         */
        function doMath($arg1, $arg2, $operation) {
            $result = 0;
            switch($operation) {
                case "+":
                    $result = sum($arg1, $arg2);
                    break;
                case "-":
                    $result = subtract($arg1, $arg2);
                    break;
                case "*":
                    $result = multiply($arg1, $arg2);
                    break;
                case "/":
                    $result = divide($arg1, $arg2);
                    break;
            }
            echo $result;
            return $result;
        }

        doMath(4, 6, '*');
?>