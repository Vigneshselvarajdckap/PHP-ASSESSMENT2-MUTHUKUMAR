<?php

require "controllers/UserController.php";

class routers
{
    public $routes = [];

    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();

    }
        public function get($uri,$action)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'action'=>$action,
                'method'=>'GET',

            ];
        }
        public function post($uri,$action)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'action'=>$action,
                'method'=>'POST',

            ];
        }

        public function check($uri,$method)
        {
            foreach($this->routes as $router)
            {
                if($router['uri'] == $uri && $router['method'] == $method)
                {

                    $action = $router['action'];

                    switch ($action)
                    {
                        case 'view':
                            $this->controller->view();
                            break;
                        case 'create':
                            $this->controller->create();
                            break;
                        case 'dbShow';
                            $this->controller->dbShow();
                            break;
                        case 'storeTable';
                            $this->controller->StoreTable($_POST);
                            break;
                        case 'dataInsert';
                            $this->controller->DataInsert();
                            break;
                        case 'tabName';
                            $this->controller->showTab($_POST);
                            break;
                        case 'insertColumn';
                            $this->controller->showColmun($_POST);
                            break;
                        default:
                    }

                }
            }
        }
}
