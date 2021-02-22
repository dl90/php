<?php

function numberOfVowels($input)
{
  $str = rtrim($input);
  $vowels = ["a", "e", "i", "o", "u"];

  $counter = 0;
  $strLength = strlen($str);
  for ($i = 0; $i < $strLength; $i++) {
    if (in_array($str[$i], $vowels)) {
      $counter += 1;
    }
  }

  return $counter;
}

echo "<p>" . numberOfVowels("abcdefg") . "</p>"; // 2
echo "<p>" . numberOfVowels("bbbb") . "</p>"; // 0
echo "<p>" . numberOfVowels("iou") . "</p>"; // 3
