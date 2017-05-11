<?php
// Routes

$app->group('/employees', function () {
    // BeneficiariesWebService
    $this->get('/wsdl', \App\Controllers\EmployeeController::class . ':wsdl');
    $this->post('', \App\Controllers\EmployeeController::class . ':indexWS');
});