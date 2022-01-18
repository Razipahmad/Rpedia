<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index()
    {
        return view('admin.Category.index');
    }

    public function add()
    {
        return view('admin.Category.add');
    }
}
