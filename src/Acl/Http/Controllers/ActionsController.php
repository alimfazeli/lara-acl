<?php

namespace Alimfazeli\Acl\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;

use Alimfazeli\Acl\Models\Eloquent\Action;

class ActionsController extends Controller
{
    /**
     * @var Eloquent model object for Actions
     */
    private $model;


    public function __construct(Action $model)
    {
        $this->model = $model;
        dd($this->model);
    }
}
