<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Home as BaseController;
use App\Models\Home;
use Carbon\Factory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function see()
    {
        return view('home');
    }
}