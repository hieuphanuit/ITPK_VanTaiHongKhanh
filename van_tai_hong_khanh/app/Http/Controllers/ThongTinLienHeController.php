<?php

namespace App\Http\Controllers;
use App\thong_tin_lien_he;
use Illuminate\Http\Request;

class ThongTinLienHeController extends Controller
{
    //
    public function indexAdmin()
    {
        //
        $thong_tin_lien_hes = thong_tin_lien_he::all();
        return view('admin.ThongTinLienHe.index',['thong_tin_lien_hes' => $thong_tin_lien_hes]);
    }
}
