<?php


use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsEditor;
use App\Http\Middleware\IsWriter;
use App\Http\Middleware\IsSuperAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(IsAdmin::class);
        // $middleware->append(IsSuperAdmin::class);
        // $middleware->append(IsEditor::class);
        // $middleware->append(IsWriter::class);
        $middleware->statefulApi();
        // $middleware->append(EnsureFrontendRequestsAreStateful::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
