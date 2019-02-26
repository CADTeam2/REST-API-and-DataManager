<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group([
    'prefix' => 'api',
], function() use ($router) {

	// User API Routes:
    $router->get('users', [
        'uses' => 'UserController@showAllUsers',
    ]);
    $router->get('users/{userID}', [
        'uses' => 'UserController@showUser',
    ]);
    $router->post('users', [
        'uses' => 'UserController@create',
    ]);
    $router->delete('users/{userID}', [
        'uses' => 'UserController@delete',
    ]);
    $router->put('users/{userID}', [
    	'uses' => 'UserController@update',
    ]);

    // Event API Routes:
    $router->get('events', [
        'uses' => 'EventController@showAllEvents',
    ]);
    $router->get('events/{eventID}', [
        'uses' => 'EventController@showEvent',
    ]);
    $router->post('events', [
        'uses' => 'EventController@create',
    ]);
    $router->delete('events/{eventID}', [
        'uses' => 'EventController@delete',
    ]);
    $router->put('events/{eventID}', [
    	'uses' => 'EventController@update',
    ]);

    // Session API Routes:
    $router->get('sessions', [
        'uses' => 'SessionController@showAllSessions',
    ]);
    $router->get('sessions/{sessionID}', [
        'uses' => 'SessionController@showSession',
    ]);
    $router->post('sessions', [
        'uses' => 'SessionController@create',
    ]);
    $router->delete('sessions/{sessionID}', [
        'uses' => 'SessionController@delete',
    ]);
    $router->put('sessions/{sessionID}', [
    	'uses' => 'SessionController@update',
    ]);

    // Questions API Routes:
    $router->get('questions', [
        'uses' => 'QuestionController@showAllQuestions',
    ]);
    $router->get('questions/{questionID}', [
        'uses' => 'QuestionController@showQuestion',
    ]);
    $router->post('questions', [
        'uses' => 'QuestionController@create',
    ]);
    $router->delete('questions/{questionID}', [
        'uses' => 'QuestionController@delete',
    ]);
    $router->put('questions/{questionID}', [
    	'uses' => 'QuestionController@update',
    ]);

    // Attendance API Routes:
    $router->get('attendances', [
        'uses' => 'AttendanceController@showAllAttendances',
    ]);
    $router->get('attendances/{sessionID}/{userID}', [
        'uses' => 'AttendanceController@showAttendance',
    ]);
    $router->post('attendances', [
        'uses' => 'AttendanceController@create',
    ]);
    $router->delete('attendances/{sessionID}/{userID}', [
        'uses' => 'AttendanceController@delete',
    ]);
    $router->put('attendances/{sessionID}/{userID}', [
    	'uses' => 'AttendanceController@update',
    ]);
});
