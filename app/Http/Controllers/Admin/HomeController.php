<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    // public function user()
    // {
    //     return "HomeController Admin";
    // }
    // public function index()
    // {
    //     echo route('admin.home.index');
    //     return "HomeController Admin Index";
    // }
    public function __invoke()
    {
        return view('admin.dashboard.index');
    }
}