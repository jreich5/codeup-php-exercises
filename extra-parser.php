<?php
// Bonus exercise incomplete

function parseContacts($filename)
{
    // $message = '';
    $handle = fopen($filename, 'r');
    $contacts = fread($handle, filesize($filename));
    $contacts = explode(PHP_EOL, $contacts);
    array_splice($contacts, 0, 14);
    // $message .= "There are currently " . count($contacts) . " employees." . PHP_EOL;
    $totalSales = null;
    foreach ($contacts as $key => $contact) {
        $contacts[$key] = explode(', ', $contact); 
    }
    foreach ($contacts as $info) {
            $info = explode(',', $info);
        }
    // foreach ($contacts as $contact) {
    //     $totalSales += (int) $contact[3];
    // }
    // $message .= "There are $totalSales units that have been sold." . PHP_EOL;
    // $averageSales = $totalSales / count($contacts);
    // $message .= "The average sale count per employee is $averageSales." . PHP_EOL . PHP_EOL;
    // $message .= "Units    |    Full Name    |    Employee Number" . PHP_EOL;
    
    arsort($contacts);
    // function salesRanker ($list, $message) 
    // {
    //     $totalList = [];
    //     foreach ($list as $employee) {
    //         $report = $employee[3] . "," . $employee[1] . " " . $employee[2] . "," . $employee[0] . PHP_EOL;
    //         array_push($totalList, $report);
    //     }

       
        
    //     return $totalList;
        
    // }

    // $message = salesRanker($contacts, $message);




    fclose($handle);
    return $contacts;
}

print_r(parseContacts('extra-output.txt'));
