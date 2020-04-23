<?php 
/*
	Recode/Reupload boleh tapi sertakan author nya ya babi

*/
error_reporting(0);
function http_request($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
} 

echo "Daerah : ";
$wil = trim(fgets(STDIN));
$web = http_request("https://muslimsalat.com/$wil.json?key=d9991f8e98c0421f54d84d7c58f76fdf");
$web = json_decode($web, TRUE);

$subuh  = $web['items']['0']['fajr'];
$zuhur  = $web['items']['0']['dhuhr'];
$ashar  = $web['items']['0']['asr'];
$magrib = $web['items']['0']['maghrib'];
$isya   = $web['items']['0']['isha'];

echo "###################################################\n";
echo "#                 Time Shalat                     #\n";
echo "#                Coded By Micin                   #\n";
echo "###################################################\n";
echo "Jadwal Solat di Daerah ".$wil."\n";
echo "Subuh       : ".$subuh."\n";
echo "Zhuhur      : ".$zuhur."\n";
echo "Ashar       : ".$ashar."\n";
echo "Maghrib     : ".$magrib."\n";
echo "Isya        : ".$isya."\n";

?>
