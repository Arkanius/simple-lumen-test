<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $validationErrorMessage = 'Invalid data, please check your fields';
    protected $resourceCreatedMessage = 'User created successfully';
    protected $internalErrorMessage   = 'An error occurred please try again later';

}
