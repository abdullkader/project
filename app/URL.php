<?php 
namespace App;

class URL {
    protected $urls = [];

    private function addURL($route, $controller, $action, $method) {
        $this->urls[$method][$route] = [
            'controller' => $controller,
            'action' => $action
        ]; 
    }

    public function get($route, $controller, $action) {
        $this->addURL($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action) {
        $this->addURL($route, $controller, $action, "POST");
    }

    public function dispatch() {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->urls[$method][$uri])) {
            $controllerN = $this->urls[$method][$uri]['controller'];
            $actionN = $this->urls[$method][$uri]['action'];

            if (!class_exists($controllerN)) {
                throw new \Exception("Class $controllerN not found");
            }

            $controller = new $controllerN();
            $controller->$actionN();
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}
?>
