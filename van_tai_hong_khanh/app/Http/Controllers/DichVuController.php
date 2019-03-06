<?php

namespace App\Http\Controllers;
use App\bai_viet;
use Illuminate\Http\Request;

class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $dichvus = bai_viet::where('loai_bai_viet','dich_vu')->get();

        return view('public.DichVu.index',['dichvus' => $dichvus]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.DichVu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request )
    {
        $input = $request->all();
        $dich_vu = new bai_viet;
        $dich_vu->tieu_de = $input['tieu_de'];
        $dich_vu->noi_dung = $input['noi_dung'];
        $dich_vu->seo_title = $input['seo_title'];
        $dich_vu->seo_description = $input['seo_description'];
        $dich_vu->seo_robots = $input['seo_robots'];
        $dich_vu->loai_bai_viet = 'dich_vu';
        $dich_vu->url_prefix = $this->utf8tourl($input['tieu_de']);
        $hinh_mo_ta = $this->upload_image($request);
        $dich_vu->hinh_mo_ta = $hinh_mo_ta;

        $dich_vu->save();
        return redirect('/admin/dich-vu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($url_prefix)
    {
        //
        $dich_vu = bai_viet::where([['url_prefix',$url_prefix],['loai_bai_viet','dich_vu']])->first();
        return view('public.DichVu.show',['dich_vu' => $dich_vu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $dich_vu = bai_viet::where('id',$id)->first();
        return view('admin.DichVu.edit',['dich_vu' => $dich_vu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //
        $input = $request->all();
        $dich_vu = bai_viet::where('id',$input['id'])->first();
        $dich_vu->tieu_de = $input['tieu_de'];
        $dich_vu->noi_dung = $input['noi_dung'];
        $dich_vu->seo_title = $input['seo_title'];
        $dich_vu->seo_description = $input['seo_description'];
        $dich_vu->seo_robots = $input['seo_robots'];
        $dich_vu->save();
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        //
        $input = $request->all();
        $dich_vu = bai_viet::where('id',$input['id'])->first();
        $dich_vu->delete();
        return  redirect()->back();
    }

    public function indexAdmin()
    {
        //
        $dichvus = bai_viet::where('loai_bai_viet','dich_vu')->get();

        return view('admin.DichVu.index',['dichvus' => $dichvus]);
    }

    public function showAdmin($id)
    {
        //
        $dich_vu = bai_viet::where('id',$id)->first();
        return view('admin.DichVu.show',['dich_vu' => $dich_vu]);
    }
    
}
