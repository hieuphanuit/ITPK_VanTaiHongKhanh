@extends('admin.master')


@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<a href="{{url('/admin/ban-xe/create')}}" class="btn btn-success">Thêm bài bán xe</a>
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
      @foreach($ban_xes as $ban_xe)
        <tr>
            <td>{{$ban_xe->id}}</td>
            <td>{{$ban_xe->tieu_de}}</td>
            <td>
              <a href="{{url('admin/ban-xe/'.$ban_xe->id)}}" class="btn btn-info">Xem</a>
              <a href="{{url('admin/ban-xe/'.$ban_xe->id.'/edit')}}" class="btn btn-warning">Sửa</a>
              <form id="form-xoa" action="{{url('admin/ban-xe/delete')}}" method="POST" style="display: inline-block" onsubmit="return confirm('Xóa bài bán xe này?');">
              {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$ban_xe->id}}">
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





