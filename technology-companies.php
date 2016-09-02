<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];



echo 'Exercise 1..............' . PHP_EOL;
ksort($companies);
foreach ($companies as $key => $company) {
    echo $key . PHP_EOL;
    foreach ($company as $value) {
        echo 'Employee: ' . $value . PHP_EOL;
    }
}


echo 'Exercise 2..............' . PHP_EOL;
foreach ($companies as $key => $company) {
    asort($company);
    $companies[$key] = $company;
}

print_r($companies);

echo 'Exercise 3..............' . PHP_EOL;
asort($companies);
print_r($companies);


