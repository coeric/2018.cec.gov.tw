<?php
$rawPath = __DIR__ . '/06_stations';
if(!file_exists($rawPath)) {
  mkdir($rawPath, 0777);
}
$cities = array(
  '63000' => '臺北市',
'65000' => '新北市',
'68000' => '桃園市',
'66000' => '臺中市',
'67000' => '臺南市',
'64000' => '高雄市',
'10004' => '新竹縣',
'10005' => '苗栗縣',
'10007' => '彰化縣',
'10008' => '南投縣',
'10009' => '雲林縣',
'10010' => '嘉義縣',
'10013' => '屏東縣',
'10002' => '宜蘭縣',
'10015' => '花蓮縣',
'10014' => '臺東縣',
'10016' => '澎湖縣',
'09020' => '金門縣',
'09007' => '連江縣',
'10017' => '基隆市',
'10018' => '新竹市',
'10020' => '嘉義市',
);

foreach($cities AS $cityId => $city) {
  $jsonFile = $rawPath . '/' . $cityId . '.json';
  if(!file_exists($jsonFile)) {
    file_put_contents($jsonFile, file_get_contents('http://2018.cec.gov.tw/json/VoterPollingStation/' . $cityId . '.json'));
  }
}
