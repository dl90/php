<?php

function sumLargestNumbers($numbers)
{
  $arr = $numbers;
  $arrLength = count($numbers);
  $sum = 0;

  if ($arrLength < 2) {
    echo "not enough numbers";
  } elseif ($arrLength === 2) {
    foreach ($numbers as $num) {
      $sum += $num;
    }
    return $sum;
  } else {
    rsort($arr);
    $largest = $arr[0];
    $secondLargest = $arr[1];
  }

  $sum = $largest + $secondLargest;
  return $sum;
};

echo "<p>" . sumLargestNumbers([1, 10]) . "</p>";
echo "<p>" . sumLargestNumbers([1, 2, 3]) . "</p>";
echo "<p>" . sumLargestNumbers([10, 4, 34, 6, 92, 2]) . "</p>";
