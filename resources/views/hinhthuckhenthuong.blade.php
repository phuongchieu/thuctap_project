@extends('index')
@section('hinhthuckhenthuong')
	<div class=""> 
		<div class="donvi"><span class="donvi">Danh sách đơn vị</span>
		<span class="donvibt">
			<button type="button" class="btn btn-primary">Thêm</button>
		</span>
		</div>
		<div class="donvict">
		<!-- <form class="form-inline">
		<div class="form-group mx-sm-3">
			<input type="text" class="form-control" placeholder="Nhập tên -- mã Đơn vị" >
		</div>
		<select name="" class="form-control">
				<option value="">--chọn dân tộc--</option>
			</select>
			<span class="abc">
			<select name="" class="form-control">
				<option value="">--Chọn tôn giáo--</option>
			</select></span>
		</form> -->
		</div>
		<div class="donvitb">
		<table class="table table-bordered table-info">
			<tr>
				<th>STT</th>
				<th>Tên đơn vị</th>
				<th>Hinh thuc khen thuong</th>
			</tr>

		</table>
		</div>
	</div>
@endsection