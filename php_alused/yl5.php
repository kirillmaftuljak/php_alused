<?php

$ained = array('Matemaatika', 'Eesti_keel', 'Inglise_keel', 'Vene_keel', 'Inimeseopetus');

foreach ($ained as $nimetused) {
    echo "$nimetused <br>";
}
sort($nimetused);

$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
echo '<br>'.count($pallivisked).'<br>';
echo array_sum($pallivisked).'<br>';
echo max($pallivisked).'<br>';
echo array_keys($pallivisked).'<br>';
print_r(array_keys($pallivisked));

$
$a=array("Martin"=>"33","Hardi"=>"32","Juhan"=>"27","Tiina"=>"11");
print_r(array_keys($a));
