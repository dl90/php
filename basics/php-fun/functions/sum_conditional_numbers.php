<?php

function conditionalSum($values, $condition)
{
   $sum = 0;

   switch ($condition) {
      case "even":
         foreach ($values as $element) {
            if ($element % 2 === 0) {
               $sum += $element;
            }
         }
         break;
      case "odd":
         foreach ($values as $element) {
            if ($element % 2 !== 0) {
               $sum += $element;
            }
         }
         break;
      default:
         echo "no condition or incorrect condition";
   }
   return $sum;
}

echo "<p>" . conditionalSum([1, 2, 3, 4, 5], "even") . "</p>";
echo "<p>" . conditionalSum([1, 2, 3, 4, 5], "odd") . "</p>";
echo "<p>" . conditionalSum([13, 88, 12, 44, 99], "even") . "</p>";
echo "<p>" . conditionalSum([], "odd") . "</p>";
