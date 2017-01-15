<?php 

$app=[];

$app['config'] = require 'config.php';

require 'core/Request.php';
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
	connection::make($app['config']['database'])
);

//return new QueryBuilder(Connection::make());