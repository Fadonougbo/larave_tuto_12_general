<?php


describe('Test tuto',function(){

    test('example', function () {

        $response = $this->get('/');

        $response->assetSee();
    });

})->only();


