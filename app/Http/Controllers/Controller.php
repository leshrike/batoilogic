<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      
 *      title="Batoilogic G01",
 *      version="1.0.0",
 *  )
 */

 /**
  * @OA\SecurityScheme(
  *     type="http",
  *     description="Login with email and password to get the authentication",
  *     name="Token based Based",
  *     in="header",
  *     scheme="bearer",
  *     bearerFormat="JWT",
  *     securityScheme="apiAuth",
  * )
  */


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}