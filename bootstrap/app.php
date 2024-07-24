<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\AgeCheckGroup;
use App\Http\Middleware\CountryCheckGroup;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //globale middleware
        // $middleware->append(AgeCheck::class);


        // group middleware
         $middleware->appendToGroup('check1',[
            AgeCheckGroup::class,
            CountryCheckGroup::class,
         ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
