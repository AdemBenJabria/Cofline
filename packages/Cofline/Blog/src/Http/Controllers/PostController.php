<?php

namespace Cofline\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;

Class PostController extends Controller
    {
        public function test()
        {
            return view('Cofline/Blog::Layout.Layout');
        }

        public function index()
        {
            return view('Cofline/Blog::Layout.void');
        }

        public function store()
        {
            return view('Cofline/Blog::Layout.void');
        }

        public function create()
        {
            //show create post form
            return view('Cofline/Blog::posts.create');
        }
        
        public function show()
        {
            return view('Cofline/Blog::Layout.void');
        }
        
        public function update()
        {
            return view('Cofline/Blog::Layout.void');
        }

        public function destroy()
        {
            return view('Cofline/Blog::Layout.void');
        }

        public function edit()
        {
            return view('Cofline/Blog::Layout.void');
        }

    }