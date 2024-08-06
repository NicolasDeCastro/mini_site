<?php

use Pecee\SimpleRouter\SimpleRouter;

use src\source\Helpers;
try {
    SimpleRouter::setDefaultNamespace('src\Controller');

    SimpleRouter::get(url_site,'siteController@index');
    SimpleRouter::get(url_site.'sobre/','siteController@sobre');
    SimpleRouter::get(url_site.'404','siteController@erro404');
    SimpleRouter::start();
} catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $th) {
    Helpers::redirecionar('404');
}

