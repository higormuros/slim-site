<?php
//pasta app precisou ser mencionada em composer.json
//também foi necessário usar o cmd "composer dump-autoload" para a pasta app ser enxergada pelo slim
namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController{
    public function index(Request $request, Response $response){
        $response->getBody()->write("Hello");
        return $response;
    }

}