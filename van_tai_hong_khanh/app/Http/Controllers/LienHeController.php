<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lien_he;
use App\thong_tin_lien_he;
use PHPMailer\PHPMailer;



class LienHeController extends Controller
{
    //  
    public function index()
    {
        $lien_he = lien_he::first();
        if(!$lien_he){
            $lien_he = new lien_he;
            $lien_he->save();
        }
        return view('public.LienHe.index',['lien_he' => $lien_he]);
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
        $lien_he = new lien_he;
        $lien_he->dia_chi = $input['dia_chi'];
        $lien_he->dien_thoai = $input['dien_thoai'];
        $lien_he->email = $input['email'];
        $lien_he->website = $input['website'];
        $lien_he->map = $input['map'];
        $lien_he->save();
        return redirect('/admin/lien-he');
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
        $lien_he = lien_he::where('id',$input['id'])->first();
        $lien_he->dia_chi = $input['dia_chi'];
        $lien_he->dien_thoai = $input['dien_thoai'];
        $lien_he->email = $input['email'];
        $lien_he->website = $input['website'];
        $lien_he->map = $input['map'];
        $lien_he->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
 
    public function indexAdmin()
    {
        //
        $lien_he = lien_he::first();
        if(!$lien_he){
            $lien_he = new lien_he;
            $lien_he->save();
        }
        return view('admin.LienHe.index',['lien_he' => $lien_he]);
    }

    public function submitForm(Request $request){
        $input = $request->all();
        $thong_tin_lien_he = new thong_tin_lien_he;
        $thong_tin_lien_he->ten = $input['ten'];
        $thong_tin_lien_he->dia_chi = $input['dia_chi'];
        $thong_tin_lien_he->so_dien_thoai = $input['so_dien_thoai'];
        $thong_tin_lien_he->email = $input['email'];
        $thong_tin_lien_he->save();
        
        $text             = 'Họ tên: '. $input['ten'].'<br>';
        $text             .= 'Địa chỉ: '. $input['dia_chi'].'<br>';
        $text             .= 'Họ tên: '. $input['so_dien_thoai'].'<br>';
        $text             .= 'Email: '. $input['email'].'<br>';
        $mail             = new PHPMailer\PHPMailer(); 
        $mail->SMTPAuth   = true; 
        $mail->CharSet = 'utf-8';
        $mail->SMTPSecure = env('MAIL_ENCRYPTION','SSL'); 
        $mail->Host       = env('MAIL_HOST','smtp.gmail.com'); 
        $mail->Port       = env('MAIL_PORT','465'); 
        $mail->IsHTML(true);
        $mail->Username = env('MAIL_USERNAME',''); 
        $mail->Password = env('MAIL_PASSWORD',''); 
        $mail->SetFrom(env('MAIL_USERNAME',''), 'Sender Name');
        $mail->Subject = "Liên Hệ mail";
        $mail->Body    = $text;
        $mail->AddAddress(env('LIEN_HE_EMAIL',''), "Receiver Name");
        if ($mail->Send()) {
            return redirect()->back()->with('success', ['Thông tin của bạn đã được gửi đi.']);
        } else {
            return redirect()->back()->with('errors', ['Gửi thông tin không thành công']);
        }
        
    }
}
