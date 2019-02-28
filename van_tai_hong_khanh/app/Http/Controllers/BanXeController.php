<?php

namespace App\Http\Controllers;
use App\bai_viet;
use Illuminate\Http\Request;

class BanXeController extends Controller
{
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
        return view('admin.BanXe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request )
    {
        $input = $request->all();
        $ban_xe = new bai_viet;
        $ban_xe->tieu_de = $input['tieu_de'];
        $ban_xe->noi_dung = $input['noi_dung'];
        $ban_xe->seo_title = $input['seo_title'];
        $ban_xe->seo_description = $input['seo_description'];
        $ban_xe->seo_robots = $input['seo_robots'];
        $ban_xe->loai_bai_viet = 'ban_xe';
        $ban_xe->save();
        return redirect('/admin/ban-xe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $ban_xe = bai_viet::where('id',$id)->first();
        return view('admin.BanXe.show',['ban_xe' => $ban_xe]);
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
        $ban_xe = bai_viet::where('id',$id)->first();
        return view('admin.BanXe.edit',['ban_xe' => $ban_xe]);
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
        $ban_xe = bai_viet::where('id',$input['id'])->first();
        $ban_xe->tieu_de = $input['tieu_de'];
        $ban_xe->noi_dung = $input['noi_dung'];
        $ban_xe->seo_title = $input['seo_title'];
        $ban_xe->seo_description = $input['seo_description'];
        $ban_xe->seo_robots = $input['seo_robots'];
        $ban_xe->save();
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
        $ban_xe = bai_viet::where('id',$input['id'])->first();
        $ban_xe->delete();
        return  redirect()->back();
    }

    public function indexAdmin()
    {
        //
        $ban_xes = bai_viet::where('loai_bai_viet', 'ban_xe')->get();

        return view('admin.BanXe.index',['ban_xes' => $ban_xes]);
    }

    public function showAdmin($id)
    {
        //
        $ban_xe = bai_viet::where('id',$id)->first();
        return view('admin.BanXe.show',['ban_xe' => $ban_xe]);
    }
    
}
