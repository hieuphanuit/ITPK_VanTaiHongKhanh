<?php

namespace App\Http\Controllers;
use App\bai_viet;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    //
    public function index()
    {
        //

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.TinTuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request )
    {
        $input = $request->all();
        $tin_tuc = new bai_viet;
        $tin_tuc->tieu_de = $input['tieu_de'];
        $tin_tuc->noi_dung = $input['noi_dung'];
        $tin_tuc->mo_ta = $input['mo_ta'];
        $tin_tuc->url_prefix = $this->utf8tourl($input['tieu_de']);
        $hinh_mo_ta = $this->upload_image($request);
        $tin_tuc->hinh_mo_ta = $hinh_mo_ta;
        $tin_tuc->seo_title = $input['seo_title'];
        $tin_tuc->seo_description = $input['seo_description'];
        $tin_tuc->seo_robots = $input['seo_robots'];
        $tin_tuc->loai_bai_viet = 'tin_tuc';
        $tin_tuc->save();
        return redirect('/admin/tin-tuc');
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
        $tin_tuc = bai_viet::where([['url_prefix',$url_prefix],['loai_bai_viet','tin_tuc']])->first();
        return view('public.TinTuc.show',['tin_tuc' => $tin_tuc]);
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
        $tin_tuc = bai_viet::where('id',$id)->first();
        return view('admin.TinTuc.edit',['tin_tuc' => $tin_tuc]);
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
        $tin_tuc = bai_viet::where('id',$input['id'])->first();
        $tin_tuc->tieu_de = $input['tieu_de'];
        $tin_tuc->noi_dung = $input['noi_dung'];
        $tin_tuc->seo_title = $input['seo_title'];
        $tin_tuc->seo_description = $input['seo_description'];
        $tin_tuc->seo_robots = $input['seo_robots'];
        $tin_tuc->save();
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
        $tin_tuc = bai_viet::where('id',$input['id'])->first();
        $tin_tuc->delete();
        return  redirect()->back();
    }

    public function indexAdmin()
    {
        //
        $tin_tucs = bai_viet::where('loai_bai_viet', 'tin_tuc')->get();

        return view('admin.TinTuc.index',['tin_tucs' => $tin_tucs]);
    }

    public function showAdmin($id)
    {
        //
        $tin_tuc = bai_viet::where('id',$id)->first();
        return view('admin.TinTuc.show',['tin_tuc' => $tin_tuc]);
    }
}
