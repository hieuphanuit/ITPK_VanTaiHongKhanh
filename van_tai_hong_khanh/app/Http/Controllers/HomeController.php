<?php

namespace App\Http\Controllers;
use App\hinh_anh;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider_1s = hinh_anh::where('loai_hinh_anh','slider_1')->get();
        $slider_2s = hinh_anh::where('loai_hinh_anh','slider_2')->get();
        $slider_3s = hinh_anh::where('loai_hinh_anh','slider_3')->get();
        return view('public.homePage',['slider_1s'=>$slider_1s,'slider_2s'=>$slider_2s,'slider_3s'=>$slider_3s]);
    }
}
