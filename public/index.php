<?php
//is the page tstkbl any request from user and start journy from route to send response
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
/*
ده بيخزن الوقت اللي بدأ فيه تنفيذ التطبيق علشان
Laravel تقدر تحسب المدة الزمنية اللي خدها لتحميل الصفحة (performance profiling).
 */
define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
} // i can ative this mode with (php artisan down) and notactive with (php artisan up)

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';
/*
ده بيعمل Bootstrapping لتطبيق Laravel:

يجهز  Service Container.

يجهز  Service Providers.

يجهز  (environment).

يجهز الكور الأساسي للـ framework.*/
// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';
// dd( Request::capture() );
$app->handleRequest(Request::capture()); // the best class in laravel

