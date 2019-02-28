@extends('admin.master')


@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<a href="{{url('/admin/tin-tuc/create')}}" class="btn btn-success">Thêm Tin Tức</a>
<br>
<br>
<table id="myTable" class="display">
    <thead>
        <tr>
          <th>ID</th>
          <th>Tiêu đề</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
      @foreach($tin_tucs as $tin_tuc)
        <tr>
            <td>{{$tin_tuc->id}}</td>
            <td>{{$tin_tuc->tieu_de}}</td>
            <td>
              <a href="{{url('admin/tin-tuc/'.$tin_tuc->id)}}" class="btn btn-info">Xem</a>
              <a href="{{url('admin/tin-tuc/'.$tin_tuc->id.'/edit')}}" class="btn btn-warning">Sửa</a>
              <form id="form-xoa" action="{{url('admin/tin-tuc/delete')}}" method="POST" style="display: inline-block" onsubmit="return confirm('Xóa bài bán xe này?');">
              {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$tin_tuc->id}}">
                <input id="xoa-btn" type="submit" name="submit" class="btn btn-danger" value="Xóa">
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
@section('js')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<script>
  $(document).ready(function () {
      $('#myTable').DataTable();
  });
</script> 
@endsection





