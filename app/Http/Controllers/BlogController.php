<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        return view('Blog.index');
    }

    public function __invoke()
    {
        // Return a view or perform some other action here
        return view('Blog.index');
    }
}
