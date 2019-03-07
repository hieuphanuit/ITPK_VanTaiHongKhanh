<?php

namespace App\Http\Controllers;
use App\moi_gioi_bds;
use Illuminate\Http\Request;

class MoiGioiBdsController extends Controller
{
    //
    public function indexAdmin()
    {
        $moi_gioi_bdss = moi_gioi_bds::all();
        return view('admin.MoiGioiBDS.index',['moi_gioi_bdss' => $moi_gioi_bdss]);
    }
    public function create()
    {
        return view('admin.MoiGioiBDS.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $moi_gioi_bds = new moi_gioi_bds;
        $moi_gioi_bds->ten = $input['ten'];
        $moi_gioi_bds->save();
        return redirect('admin/moi-gioi-bds');
    }
    public function destroy(Request $request)
    {
        //
        $input = $request->all();
        $moi_gioi_bds = moi_gioi_bds::where('id',$input['id'])->first();
        $moi_gioi_bds->delete();
        return  redirect()->back();
    }
    
}
