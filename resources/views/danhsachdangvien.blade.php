@extends('index')
@section('danhsachdangvien')
<div class=""> 
	<div class="donvi"><span class="donvi">Danh sách Đảng viên</span>
	<span class="donvibt">
		<button type="button" class="btn btn-primary">Thêm</button>
		<button type="button" class="btn btn-danger">Thêm nhiều</button>
	</span>
	</div>
	<div class="donvict">
	<form class="form-inline">
	  <div class="form-group mx-sm-3">
		<input type="text" class="form-control" placeholder="Nhập tên" >
	  </div>
	  <select name="" class="form-control">
			<option value="">--chọn dân tộc--</option>
		</select>
		<span class="abc">
		<select name="" class="form-control">
			<option value="">--Chọn tôn giáo--</option>
		</select></span>
	</form>
	</div>
	<div class="donvitb">
	<table class="table table-bordered table-info">
		<tr>
			<th>STT</th>
			<th>Họ tên</th>
			<th>Hình</th>
			<th>Ngày sinh</th>
			<th>Quê quán</th>
			<th>CMND</th>
			<th>Ngày vào Đảng</th>
			<th>Ngày chính thức</th>
			<th>Số điện thoại</th>
			<th>Dân tộc</th>
		 	<th>Tôn giáo</th>
		 	<th>Hộ khẩu thường trú</th>
		 	<th>Trình độ</th>
		</tr>

	</table>
	</div>
</div>
@endsection