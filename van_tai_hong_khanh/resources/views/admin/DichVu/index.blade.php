@extends('admin.master')


@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<a href="{{url('/admin/dich-vu/create')}}" class="btn btn-success">Thêm dịch vụ</a>
<br>
<br>
<table id="myTable" class="display">
    <thead>
        <tr>
          <th>ID</th>
          <th>Tên dịch vụ</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
      @foreach($dichvus as $dichvu)
        <tr>
            <td>{{$dichvu->id}}</td>
            <td>{{$dichvu->tieu_de}}</td>
            <td>
              <a href="{{url('admin/dich-vu/'.$dichvu->id)}}" class="btn btn-info">Xem</a>
              <a href="{{url('admin/dich-vu/'.$dichvu->id.'/edit')}}" class="btn btn-warning">Sửa</a>
              <form id="form-xoa" action="{{url('admin/dich-vu/delete')}}" method="POST" style="display: inline-block" onsubmit="return confirm('Xóa dịch vụ này?');">
              {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$dichvu->id}}">
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





