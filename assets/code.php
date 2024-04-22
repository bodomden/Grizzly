<?php
$source = 'https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json';

$source_json = file_get_contents($source);
$arr = json_decode($source_json, true);

if ($_POST) {

    $inputNumber = $_POST['phone_number'];
    $inputNumber = editInputFormat($inputNumber);

    foreach ($arr as $elem) {
        $mask = str_replace(["(", ")"], "-", $elem['mask']);
        $mask = explode('-', $mask);
        if (count($inputNumber) == count($mask)) {
            if (compareNumbers($inputNumber, $mask)) {
                echo $elem['name_ru'];
                exit;
            }
        } else {
            continue;
        }
    }
}

function editInputFormat($number)
{
    $search = [' (', ') ', '(', ')', ' '];
    $number = str_replace($search, '-', $number);
    if (!str_starts_with($number, '+')) $number = '+' . $number;
    $number = explode('-', $number);
    return $number;
}

function compareNumbers($input, $mask)
{
    foreach ($input as $key => $value) {
        $a = $input[$key];
        $b = $mask[$key];
        if (strlen($a) == strlen($b)) {
            if ($a == $b) continue;
            for ($i = 0; $i < strlen($a); $i++) {
                if ($a[$i] == $b[$i] or $b[$i] == '#') {
                    continue;
                } else {
                    return False;
                }
            }
        } else {
            return False;
        }
    }
    return True;
}
