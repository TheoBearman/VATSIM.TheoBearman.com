<?php
require_once './vendor/autoload.php';

$logFile = './vendor/skymeyer/vatsimphp/app/logsusers.log';

$vatsim = new \Vatsimphp\VatsimData();
$vatsim->setConfig('cacheOnly', true);
$vatsim->setConfig('logFile', $logFile);

if ($vatsim->loadData()) {
    	$info = $vatsim->getGeneralInfo()->toArray();
	$voice = $vatsim->getVoiceServers()->toArray();
	$servers = $vatsim->getServers()->toArray();
	echo "{$info['connected_clients']}";
} else {
	echo "Cannot load data";
}

?>
