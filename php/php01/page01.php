<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>\n";
eCHo "My house is " . $COLOR . "<br>\n";
Echo "My boat is " . $coLOR . "<br>\n";
ECHO "My boat is " . $color . "<br>\n";
ECHO "My boat is embedded var in string ($color) <== thar she var!<br>\n";
EcHo "The echo keyword is not case-sensitive." . "<br>\n";

$x = 21;
$y = 35;
eChO "The sum of $x and $y is " . ($x + $y) . "." . "<br>\n";

$bear = 99;

function test01() {
    //global $bear;
    $fox = 100;
    echo "fox is " . $fox;   echo "<br>\n";
    $fox = $fox + 10;
    echo "fox is " . $fox;   echo "<br>\n";
    $fox = $fox + $bear;
    echo "fox is " . $fox;   echo "<br>\n";
    echo "bear is " . $bear;   echo "<br>\n";

    echo "### VARDUMPS BEGIN ###";   echo "<br>\n";
    var_dump($fox);   echo "<br>\n";
    echo "### ###";   echo "<br>\n";
    //echo xdebug_var_dump($fox);   echo "<br>\n";
    echo "1: ";  var_dump($bear);   echo "<br>\n";
    echo "2: ";  var_dump($GLOBALS['bear']);   echo "<br>\n";
    echo "3: ";  var_dump($GLOBALS["bear"]);   echo "<br>\n";
    //echo xdebug_var_dump($bear);   echo "<br>\n";
    echo "### VARDUMPS END ###";   echo "<br>\n";
}

test01();

echo "bear is " . $bear;   echo "<br>\n";
echo "fox is " . $fox;   echo "<br>\n";


function test02() {
    static $x = 0;
    var_dump($x);
    echo $x . "\n";
    $x++;
}

test02();
test02();
test02();



function test03() {
    $s1 =  0b1111;    // binary
    $s2 = -0b1111;    // binary
    $x1 =  21;        // decimal
    $x2 = -21;        // decimal
    $y1 =  021;       // octal
    $y2 = -021;       // octal
    $z1 =  0x21;      // hexadecimal
    $z2 = -0x21;      // hexadecimal

    echo "############## test03 ##################\n";
    echo "s1 = " . $s1 . "\n";
    echo "s2 = " . $s2 . "\n";
    echo "x1 = " . $x1 . "\n";
    echo "x2 = " . $x2 . "\n";
    echo "y1 = " . $y1 . "\n";
    echo "y2 = " . $y2 . "\n";
    echo "z1 = " . $z1 . "\n";
    echo "z2 = " . $z2 . "\n";

    echo "PHP_INT_SIZE = " . PHP_INT_SIZE . "\n";
    echo "PHP_INT_SIZE * 8 = " . (PHP_INT_SIZE * 8) . " bits \n";
    echo "PHP_INT_MAX = "  . PHP_INT_MAX . "\n";
    echo "PHP_INT_MIN = "  . PHP_INT_MIN . "\n";
    echo "PHP_INT_MIN - 1 = "  . (PHP_INT_MIN - 1) . "\n";

    // Examples from: http://php.net/manual/en/language.types.integer.php
    // PHP automatically changes, upon overflow, from using integer to using float.
    // NOTE: THIS IS FOR 64-bit SYSTEM.
    $large_number = 9223372036854775807;    // NOTE: PHP_INT_MAX = 9223372036854775807
    var_dump($large_number);                     // int(9223372036854775807)
    $large_number++;
    var_dump($large_number);                     // float(9.2233720368548E+18)
    $large_number--;
    var_dump($large_number);                     // float(9.2233720368548E+18)
    $large_number = $large_number - 91111110000000;
    var_dump($large_number);                     // float(9.2232809257448E+18)

    $large_number = 21;
    var_dump($large_number);                     // int(21)

    $large_number = 9223372036854775808;
    var_dump($large_number);                     // float(9.2233720368548E+18)

    $million = 1000000;
    $large_number =  50000000000000 * $million;
    var_dump($large_number);                     // float(5.0E+19)

    echo "########\n";
    $foo = 99;
    echo "foo = " . $foo . "\n";
    var_dump($foo);
    $bar = 99.0;
    echo "bar = " . $bar . "\n";
    var_dump($bar);

    echo "########\n";
    $foo1 = true;
    echo "foo1 = " . $foo1 . "\n";
    var_dump($foo1);
    $bar1 = false;
    echo "bar1 = " . $bar1 . "\n";
    var_dump($bar1);

    $foo1 = false;
    echo "foo1 = " . $foo1 . "\n";
    var_dump($foo1);

    $foo2 = TRuE;
    echo "foo2 = " . $foo2 . "\n";
    var_dump($foo2);
    $bar2 = FalSE;
    echo "bar2 = " . $bar2 . "\n";
    var_dump($bar2);
}
test03();

function test04() {
    echo "######################### test04 #######################\n";

    $juice = "apple";
    // Valid.
    echo "Valid: He drank some $juice juice.".PHP_EOL;
    // Invalid. "s" is a valid character for a variable name, but the variable is $juice.
    echo "Invalid: He drank some juice made of $juices.".PHP_EOL;
    // Valid. Explicitly specify the end of the variable name by enclosing it in braces:
    echo "Valid: He drank some juice made of ${juice}s.".PHP_EOL;

    echo "########\n";

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    $juices = array("apple", "orange", "koolaid1" => "purple");

    echo "He drank some $juices[0] juice.".PHP_EOL;
    echo "He drank some $juices[1] juice.".PHP_EOL;
    echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

}
test04();


class A {
    function __toString() {
        return "This is class A";
    }
}

class B {
    function __toString() {
        return "This is class B";
    }
}

function test05() {
    echo "######################### test05 #######################\n";
    // See:
    //      http://php.net/manual/en/language.oop5.references.php#86374
    //      http://php.net/manual/en/language.operators.assignment.php#language.operators.assignment.reference
    //      http://php.net/manual/en/language.references.whatare.php

    $a = new A();
    $b = new B();

    $temp = $a;
    $a = $b;        // <== normal assignment (assignment by value)
    $b = $temp;

    print('$a: ' . $a . "\n");
    print('$b: ' . $b . "\n");
    //    As expected the script will output:
    //    $a: Class B
    //    $b: Class A

    //    Now consider the following snippet. It is similar to the former but the assignment $a = &$b makes $a an ALIAS of $b.
    $a = new A();
    $b = new B();

    $temp = $a;
    $a = &$b;       // <== "alias" (aka assignment by reference)
    $b = $temp;

    echo "Again:\n";
    print('$a: ' . $a . "\n");
    print('$b: ' . $b . "\n");
    //    This script will output:
    //    $a: Class A
    //    $b: Class A

    echo "#####################";
    $a = "Hello ";
    $a .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";
    ECHO "a is: " . $a . "\n";
    $b = 3;
    $b += "5";
    $b .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";
    ECHO "b is: " . $b . "\n";
}
test05();

function test06() {
    echo "######################### test06 #######################\n";
    // For converting to boolean and what all will be "false", see: http://php.net/manual/en/language.types.boolean.php#language.types.boolean.casting
    // isset(), empty(), and is_null
    $aFalse = false;  echo "aFalse is: "; var_dump($aFalse);  echo "    isset: " . isset($aFalse) . "  empty: " . empty($aFalse) . "  is_null: " . is_null($aFalse) . "\n";
    $aTrue = True;    echo "aTrue is: "; var_dump($aTrue);    echo "    isset: " . isset($aTrue)  . "  empty: " . empty($aTrue)  . "  is_null: " . is_null($aTrue)  . "\n";
    $aNULL = NULL;    echo "aNULL is: "; var_dump($aNULL);    echo "    isset: " . isset($aNULL)  . "  empty: " . empty($aNULL)  . "  is_null: " . is_null($aNULL)  . "\n";
    $aNull = Null;    echo "aNull is: "; var_dump($aNull);    echo "    isset: " . isset($aNull)  . "  empty: " . empty($aNull)  . "  is_null: " . is_null($aNull)  . "\n";
    $aZero = 0;       echo "aZero is: "; var_dump($aZero);    echo "    isset: " . isset($aZero)  . "  empty: " . empty($aZero)  . "  is_null: " . is_null($aZero)  . "\n";
    $aOne = 1;        echo "aOne is: "; var_dump($aOne);      echo "    isset: " . isset($aOne)   . "  empty: " . empty($aOne)   . "  is_null: " . is_null($aOne)   . "\n";
                      echo "aUndef is: "; var_dump($aUndef);  echo "    isset: " . isset($aUndef) . "  empty: " . empty($aUndef) . "  is_null: " . is_null($aUndef) . "\n";

}
test06();


echo "\n";
echo "######################### DONE #######################\n";
?>

</body>
</html>
