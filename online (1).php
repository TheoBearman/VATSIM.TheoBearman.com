<?php
require_once 'C:\Users\Administrator\Desktop\Vatsimphp\vendor\autoload.php';

$logFile = 'C:\Users\Administrator\Desktop\Vatsimphp\vendor\skymeyer\vatsimphp\app\logsusers.log';

$vatsim = new \Vatsimphp\VatsimData();
$vatsim->setConfig('cacheOnly', true);
$vatsim->setConfig('logFile', $logFile);

if ($vatsim->loadData()) {
    $info = $vatsim->getGeneralInfo()->toArray();
	$voice = $vatsim->getVoiceServers()->toArray();
$servers = $vatsim->getServers()->toArray();

}

?>

<?php
    echo "{$info['connected_clients']}";

?>
