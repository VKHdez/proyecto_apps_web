<?php
include ('lib/Route.php');

$route = new Route();

$route->routeController(array(
    '/public/' => 'Welcome/Index',
    'signIn' => 'signIn/show'
));

?>