<?php
$data = file_get_contents('PlayerRanks.json');
$data = json_decode($data, true);

$array = array();
foreach($data['PlayerRankData'] as $key => $value) {
    $array['data'][] = array("Name" => $value['Name'], 
                             "PVPKills" => $value['PVPKills'],
                             "PVPDistance" => $value['PVPDistance'],
                             "PVEKills" => $value['PVEKills'],
                             "PVEDistance" => $value['PVEDistance'],
                             "SleepersKilled" => $value['SleepersKilled'],
                             "HeadShots" => $value['HeadShots'],
                             "Deaths" => $value['Deaths'],
                             "Suicides" => $value['Suicides'],
                             "KDR" => $value['KDR'],
                             "SDR" => $value['SDR'],
                             "TimesHealed" => $value['TimesHealed'],
                             "HeliKills" => $value['HeliKills'],
                             "APCKills" => $value['APCKills'],
                             "BulletsFired" => $value['BulletsFired']
                            );
}

echo json_encode($array);
?>