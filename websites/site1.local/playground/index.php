//    $matchFound = false;


//    while (!feof($fileHandel)) {
//        $line = fgets($fileHandel);
//        $row = preg_split('/,/', rtrim($line));
//        echo $line;
//        echo '<br>';
//        var_dump($row);
//        echo '<br>';
//
//        if ($row[0] == $username && $row[1] == $pwHash && $row[4] != '1') {
//            $row[2] = time();
//            $matchFound = true;
//        }
//        else if ($row[0] == $username && $row[1] != $pwHash && $row[4] != '1') {
//
//            if ((int)$row[3] < 3) {
//                $row[3]++;
//            }
//            else {
//                $row[4] = 1;
//            }
//            $matchFound = true;
//        }
//        else if ($row[0] == $username && $row[4] == '1')
//        {
//            return 2;
//        }
//
//        echo implode(',', $row)."\n";
//        fwrite($fileHandel, implode(',', $row)."\n");
//        if ($matchFound) break;
//    }
//
//    fclose($fileHandel);<?php
