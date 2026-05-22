<?php
// ユーザアカウント一覧のみを例にしている。ほかの機能に対応するためには、別途Router機能を追加する必要がある
$class = 'User';
$action = 'list';
$args = [];

include "models/{$class}Model.php";
include "views/{$class}View.php";
include "controllers/{$class}Controller.php";

$_modelClass = "{$class}Model";
$model = new $_modelClass();

$_viewClass = "{$class}View";
$view = new $_viewClass();

$_controllerClass = "{$class}Controller";
$controller = new $_controllerClass($model, $view);
$actionFunc = "{$action}Action";

call_user_func_array([$controller, $actionFunc], $args);