<?php

function parseContacts($filename)
{
    $contacts = [];
    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contacts = fread($handle, filesize($filename));
    $contacts = explode(PHP_EOL, $contacts);    
    array_pop($contacts);
    foreach ($contacts as $key => $contact) {
        $exploded = explode('|', $contact);
        $number = substr($exploded[1], 0, 3) . '-' . substr($exploded[1], 3, 3) . '-' . substr($exploded[1], 6, 4);
        $newArray = ['name' => $exploded[0], 'number' => $number];
        $contacts[$key] = $newArray;
    }
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
