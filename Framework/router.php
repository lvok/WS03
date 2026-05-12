<?php

namespace Framework;
use App\Controllers\ErrorController;

class Router
{
    protected $routes = [];

    public function registerRoutes($method, $uri, $action)
    {
       list ($controller, $controllerMethod) = explode('@', $action);


        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod
        ];
    }

    /*
     
Add GET route
@param string $uri
@param string $controller
@return void */

    public function get($uri, $controller)
    {
        $this->registerRoutes('GET', $uri, $controller);
    }

/**   
*Add POST route
*@param string $uri
*@param string $controller
*@return void
*/

    public function post($uri, $controller)
    {
        $this->registerRoutes('POST', $uri, $controller);
    }

/** 
*Add PUT route
*@param string $uri
*@param string $controller
*@return void
*/

    public function put($uri, $controller)
    {
        $this->registerRoutes('PUT', $uri, $controller);
    }


/**    
*Add DELETE route
*
*@param string $uri
*@param string $controller
*@return void
*/

    public function delete($uri, $controller)
    {
        $this->registerRoutes('DELETE', $uri, $controller);
    }


/**
*    
*Route the request to the appropriate controller
*@param string $uri
*@param string $method
*@return void
*/

    public function route($uri)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        
        foreach ($this->routes as $route) {

            $uriSegments = explode('/', trim($uri, '/'));
            $routeSegments = explode('/', trim($route['uri'], '/'));

            $match = true;
            if(count($uriSegments) === count($routeSegments) && strtoupper($route['method']) === strtoupper($requestMethod)) {
               $params = [];
               $match = true;

               for($i=0; $i < count($uriSegments); $i++){
                   if($routeSegments[$i] !== $uriSegments[$i] && !preg_match('/\{(\w+)\}/', $routeSegments[$i])) {
                       $match = false;
                       break;
                   }

                   if(preg_match('/\{(\w+)\}/', $routeSegments[$i], $matches)) {
                    $params[$matches[1]] = $uriSegments[$i];                 
                   }   
               }
               if($match){

                $controller = 'App\\Controllers\\' . $route['controller'];
                $controllerMethod = $route['controllerMethod']; 

                $controllerInstance = new $controller();
                $controllerInstance->$controllerMethod($params);
                return;
                }
            
               }
            }
        ErrorController::notFound();
    }
}