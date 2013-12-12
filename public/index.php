<?php
http_response_code(500);
require(__DIR__ . '/../library/runtime.php');

$application = new \application\FrontendApplication();
$request = new core\request\WebRequest();
$response = $application->run($request);
$application->output($request, $response);