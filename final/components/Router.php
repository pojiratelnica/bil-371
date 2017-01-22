<?php
/**
* 
*/
class Router
{
	private $routes;
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}
	private function getURI()
	{
		if(!empty($_SERVER['REQUEST_URI']))
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	public function run()
	{
		$uri = $this->getURI();
		foreach($this->routes as $uripattern=>$path)
		{
			if (preg_match("~$uripattern~", $uri))
			{
				$internalRoute = preg_replace("~$uripattern~", $path, $uri);
				$segments = explode('/', $internalRoute);
				$moveindex = array_shift($segments); //чтобы убрать index.php в internalRoute
				if ($moveindex == 'default'){
					$controllerName = ucfirst($moveindex.'Controller');
					$actionName = 'actionView';
				}
				else{
					$controllerName = ucfirst(array_shift($segments).'Controller');
					$actionName = 'action'.ucfirst(array_shift($segments));
				}
				$parameters = $segments;
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				if (file_exists($controllerFile))
				{
					include_once($controllerFile);
				}
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if ($result != null)
				{
					break;
				}

			}
		}
	}
}