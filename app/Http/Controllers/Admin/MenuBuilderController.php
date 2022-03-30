<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuBuilderController extends Controller
{
    /**
     * Display a MenuBuilder. page
     *
     * @return Response
     */

     public function __invoke()
     {
        return view('admin.menu-builder.index');
     }
}
