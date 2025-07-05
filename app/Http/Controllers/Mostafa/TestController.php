<?php

namespace App\Http\Controllers\Mostafa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(/*Request $request*/)
    {
        return 'welcome invoke';
    }
}
