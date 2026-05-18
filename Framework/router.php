<?php

namespace Framework;
use App\Controllers\ErrorController;
use Framework\Middleware\Authorize;

class Router
{
    protected $routes = [];

    public function registerRoutes($method, $uri, $action, $middleware = [])
    {
       list ($controller, $controllerMethod) = explode('@', $action);


        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
            'middleware' => $middleware
        ];
    }

    /*
     
Add GET route
@param string $uri
@param string $controller
@return void */

    public function get($uri, $controller, $middleware = [])
    {
        $this->registerRoutes('GET', $uri, $controller, $middleware );
    }

/**   
*Add POST route
*@param string $uri
*@param string $controller
*@return void
*/

    public function post($uri, $controller, $middleware = [])
    {
        $this->registerRoutes('POST', $uri, $controller, $middleware);
    }

/** 
*Add PUT route
*@param string $uri
*@param string $controller
*@return void
*/

    public function put($uri, $controller, $middleware = [])
    {
        $this->registerRoutes('PUT', $uri, $controller, $middleware);
    }


/**    
*Add DELETE route
*
*@param string $uri
*@param string $controller
*@return void
*/

    public function delete($uri, $controller, $middleware = [])
    {
        $this->registerRoutes('DELETE', $uri, $controller, $middleware);
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

        if($requestMethod === 'POST' && isset($_POST['_method'])) {
            $requestMethod = strtoupper($_POST['_method']);
        }
        
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

                foreach($route['middleware'] as $middleware) {
                  (new Authorize())->handle($middleware); 
                }

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