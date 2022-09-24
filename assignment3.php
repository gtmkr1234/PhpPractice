<?php

//Q1
$input_string = "hello world";
$ipstring2 = "HELLO WORLD";
echo strtoupper($input_string); // converts all character to uppercase
echo "<br>";
echo strtolower($ipstring2); // converts all character to lowercase
echo "<br>";
echo ucfirst($input_string); // Makes the first character of the string to uppercase
echo "<br>";
echo ucwords($input_string); // converts the first character of the word to uppercase
echo "<br>";


//Q2
$input_string = "082307";
$input = str_split($input_string,2);
echo join(':',$input);
echo "<br>";



//Q3
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (str_contains($str1, 'over'))
{
    echo 'The specific word is present.';
}
else
{
    echo 'The specific word is not present.';
}
echo "<br>";



//Q4
$a =  20;
$s = (string)$a;
if ($a == $s)
{
    echo "They are the same"."\n";
}
else
{
    echo "They are not same"."\n";
}
echo "<br>";



//Q5
$s = 'rayy@example.com';
echo substr($s, -3);
echo "<br>";



//Q6
$a1 = 65.45;
$a2 = 104.35;
echo sprintf("%1.2f", $a1+$a2);
echo "<br>";



//Q7
$rnd = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($rnd), 0, 7);
echo "<br>";



//Q8
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1);
echo "<br>";




//Q9
$str1 = 'facebook';
$str2 = 'facebool';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"', $str_pos, $str1[$str_pos], $str2[$str_pos]);
echo "<br>";



//Q10
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
