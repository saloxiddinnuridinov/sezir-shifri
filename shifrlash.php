<?php

if (isset($_POST["ok"])) {
    $k = $_POST["kalit"];

    $str = strtolower(trim($_POST["matn"]));

    $str2 = str_split($str);

    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $new = [];

    for ($i = 0; $i <= count($str2)-1; $i++) {

        for ($j = 0; $j <= count($arr); $j++) {

            if ($str2[$i] === " ") {
                $new[] = '_';
                break;
            } elseif ($str2[$i] == $arr[$j]) {
                $x = ($j + $k) % count($arr);
                $new[] = $arr[$x];
            }
        }
    }
    foreach ($new as $key => $value) {
        echo $value;
    }
}
if (isset($_POST["dekode"])){

        $k = $_POST["kalit"];

        $str = strtolower(trim($_POST["matn"]));

        $str2 = str_split($str);

        $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $new = [];

        for ($i = 0; $i < count($str2); $i++) {
            if ($str2[$i] === "_") {
                $new[] = ' ';
                continue;
            }

            for ($j = 0; $j < count($arr); $j++) {
                if ($str2[$i] == $arr[$j]) {
                    $x = ($j - $k + count($arr)) % count($arr);
                    $new[] = $arr[$x];
                    break;
                }
            }
        }

        $decryptedStr = implode('', $new);
        echo $decryptedStr;


}
