<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class EmployeeController extends Controller {

    public function indexWS(Request $request, Response $response) {
        
        $options = array('cache_wsdl' => WSDL_CACHE_NONE);
        $url = $this->container['WEBSERVICE_URL'] . '/employees.wsdl';
        $server = new \SoapServer($url, $options);
        $server->setClass(\App\Models\Employee::class);
        $server->handle();
        
    }
}