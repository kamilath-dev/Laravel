<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('blog.index');
    }

    public function __invoke()
    {
        // Return a view or perform some other action here
        return view('Blog.index');
    }
}
