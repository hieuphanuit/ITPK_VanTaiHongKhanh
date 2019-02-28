<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bai_viet;

class TuyenDungController extends Controller
{
    //
    public function indexAdmin()
    {
        //
        $tuyen_dung = bai_viet::where('loai_bai_viet','tuyen_dung')->first();
        if(!$tuyen_dung){
            $tuyen_dung = new bai_viet;
            $tuyen_dung->loai_bai_viet = 'tuyen_dung';
            $tuyen_dung->save();
        }
        return view('admin.TuyenDung.index',['tuyen_dung' => $tuyen_dung]);
    }

    public function update(Request $request)
    {
        //
        $input = $request->all();
        $tuyen_dung = bai_viet::where([['id',$input['id']],['loai_bai_viet','tuyen_dung']])->first();
        $tuyen_dung->tieu_de = $input['tieu_de'];
        $tuyen_dung->noi_dung = $input['noi_dung'];
        $tuyen_dung->seo_title = $input['seo_title'];
        $tuyen_dung->seo_description = $input['seo_description'];
        $tuyen_dung->seo_robots = $input['seo_robots'];
        $tuyen_dung->save();
        return  redirect()->back();
    }
}
