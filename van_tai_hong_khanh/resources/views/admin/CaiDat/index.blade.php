@extends('admin.master')
@section('content')
    <form action="{{ url('/admin/cai-dat/update') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="usr">Facebook chat box:</label>
            <textarea class="form-control" name="facebook_chat_box"><?php echo $facebook_chat_box ?></textarea>
        </div>
        <br>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection

@section('content-header')
    Cài Đặt
@endsection

