<?php
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL;      // returns index.
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;    // ignore case of word to search for.
echo "14 - " . strrpos($string, 'l') . '<br>' . PHP_EOL;    // index of last occurrence.
echo "15 - " . substr($string, 8) . '<br>' . PHP_EOL;          // substr starting at index 8 till end, although a third argument can be passed for length of substr.
echo "16 - " . substr($string, 8, 3) . '<br>' . PHP_EOL;
echo "17 - " . str_replace('world', 'PHP', $string) . '<br>' . PHP_EOL;
echo "18 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;    // ignore case of word to replace.

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;


// Multiline text and line breaks
$longText = "
  Hello, my name is _____
  I am __,
  Bye-Bye.
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL;     // function to convert \newline to <br> in input string.

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>name</b>
  I am <b>age</b>,
  Bye-Bye.
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;     // displays HTML entities as plain-text.
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;      // functions can be nested.
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;     // decode HTML special characters.
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;  

// starts_with and ends_with.
$mystr = "hello world";

if(str_starts_with($mystr, "he")){
    echo "ok1" . "<br>";
}

if(str_ends_with($mystr, "old")){
    echo "ok2" . "<br>";
}

if(str_ends_with($mystr, "ld")){
    echo "ok3" . "<br>";
}

$alertStr = "<script>alert('This is an alert example.')</script><br>";
echo $alertStr;         // Will run the JS script.
// We can use this instead...
echo htmlspecialchars($alertStr), "<br>";      // Will echo.

// Formatted Strings.
$c1 = 'John';
$c2 = 3;
printf('%s likes to run for %d hours<br>', $c1, $c2);
printf('1 + 1 = %d <br>', 1 + 1);
printf('1 + 1 = %f <br>', 1 + 1);

// https://www.php.net/manual/en/ref.strings.php

?>
