<?php

use App\Helper\Helper;
use App\Models\User;
use Illuminate\Testing\TestResponse;
use Mockery\MockInterface;



describe('Test tuto',function(){

    test('example', function () {
    
       /**
        * @var TestResponse $response
        */
        $response = $this->get('/');

    
        $response->assertSee('okok');
    });

    test('Not found test', function () {

        $response = $this->get('/notfound');

        $response->assertStatus(404);
    });

    test('Redirect test', function () {

        /**
        * @var TestResponse $response
        */
        $response = $this->get('/bigdata');

        $response->assertRedirect('/');
    });

    test('bad slug redirect', function () {

        $user=User::factory()->create();
        
        /**
        * @var TestResponse $response
        */
        $response = $this->get(route('home.user',['slug'=>'bad-slug','user'=>$user->id]));

        $slug=str($user->name)->slug();
        $response->assertRedirect("user/{$slug}/{$user->id}");
    });

    test('good slug test', function () {

        $user=User::factory()->create();

        $slug=str($user->name)->slug()->toString();
        
        /**
        * @var TestResponse $response
        */
        $response = $this->get(route('home.user',['slug'=>$slug,'user'=>$user->id]));

        $response->assertOk();

        $response->assertSeeText("{$user->name} {$user->email}");
    });

    test('Mock test',function(){

        $mock = $this->mock(Helper::class, function (MockInterface $mockInterface) {
            $mockInterface->expects('isActive')->once()->andReturnTrue();
        });

        $spy = $this->spy(Helper::class); 
        
    });


})->only();


