<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Administrator;
use App\Http\Middleware\Student;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', Administrator::class);
        $middleware->appendToGroup('student', Student::class);
        $middleware->validateCsrfTokens(except: [
            '/payment/response',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
