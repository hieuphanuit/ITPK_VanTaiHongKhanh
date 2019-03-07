@extends('public.master')


@section('meta')
    <title>{{$tin_tuc->seo_title}}</title>
    <meta name="description" content="{{$tin_tuc->seo_description}}">
    <meta name="robots" content="{{$tin_tuc->seo_robots}}">
@endsection

@section('title')
    

@endsection
@section('content')
<div class="container">
    <h1>{{$tin_tuc->tieu_de}}</h1>
   <div>
        <?php echo($tin_tuc->noi_dung) ?>
   </div>
   <div>
        <label style="padding-top: 35px; vertical-align: middle">Chia sẻ: </label>
        <div id="share" style="display: inline-block"></div>
   </div>

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
