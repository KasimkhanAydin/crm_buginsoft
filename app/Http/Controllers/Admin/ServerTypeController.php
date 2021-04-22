<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServerTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.server_types.index');
    }

    public function create()
    {
        return view('admin.server_types.create');
    }
    public function store(Request $request)
    {
        return view('admin.server_types.create');
    }
}
