<?php

use App\Http\Middleware\LogRequestMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))//basepath === handle all path in project
// make create to object in app and assign this in app var >>
    ->withRouting( //is calling the page of routes
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {// calling middleware
        //any request run this log run
        $middleware->append(LogRequestMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void { // using in api
        //
    })->create();
