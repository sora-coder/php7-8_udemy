<?php
$pref = [
    'hokkaido' => '北海道',
    'aomori' => '青森県',
    'iwate' => '岩手県',
    'akita' => '秋田県'
];

foreach($pref as $pref_name){
    echo '・', $pref_name, "\n";
}

foreach($pref as $pref_key => $pref_name){
    echo '・', $pref_key, ':', $pref_name, "\n";
}
