<?php
/**
 * Here you can configure your routes, the order which they are added is important.
 * The first match route will be used.
 */
use Origin\Core\Plugin;
use Origin\Http\Router;

/*
* Add your routes here
* @example
*
* Router::add('/login',['controller'=>'Users','action'=>'login']);
* Router::add('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
* Router::add('/pages/*', ['controller'=>'Pages','action'=>'display']);
* Router::add('/:controller/:action/:id');
* Router::add('/:controller/:action.:type');
* Router::add('/cooks/:action/*', ['controller' => 'Users']);
* Router::add('/rest/*',['controller' => 'Rest', 'action' => 'api_dispatcher']);
*/

Router::add('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
Router::add('/pages/*', ['controller' => 'Pages','action' => 'display']);

/*
* Load the routes for plugins
*/
Plugin::loadRoutes();

/*
* Load default routes - You can remove these if you want but you will need to add a
* route for each controller/action etc.
*/
Router::add('/:controller/:action/*');
Router::add('/:controller', ['action' => 'index']);
