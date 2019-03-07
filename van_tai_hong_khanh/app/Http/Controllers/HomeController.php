<?php

namespace App\Http\Controllers;
use App\hinh_anh;
use App\bai_viet;
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
        $bai_viet_slider = bai_viet::where('loai_bai_viet','slider')->first();
        $slider_1s = hinh_anh::where('loai_hinh_anh','slider_1')->get();
        $slider_2s = hinh_anh::where('loai_hinh_anh','slider_2')->get();
        $slider_3s = hinh_anh::where('loai_hinh_anh','slider_3')->get();
        $tin_tucs = bai_viet::where('loai_bai_viet', 'tin_tuc')->take(5)->get();

        return view('public.homePage',['slider_1s'=>$slider_1s,'slider_2s'=>$slider_2s,'slider_3s'=>$slider_3s,'bai_viet_slider'=>$bai_viet_slider,'tin_tucs'=>$tin_tucs]);
    }
}
