<?php

namespace App\Http\Controllers;
use App\bai_viet;
use Illuminate\Http\Request;

class GioiThieuController extends Controller
{
     //
     public function index()
     {
         //
         $gioi_thieu = bai_viet::where('loai_bai_viet','gioi_thieu')->first();
         if(!$gioi_thieu){
             $gioi_thieu = new bai_viet;
             $gioi_thieu->loai_bai_viet = 'gioi_thieu';
             $gioi_thieu->save();
         }
         return view('public.GioiThieu.index',['gioi_thieu' => $gioi_thieu]);
     }

     public function indexAdmin()
     {
         //
         $gioi_thieu = bai_viet::where('loai_bai_viet','gioi_thieu')->first();
         if(!$gioi_thieu){
             $gioi_thieu = new bai_viet;
             $gioi_thieu->loai_bai_viet = 'gioi_thieu';
             $gioi_thieu->save();
         }
         return view('admin.GioiThieu.index',['gioi_thieu' => $gioi_thieu]);
     }
 
     public function update(Request $request)
     {
         //
         $input = $request->all();
         $gioi_thieu = bai_viet::where([['id',$input['id']],['loai_bai_viet','gioi_thieu']])->first();
         $gioi_thieu->tieu_de = $input['tieu_de'];
         $gioi_thieu->noi_dung = $input['noi_dung'];
         $gioi_thieu->seo_title = $input['seo_title'];
         $gioi_thieu->seo_description = $input['seo_description'];
         $gioi_thieu->seo_robots = $input['seo_robots'];
         $gioi_thieu->save();
         return  redirect()->back();
     }
}
