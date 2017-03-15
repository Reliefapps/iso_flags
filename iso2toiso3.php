<?php

$json_string = '/Users/raphael_b/Desktop/countryISO.json';

$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata, true);
print_r($obj);

foreach ($obj as $iso2 => $iso3){
  shell_exec('cp /Users/raphael_b/Desktop/48_iso2/"'.$iso2.'" /Users/raphael_b/Desktop/48_iso3/"'.$iso3.'"');
}


?>
