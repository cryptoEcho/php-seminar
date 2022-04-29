<?php

require_once 'NewScreenLogger.php';

$screenLogger = new NewScreenLogger();
$screenLogger->logEvent('Test', __FILE__, __LINE__, __FUNCTION__);
