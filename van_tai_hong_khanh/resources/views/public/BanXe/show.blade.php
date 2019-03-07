@extends('public.master')


@section('meta')
    <title>{{$ban_xe->seo_title}}</title>
    <meta name="description" content="{{$ban_xe->seo_description}}">
    <meta name="robots" content="{{$ban_xe->seo_robots}}">
@endsection

@section('title')
    <h1>{{$ban_xe->tieu_de}}</h1>

@endsection
@section('content')
   <div>
        <?php echo($ban_xe->noi_dung) ?>
   </div>
   <div>
        <label style="padding-top: 35px; vertical-align: middle">Chia sẻ: </label>
        <div id="share" style="display: inline-block"></div>
   </div>
@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />  
@endsection


@section('js')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script>
    $('document').ready(function(){
        $("#share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"]
        });

    });
    </script>
@endsection
