<?php

/*
 * This where you define your routes. you can use match, but also get, post, put, patch  etc.
 * You can even put some closures, but it's not recommended. It's better to keep things clean.
 *
 */

/* ************
 * HOME PAGE
 */
//$app->match('/',"home.controller:indexAction")->bind("homepage");

$app->match('/{_locale}', "home.controller:indexAction")->assert("_locale", "[a-z]{2}")->bind("home");
$app->match('/', "home.controller:indexAction")->assert("_locale", "[a-z]{2}")->bind("homepage");
$app->match('/contact', "home.controller:contactAction")->assert("_locale", "[a-z]{2}")->bind("contact");
//$app->match('/', "home.controller:maintenanceAction")->bind("home");
$app->match('/switch_locale/{locale}', "home.controller:changeLocaleAction");
$app->match('/switch_currency/{currency}', "home.controller:changeCurrencyAction");
$app->match('/parts/header/{_locale}', "home.controller:getHeaderAction");
$app->match('/{_locale}/parts/header', "home.controller:getHeaderAction");
$app->match('/{_locale}/parts/footer', "home.controller:getFooterAction");



// Admin
$app->get('/admin/crud/{collectionName}/list', "admin.crud.controller:listAction")->bind("admin_crud_list");
$app->get('/admin/crud/list', "admin.crud.controller:dispatchAction")->bind("crud_list_default");

$app->match('/admin/crud/{collectionName}/add', "admin.crud.controller:addAction")->bind("admin_crud_add");
$app->get('/admin/crud/{collectionName}/{id}/view', "admin.crud.controller:viewAction")->bind("admin_crud_view");
$app->match('/admin/crud/{collectionName}/{id}/edit', "admin.crud.controller:editAction")->bind("admin_crud_edit");
$app->match('/admin/crud/{collectionName}/{id}/delete', "admin.crud.controller:deleteAction")->bind("admin_crud_delete");




$app->match('/api/tracking/optout', "tracking.controller:optoutAction");
$app->match('/api/tracking/webhook', "tracking.controller:segmentIoAction");
$app->match('/api/tracking/error', "tracking.controller:errorAction");
$app->match('/api/tracking/sherlog', "tracking.controller:sherlogAction");


// API CRUD ROUTES

$app->options('/api/{collectionName}', function () {
    return new \Symfony\Component\HttpFoundation\Response(null);
});
$app->get('/api/{collectionName}', "api.crud.controller:listAction")->bind('api.crud.list');

$app->get('/api/{collectionName}/{id}', "api.crud.controller:listAction")->bind('api.crud.view');

$app->post('/api/{collectionName}', "api.crud.controller:createAction")->bind('api.crud.create');

$app->put('/api/{collectionName}/{id}', "api.crud.controller:editAction")->bind('api.crud.edit');

$app->delete('/api/{collectionName}/{id}', "api.crud.controller:deleteAction")->bind('api.crud.delete');




$app->match('/js/compiled/{_locale}/{file}', "home.controller:getAssetAction")->value("type", "js")
    ->bind('compiled_assets_js');
$app->match('/css/compiled/{_locale}/{file}', "home.controller:getAssetAction")->value("type", "css")
    ->bind('compiled_assets_css');


$app->match('/{url}', "home.controller:removeTrailingSlashAction")->bind("trailing.slash")->assert("url", ".+\/$");

return $app;
