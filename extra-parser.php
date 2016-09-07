<?php

function parseSalesData($filename)
{
    $message = '';
    $handle = fopen($filename, 'r');
    $salesInfo = fread($handle, filesize($filename));
    $salesInfo = explode(PHP_EOL, $salesInfo);
    array_splice($salesInfo, 0, 14);
    $message .= "There are currently " . count($salesInfo) . " employees." . PHP_EOL;
    $totalSales = null;
    foreach ($salesInfo as $key => $contact) {
        $salesInfo[$key] = explode(', ', $contact); 
    }
    foreach ($salesInfo as $contact) {
        $totalSales += (int) $contact[3];
    }
    $message .= "There are $totalSales units that have been sold." . PHP_EOL;
    $averageSales = $totalSales / count($salesInfo);
    $message .= "The average sale count per employee is $averageSales." . PHP_EOL . PHP_EOL;
    $message .= "UNITS       |       NAME                |                   EMPLOYEE NUMBER" . PHP_EOL;

    foreach ($salesInfo as $key => $rep) {
        $formattedArray = [
            'sales' => $rep[3],
            'name' => $rep[1] . ' ' . $rep[2],
            'employee number' => $rep[0],
        ];
        $salesInfo[$key] = $formattedArray;
    }
    arsort($salesInfo);

    foreach ($salesInfo as $rep) {
        $count = 0;
        foreach ($rep as $info) {
            $count += 1;
            if ($count < 3) {
                $message .= str_pad($info, 20*$count);
            } else {
                $message .= $info;
            }
        }
        $message .= PHP_EOL;
    }

    // print_r($salesInfo);
    fclose($handle);
    return $message;
}

print_r(parseSalesData('extra-output.txt'));
