
<?php 


function is_palindrome ($string) 
{
    $characters = [",", "'", " ", "!", "-", ";", ".", "/", ":"];
    $stripped = str_replace($characters, '', $string);
    echo $stripped . PHP_EOL;
    $stripped = strtolower($stripped);
    echo $stripped . PHP_EOL;
    $stripped = strrev($stripped);
    echo $stripped . PHP_EOL;
    if ($stripped == strtolower(strrev($stripped))) {
        return 'True';
    } else {
        return 'False';
    } 
    
}


echo is_palindrome('A man, a plan, a canal: Panama') . PHP_EOL;
echo is_palindrome("No 'x' in 'Nixon") . PHP_EOL;












// $wordBankFile = '../../desktop/dev_links/sowpods.txt';
// $handle = fopen($wordBankFile, 'r');
// $contents = fread($handle, filesize($wordBankFile));
// fclose($handle);
