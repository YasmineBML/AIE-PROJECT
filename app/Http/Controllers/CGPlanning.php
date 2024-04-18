<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Specialite ;

class CGPlanning extends BaseController

{   public function index()
{
    return view(view: 'GestionPlanning');
}

}
