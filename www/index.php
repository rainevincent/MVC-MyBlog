<?php
    /**
     * Created by PhpStorm.
     * User: raine_v
     * Date: 28/09/2017
     * Time: 02:23
     */
    
    require '../vendor/autoload.php';
    
    $app = new \Framework\App();
    
    $response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
    
    \Http\Response\send($response);
