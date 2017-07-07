<?php

//rotas da ApiV1
$this->group(['prefix' => 'v1'], function(){
$this->resource('products', 'Api\V1\ProductController',['except' => ['create','edit']]);
});

//rotas da ApiV2
$this->group(['prefix' => 'v2'], function(){
$this->resource('products', 'Api\V2\ProductController',['except' => ['create','edit']]);
});


//$this->resource('products', 'API\ProductController',['except' => ['create','edit']]);