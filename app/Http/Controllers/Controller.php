<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
abstract class Controller
{
    //
=======
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
}
