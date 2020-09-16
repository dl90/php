<?php

function camelCase($string)
{

   $arr =  explode(" ", $string);
   $str = array_shift($arr);

   foreach ($arr as $value) {
      $str .= strtoupper($value[0]) . substr($value, 1);
   }

   return $str;
}

echo "<p>" . camelCase("this is a string") . "</p>";
echo "<p>" . camelCase("fur pillows are hard to actually sleep on") . "</p>";
echo "<p>" . camelCase("supercalifragalisticexpialidocious") . "</p>";
